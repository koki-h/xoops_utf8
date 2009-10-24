<?php
// $Id: admin.php,v 1.4 2005/08/03 12:39:11 onokazu Exp $
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

$xoopsOption['pagetype'] = "admin";
include "mainfile.php";
include XOOPS_ROOT_PATH."/include/cp_functions.php";
/*********************************************************/
/* Admin Authentication                                  */
/*********************************************************/

if ( $xoopsUser ) {
    if ( !$xoopsUser->isAdmin(-1) ) {
        redirect_header("index.php",2,_AD_NORIGHT);
        exit();
    }
} else {
    redirect_header("index.php",2,_AD_NORIGHT);
    exit();
}
$op = "list";

if ( !empty($_GET['op']) ) {
    $op = $_GET['op'];
}

if ( !empty($_POST['op']) ) {
    $op = $_POST['op'];
}

if (!file_exists(XOOPS_CACHE_PATH.'/adminmenu.php') && $op != 'generate') {
    xoops_header();
    xoops_token_confirm(array('op' => 'generate'), 'admin.php', _AD_PRESSGEN);
    xoops_footer();
    exit();
}

switch ($op) {
case "list":
    xoops_cp_header();
    // ###### Output warn messages for security ######
    if (is_dir(XOOPS_ROOT_PATH."/install/" )) {
        xoops_error(sprintf(_WARNINSTALL2,XOOPS_ROOT_PATH.'/install/'));
        echo '<br />';
    }
    if ( is_writable(XOOPS_ROOT_PATH."/mainfile.php" ) ) {
        xoops_error(sprintf(_WARNINWRITEABLE,XOOPS_ROOT_PATH.'/mainfile.php'));
        echo '<br />';
    }
/*    if (function_exists('mb_convert_encoding') && !empty($_GET['xoopsorgnews'])) {
        $rssurl = 'http://jp.xoops.org/backend.php';
        $rssfile = XOOPS_CACHE_PATH.'/adminnews.xml';
        $rssdata = '';
        if (!file_exists($rssfile) || filemtime($rssfile) < time() - 86400) {
            require_once XOOPS_ROOT_PATH.'/class/snoopy.php';
            $snoopy = new Snoopy;
            if ($snoopy->fetch($rssurl)) {
                $rssdata = $snoopy->results;
                if (false !== $fp = fopen($rssfile, 'w')) {
                    fwrite($fp, $rssdata);
                }
                fclose($fp);
            }
        } else {
            if (false !== $fp = fopen($rssfile, 'r')) {
                while (!feof ($fp)) {
                    $rssdata .= fgets($fp, 4096);
                }
                fclose($fp);
            }
        }
        if ($rssdata != '') {
            include_once XOOPS_ROOT_PATH.'/class/xml/rss/xmlrss2parser.php';
            $rss2parser = new XoopsXmlRss2Parser($rssdata);
            if (false != $rss2parser->parse()) {
                echo '<table class="outer" width="100%">';
                $items =& $rss2parser->getItems();
                $count = count($items);
                for ($i = 0; $i < $count; $i++) {
                    echo '<tr class="head"><td><a href="'.htmlspecialchars($items[$i]['link']).'" target="_blank">';
                    echo htmlspecialchars(mb_convert_encoding($items[$i]['title'], _CHARSET, 'auto')).'</a> ('.htmlspecialchars($items[$i]['pubdate']).')</td></tr>';
                    if ($items[$i]['description'] != "") {
                        echo '<tr><td class="odd">'.mb_convert_encoding($items[$i]['description'], _CHARSET, 'auto');
                        if ($items[$i]['guid'] != "") {
                            echo '&nbsp;&nbsp;<a href="'.htmlspecialchars($items[$i]['guid']).'" target="_blank">'._MORE.'</a>';
                        }
                        echo '</td></tr>';
                    } elseif ($items[$i]['guid'] != "") {
                        echo '<tr><td class="even" valign="top"></td><td colspan="2" class="odd"><a href="'.htmlspecialchars($items[$i]['guid']).'" target="_blank">'._MORE.'</a></td></tr>';
                    }
                }
                echo '</table>';
            } else {
                echo $rss2parser->getErrors();
            }
        }
    }*/
    xoops_cp_footer();
    break;
case 'generate':
    if (xoops_confirm_validate()) {
        xoops_module_write_admin_menu(xoops_module_get_admin_menu());
    }
    redirect_header('admin.php', 1, _AD_LOGINADMIN);
    break;
default:
    break;
}
?>