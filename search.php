<?php
// $Id: search.php,v 1.4 2005/08/03 12:39:11 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$xoopsOption['pagetype'] = "search";

include 'mainfile.php';
$config_handler =& xoops_gethandler('config');
$xoopsConfigSearch =& $config_handler->getConfigsByCat(XOOPS_CONF_SEARCH);

if ($xoopsConfigSearch['enable_search'] != 1) {
    header('Location: '.XOOPS_URL.'/index.php');
    exit();
}
$action = "search";
if (!empty($_GET['action'])) {
  $action = $_GET['action'];
} elseif (!empty($_POST['action'])) {
  $action = $_POST['action'];
}
$query = "";
if (!empty($_GET['query'])) {
  $query = trim($_GET['query']);
} elseif (!empty($_POST['query'])) {
  $query = trim($_POST['query']);
}
$andor = "AND";
if (!empty($_GET['andor'])) {
  $andor = $_GET['andor'];
} elseif (!empty($_POST['andor'])) {
  $andor = $_POST['andor'];
}
$mid = $uid = $start = 0;
if ( !empty($_GET['mid']) ) {
  $mid = intval($_GET['mid']);
} elseif ( !empty($_POST['mid']) ) {
  $mid = intval($_POST['mid']);
}
if (!empty($_GET['uid'])) {
  $uid = intval($_GET['uid']);
} elseif (!empty($_POST['uid'])) {
  $uid = intval($_POST['uid']);
}
if (!empty($_GET['start'])) {
  $start = intval($_GET['start']);
} elseif (!empty($_POST['start'])) {
  $start = intval($_POST['start']);
}
if (!empty($_GET['mids'])) {
  $mids = $_GET['mids'];
} elseif (!empty($_POST['mids'])) {
  $mids = $_POST['mids'];
}

$queries = array();

if ($action == "results") {
    if ($query == "") {
         redirect_header("search.php",1,_SR_PLZENTER);
        exit();
    }
} elseif ($action == "showall") {
    if ($query == "" || empty($mid)) {
        redirect_header("search.php",1,_SR_PLZENTER);
        exit();
    }
} elseif ($action == "showallbyuser") {
    if (empty($mid) || empty($uid)) {
        redirect_header("search.php",1,_SR_PLZENTER);
        exit();
    }
}

$groups = is_object($xoopsUser) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
$gperm_handler = & xoops_gethandler( 'groupperm' );
$available_modules = $gperm_handler->getItemIds('module_read', $groups);

if ($action == 'search') {
    include XOOPS_ROOT_PATH.'/header.php';
    include 'include/searchform.php';
    $search_form->display();
    include XOOPS_ROOT_PATH.'/footer.php';
    exit();
}

if ( $andor != "OR" && $andor != "exact" && $andor != "AND" ) {
    $andor = "AND";
}

$myts =& MyTextSanitizer::getInstance();
if ($action != 'showallbyuser') {
    if ( $andor != "exact" ) {
        $ignored_queries = array(); // holds kewords that are shorter than allowed minmum length
        $temp_queries = preg_split('/[\s,]+/', $query);
        foreach ($temp_queries as $q) {
            $q = trim($q);
            if (strlen($q) >= $xoopsConfigSearch['keyword_min']) {
                $queries[] = $myts->addSlashes($q);
            } else {
                $ignored_queries[] = $myts->addSlashes($q);
            }
        }
        if (count($queries) == 0) {
            redirect_header('search.php', 2, sprintf(_SR_KEYTOOSHORT, $xoopsConfigSearch['keyword_min']));
            exit();
        }
    } else {
        $query = trim($query);
        if (strlen($query) < $xoopsConfigSearch['keyword_min']) {
            redirect_header('search.php', 2, sprintf(_SR_KEYTOOSHORT, $xoopsConfigSearch['keyword_min']));
            exit();
        }
        $queries = array($myts->addSlashes($query));
    }
}
switch ($action) {
    case "results":
    $module_handler =& xoops_gethandler('module');
    $criteria = new CriteriaCompo(new Criteria('hassearch', 1));
    $criteria->add(new Criteria('isactive', 1));
    $criteria->add(new Criteria('mid', "(".implode(',', $available_modules).")", 'IN'));
    $modules =& $module_handler->getObjects($criteria, true);
    if (empty($mids) || !is_array($mids)) {
        unset($mids);
        $mids = array_keys($modules);
    }
    include XOOPS_ROOT_PATH."/header.php";
    echo "<h3>"._SR_SEARCHRESULTS."</h3>\n";
    echo _SR_KEYWORDS.':';
    if ($andor != 'exact') {
        foreach ($queries as $q) {
            echo ' <b>'.htmlspecialchars(stripslashes($q)).'</b>';
        }
        if (!empty($ignored_queries)) {
            echo '<br />';
            printf(_SR_IGNOREDWORDS, $xoopsConfigSearch['keyword_min']);
            foreach ($ignored_queries as $q) {
                echo ' <b>'.htmlspecialchars(stripslashes($q)).'</b>';
            }
        }
    } else {
        echo ' "<b>'.htmlspecialchars(stripslashes($queries[0])).'</b>"';
    }
    echo '<br />';
    foreach ($mids as $mid) {
        $mid = intval($mid);
        if ( in_array($mid, $available_modules) ) {
            $module =& $modules[$mid];
            $results =& $module->search($queries, $andor, 5, 0);
            echo "<h4>".$myts->makeTboxData4Show($module->getVar('name'))."</h4>";
            $count = count($results);
            if (!is_array($results) || $count == 0) {
                echo "<p>"._SR_NOMATCH."</p>";
            } else {
                for ($i = 0; $i < $count; $i++) {
                    if (isset($results[$i]['image']) && $results[$i]['image'] != "") {
                        echo "<img src='modules/".$module->getVar('dirname')."/".$results[$i]['image']."' alt='".$myts->makeTboxData4Show($module->getVar('name'))."' />&nbsp;";
                    } else {
                        echo "<img src='images/icons/posticon2.gif' alt='".$myts->makeTboxData4Show($module->getVar('name'))."' width='26' height='26' />&nbsp;";
                    }
                    echo "<b><a href='modules/".$module->getVar('dirname')."/".$results[$i]['link']."'>".$myts->makeTboxData4Show($results[$i]['title'])."</a></b><br />\n";
                    echo "<small>";
                    $results[$i]['uid'] = intval($results[$i]['uid']);
                    if ( !empty($results[$i]['uid']) ) {
                        $uname = XoopsUser::getUnameFromId($results[$i]['uid']);
                        echo "&nbsp;&nbsp;<a href='".XOOPS_URL."/userinfo.php?uid=".$results[$i]['uid']."'>".$uname."</a>\n";
                    }
                    echo $results[$i]['time'] ? " (". formatTimestamp(intval($results[$i]['time'])).")" : "";
                    echo "</small><br />\n";
                }
                if ( $count == 5 ) {
                    $search_url = XOOPS_URL.'/search.php?query='.urlencode(stripslashes(implode(' ', $queries)));
                    $search_url .= "&mid=$mid&action=showall&andor=$andor";
                    echo '<br /><a href="'.htmlspecialchars($search_url).'">'._SR_SHOWALLR.'</a></p>';
                }
            }
        }
        unset($results);
        unset($module);
    }
    include "include/searchform.php";
    $search_form->display();
    break;
    case "showall":
    case 'showallbyuser':
    include XOOPS_ROOT_PATH."/header.php";
    $module_handler =& xoops_gethandler('module');
    $module =& $module_handler->get($mid);
    $results =& $module->search($queries, $andor, 20, $start, $uid);
    $count = count($results);
    if (is_array($results) && $count > 0) {
        $next_results =& $module->search($queries, $andor, 1, $start + 20, $uid);
        $next_count = count($next_results);
        $has_next = false;
        if (is_array($next_results) && $next_count == 1) {
            $has_next = true;
        }
        echo "<h4>"._SR_SEARCHRESULTS."</h4>\n";
        if ($action == 'showall') {
            echo _SR_KEYWORDS.':';
            if ($andor != 'exact') {
                foreach ($queries as $q) {
                    echo ' <b>'.htmlspecialchars(stripslashes($q)).'</b>';
                }
            } else {
                echo ' "<b>'.htmlspecialchars(stripslashes($queries[0])).'</b>"';
            }
            echo '<br />';
        }
        //    printf(_SR_FOUND,$count);
        //    echo "<br />";
        printf(_SR_SHOWING, $start+1, $start + $count);
        echo "<h5>".$myts->makeTboxData4Show($module->getVar('name'))."</h5>";
        for ($i = 0; $i < $count; $i++) {
            if (isset($results[$i]['image']) && $results[$i]['image'] != '') {
                echo "<img src='modules/".$module->getVar('dirname')."/".$results[$i]['image']."' alt='".$myts->makeTboxData4Show($module->getVar('name'))."' />&nbsp;";
            } else {
                echo "<img src='images/icons/posticon2.gif' alt='".$myts->makeTboxData4Show($module->name())."' width='26' height='26' />&nbsp;";
            }
            echo "<b><a href='modules/".$module->getVar('dirname')."/".$results[$i]['link']."'>".$myts->makeTboxData4Show($results[$i]['title'])."</a></b><br />\n";
            echo "<small>";
            $results[$i]['uid'] = intval($results[$i]['uid']);
            if ( !empty($results[$i]['uid']) ) {
                $uname = XoopsUser::getUnameFromId($results[$i]['uid']);
                echo "&nbsp;&nbsp;<a href='".XOOPS_URL."/userinfo.php?uid=".$results[$i]['uid']."'>".$uname."</a>\n";
            }
            echo $results[$i]['time'] ? " (". formatTimestamp(intval($results[$i]['time'])).")" : "";
            echo "</small><br />\n";
        }
        echo '
        <table>
          <tr>
        ';
        $search_url = XOOPS_URL.'/search.php?query='.urlencode(stripslashes(implode(' ', $queries)));
        $search_url .= "&mid=$mid&action=$action&andor=$andor";
        if ($action=='showallbyuser') {
            $search_url .= "&uid=$uid";
        }
        if ( $start > 0 ) {
            $prev = $start - 20;
            echo '<td align="left">
            ';
            $search_url_prev = $search_url."&start=$prev";
            echo '<a href="'.htmlspecialchars($search_url_prev).'">'._SR_PREVIOUS.'</a></td>
            ';
        }
        echo '<td>&nbsp;&nbsp;</td>
        ';
        if (false != $has_next) {
            $next = $start + 20;
            $search_url_next = $search_url."&start=$next";
            echo '<td align="right"><a href="'.htmlspecialchars($search_url_next).'">'._SR_NEXT.'</a></td>
            ';
        }
        echo '
          </tr>
        </table>
        <p>
        ';
    } else {
        echo '<p>'._SR_NOMATCH.'</p>';
    }
    include "include/searchform.php";
    $search_form->display();
    echo '</p>
    ';
    break;
}
include XOOPS_ROOT_PATH."/footer.php";
?>