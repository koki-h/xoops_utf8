<?php
// $Id: functions.php,v 1.7 2006/05/01 02:37:26 onokazu Exp $
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

// ################## Various functions from here ################

function xoops_header($closehead=true)
{
    global $xoopsConfig, $xoopsTheme, $xoopsConfigMetaFooter;
    $myts =& MyTextSanitizer::getInstance();
    if ($xoopsConfig['gzip_compression'] == 1) {
        ob_start("ob_gzhandler");
    } else {
        ob_start();
    }
    if (!headers_sent()) {
        header ('Content-Type:text/html; charset='._CHARSET);
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header('Cache-Control: no-store, no-cache, max-age=1, s-maxage=1, must-revalidate, post-check=0, pre-check=0');
        header("Pragma: no-cache");
    }
    echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>";

    echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'._LANGCODE.'" lang="'._LANGCODE.'">
    <head>
    <meta http-equiv="content-type" content="text/html; charset='._CHARSET.'" />
    <meta http-equiv="content-language" content="'._LANGCODE.'" />
    <meta name="robots" content="'.htmlspecialchars($xoopsConfigMetaFooter['meta_robots']).'" />
    <meta name="keywords" content="'.htmlspecialchars($xoopsConfigMetaFooter['meta_keywords']).'" />
    <meta name="description" content="'.htmlspecialchars($xoopsConfigMetaFooter['meta_desc']).'" />
    <meta name="rating" content="'.htmlspecialchars($xoopsConfigMetaFooter['meta_rating']).'" />
    <meta name="author" content="'.htmlspecialchars($xoopsConfigMetaFooter['meta_author']).'" />
    <meta name="copyright" content="'.htmlspecialchars($xoopsConfigMetaFooter['meta_copyright']).'" />
    <meta name="generator" content="XOOPS" />
    <title>'.htmlspecialchars($xoopsConfig['sitename']).'</title>
    <script type="text/javascript" src="'.XOOPS_URL.'/include/xoops.js"></script>
    ';
    $themecss = getcss($xoopsConfig['theme_set']);
    echo '<link rel="stylesheet" type="text/css" media="all" href="'.XOOPS_URL.'/xoops.css" />';
    if ($themecss) {
        echo '<link rel="stylesheet" type="text/css" media="all" href="'.$themecss.'" />';
        //echo '<style type="text/css" media="all"><!-- @import url('.$themecss.'); --></style>';
    }
    if ($closehead) {
        echo '</head><body>';
    }
}

function xoops_footer()
{
    echo '</body></html>';
    ob_end_flush();
}

function xoops_error($msg, $title='')
{
    echo '
    <div class="errorMsg">';
    if ($title != '') {
        echo '<h4>'.$title.'</h4>';
    }
    if (is_array($msg)) {
        foreach ($msg as $m) {
            echo $m.'<br />';
        }
    } else {
        echo $msg;
    }
    echo '</div>';
}

function xoops_result($msg, $title='')
{
    echo '
    <div class="resultMsg">';
    if ($title != '') {
        echo '<h4>'.$title.'</h4>';
    }
    if (is_array($msg)) {
        foreach ($msg as $m) {
            echo $m.'<br />';
        }
    } else {
        echo $msg;
    }
    echo '</div>';
}

function xoops_confirm($hiddens, $action, $msg, $submit = '', $addToken = true)
{
    $submit = ($submit != '') ? trim($submit) : _SUBMIT;
    echo '
    <div class="confirmMsg">
      <h4>'.$msg.'</h4>
      <form method="post" action="'.$action.'">
    ';
    foreach ($hiddens as $name => $value) {
        if (is_array($value)) {
            foreach ($value as $caption => $newvalue) {
                echo '<input type="radio" name="'.$name.'" value="'.htmlspecialchars($newvalue).'" /> '.$caption;
            }
            echo '<br />';
        } else {
            echo '<input type="hidden" name="'.$name.'" value="'.htmlspecialchars($value).'" />';
        }
    }
    if ($addToken != false) {
        $token=&XoopsMultiTokenHandler::quickCreate(XOOPS_TOKEN_DEFAULT);
        echo $token->getHtml();
    }
    echo '
        <input type="submit" name="confirm_submit" value="'.$submit.'" /> <input type="button" name="confirm_back" value="'._CANCEL.'" onclick="javascript:history.go(-1);" />
      </form>
    </div>
    ';
}

/**
 * @brief xoops_confirm alias [test]
 */
function xoops_token_confirm($hiddens, $action, $msg, $submit='')
{
    return xoops_confirm($hiddens, $action, $msg, $submit, true);
}

function xoops_confirm_validate()
{
    return XoopsMultiTokenHandler::quickValidate(XOOPS_TOKEN_DEFAULT);
}

function xoops_refcheck($docheck=1)
{
    $ref = xoops_getenv('HTTP_REFERER');
    if ($docheck == 0) {
        return true;
    }
    if ($ref == '') {
        return false;
    }
    if (strpos($ref, XOOPS_URL) !== 0 ) {
        return false;
    }
    return true;
}

function xoops_getUserTimestamp($time, $timeoffset="")
{
    global $xoopsConfig, $xoopsUser;
    if ($timeoffset == '') {
        if ($xoopsUser) {
            $timeoffset = $xoopsUser->getVar("timezone_offset");
        } else {
            $timeoffset = $xoopsConfig['default_TZ'];
        }
    }
    $usertimestamp = intval($time) + (intval($timeoffset) - $xoopsConfig['server_TZ'])*3600;
    return $usertimestamp;
}



/*
 * Function to display formatted times in user timezone
 */
function formatTimestamp($time, $format="l", $timeoffset="")
{
    global $xoopsConfig, $xoopsUser;
    $usertimestamp = xoops_getUserTimestamp($time, $timeoffset);
    switch (strtolower($format)) {
    case 's':
        $datestring = _SHORTDATESTRING;
        break;
    case 'm':
        $datestring = _MEDIUMDATESTRING;
        break;
    case 'mysql':
        $datestring = "Y-m-d H:i:s";
        break;
    case 'rss':
        $datestring = "r";
        break;
    case 'l':
        $datestring = _DATESTRING;
        break;
    default:
        if ($format != '') {
            $datestring = $format;
        } else {
            $datestring = _DATESTRING;
        }
        break;
    }
    return ucfirst(date($datestring, $usertimestamp));
}

/*
 * Function to calculate server timestamp from user entered time (timestamp)
 */
function userTimeToServerTime($timestamp, $userTZ=null)
{
    global $xoopsConfig;
    if (!isset($userTZ)) {
        $userTZ = $xoopsConfig['default_TZ'];
    }
    $timestamp = $timestamp - (($userTZ - $xoopsConfig['server_TZ']) * 3600);
    return $timestamp;
}

function xoops_makepass() {
    $makepass = '';
    $syllables = array("er","in","tia","wol","fe","pre","vet","jo","nes","al","len","son","cha","ir","ler","bo","ok","tio","nar","sim","ple","bla","ten","toe","cho","co","lat","spe","ak","er","po","co","lor","pen","cil","li","ght","wh","at","the","he","ck","is","mam","bo","no","fi","ve","any","way","pol","iti","cs","ra","dio","sou","rce","sea","rch","pa","per","com","bo","sp","eak","st","fi","rst","gr","oup","boy","ea","gle","tr","ail","bi","ble","brb","pri","dee","kay","en","be","se");
    srand((double)microtime()*1000000);
    for ($count = 1; $count <= 4; $count++) {
        if (rand()%10 == 1) {
            $makepass .= sprintf("%0.0f",(rand()%50)+1);
        } else {
            $makepass .= sprintf("%s",$syllables[rand()%62]);
        }
    }
    return $makepass;
}

/*
 * Functions to display dhtml loading image box
 */
function OpenWaitBox()
{
    echo "<div id='waitDiv' style='position:absolute;left:40%;top:50%;visibility:hidden;text-align: center;'>
    <table cellpadding='6' border='2' class='bg2'>
      <tr>
        <td align='center'><b><big>" ._FETCHING."</big></b><br /><img src='".XOOPS_URL."/images/await.gif' alt='' /><br />" ._PLEASEWAIT."</td>
      </tr>
    </table>
    </div>
    <script type='text/javascript'>
    <!--//
    var DHTML = (document.getElementById || document.all || document.layers);
    function ap_getObj(name) {
        if (document.getElementById) {
            return document.getElementById(name).style;
        } else if (document.all) {
            return document.all[name].style;
        } else if (document.layers) {
            return document.layers[name];
        }
    }
    function ap_showWaitMessage(div,flag)  {
        if (!DHTML) {
            return;
        }
        var x = ap_getObj(div);
        x.visibility = (flag) ? 'visible' : 'hidden';
        if (!document.getElementById) {
            if (document.layers) {
                x.left=280/2;
            }
        }
        return true;
    }
    ap_showWaitMessage('waitDiv', 1);
    //-->
    </script>";
}

function CloseWaitBox()
{
    echo "<script type='text/javascript'>
    <!--//
    ap_showWaitMessage('waitDiv', 0);
    //-->
    </script>
    ";
}

function checkEmail($email,$antispam = false)
{
    if (!$email || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+([\.][a-z0-9-]+)+$/i",$email)){
        return false;
    }
    if ($antispam) {
        $email = str_replace("@", " at ", $email);
        $email = str_replace(".", " dot ", $email);
        return $email;
    } else {
        return true;
    }
}

function formatURL($url)
{
    $url = trim($url);
    if ($url != '') {
        if ((!preg_match("/^http[s]*:\/\//i", $url)) && (!preg_match("/^ftp*:\/\//i", $url)) && (!preg_match("/^ed2k*:\/\//i", $url)) ) {
            $url = 'http://'.$url;
        }
    }
    return $url;
}

/*
 * Function to display banners in all pages
 */
function showbanner()
{
    echo xoops_getbanner();
}

/*
 * Function to get banner html tags for use in templates
 */
function xoops_getbanner()
{
    global $xoopsConfig;
    $db =& Database::getInstance();
    $bresult = $db->query("SELECT COUNT(*) FROM ".$db->prefix("banner"));
    list ($numrows) = $db->fetchRow($bresult);
    if ( $numrows > 1 ) {
        $numrows = $numrows-1;
        mt_srand((double)microtime()*1000000);
        $bannum = mt_rand(0, $numrows);
    } else {
        $bannum = 0;
    }
    if ( $numrows > 0 ) {
        $bresult = $db->query("SELECT * FROM ".$db->prefix("banner"), 1, $bannum);
        list ($bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode) = $db->fetchRow($bresult);
        if ($xoopsConfig['my_ip'] == xoops_getenv('REMOTE_ADDR')) {
            // EMPTY
        } else {
            $db->queryF(sprintf("UPDATE %s SET impmade = impmade+1 WHERE bid = %u", $db->prefix("banner"), $bid));
        }
        /* Check if this impression is the last one and print the banner */
        if ( $imptotal == $impmade ) {
            $newid = $db->genId($db->prefix("bannerfinish")."_bid_seq");
            $sql = sprintf("INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)", $db->prefix("bannerfinish"), $newid, $cid, $impmade, $clicks, $date, time());
            $db->queryF($sql);
            $db->queryF(sprintf("DELETE FROM %s WHERE bid = %u", $db->prefix("banner"), $bid));
        }
        if ($htmlbanner){
            $bannerobject = $htmlcode;
        }else{
            $bannerobject = '<div><a href="'.XOOPS_URL.'/banners.php?op=click&amp;bid='.$bid.'" target="_blank">';
            if (stristr($imageurl, '.swf')) {
                $bannerobject = $bannerobject
                    .'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
                    .'<param name="movie" value="'.$imageurl.'"></param>'
                    .'<param name="quality" value="high"></param>'
                    .'<embed src="'.$imageurl.'" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"; type="application/x-shockwave-flash" width="468" height="60">'
                    .'</embed>'
                    .'</object>';
            } else {
                $bannerobject = $bannerobject.'<img src="'.$imageurl.'" alt="" />';
            }

            $bannerobject = $bannerobject.'</a></div>';
        }
        return $bannerobject;
    }
}

/*
* Function to redirect a user to certain pages
*/
function redirect_header($url, $time = 3, $message = '', $addredirect = true)
{
    global $xoopsConfig, $xoopsRequestUri;
    if (preg_match("/[\\0-\\31]/", $url) || preg_match("/^(javascript|vbscript|about):/i", $url)) {
        $url = XOOPS_URL;
    }
    if (!defined('XOOPS_CPFUNC_LOADED')) {
        require_once XOOPS_ROOT_PATH.'/class/template.php';
        $xoopsTpl = new XoopsTpl();
        $xoopsTpl->assign('sitename', htmlspecialchars($xoopsConfig['sitename'], ENT_QUOTES));
        $xoopsTpl->assign('langcode', _LANGCODE);
        $xoopsTpl->assign('charset', _CHARSET);
        $xoopsTpl->assign('time', $time);
        if ($addredirect && strstr($url, 'user.php')) {
            if (!strstr($url, '?')) {
                $url .= '?xoops_redirect='.urlencode($xoopsRequestUri);
            } else {
                $url .= '&amp;xoops_redirect='.urlencode($xoopsRequestUri);
            }
        }
        if (defined('SID') && (! isset($_COOKIE[session_name()]) || ($xoopsConfig['use_mysession'] && $xoopsConfig['session_name'] != '' && !isset($_COOKIE[$xoopsConfig['session_name']])))) {
            if (!strstr($url, '?')) {
                $url .= '?' . SID;
            }
            else {
                $url .= '&amp;'.SID;
            }
        }
        $url = preg_replace("/&amp;/i", '&', htmlspecialchars($url, ENT_QUOTES));
        $xoopsTpl->assign('url', $url);
        $message = trim($message) != '' ? $message : _TAKINGBACK;
        $xoopsTpl->assign('message', $message);
        $xoopsTpl->assign('lang_ifnotreload', sprintf(_IFNOTRELOAD, $url));
        $GLOBALS['xoopsModuleUpdate'] = 1;
        $xoopsTpl->display('db:system_redirect.html');
        exit();
    } else {
        $url = preg_replace("/&amp;/i", '&', htmlspecialchars($url, ENT_QUOTES));
        echo '
        <html>
        <head>
        <title>'.htmlspecialchars($xoopsConfig['sitename']).'</title>
        <meta http-equiv="Content-Type" content="text/html; charset='._CHARSET.'" />
        <meta http-equiv="Refresh" content="'.$time.'; url='.$url.'" />
        <style type="text/css">
                body {background-color : #fcfcfc; font-size: 12px; font-family: Trebuchet MS,Verdana, Arial, Helvetica, sans-serif; margin: 0px;}
                .redirect {width: 70%; margin: 110px; text-align: center; padding: 15px; border: #e0e0e0 1px solid; color: #666666; background-color: #f6f6f6;}
                .redirect a:link {color: #666666; text-decoration: none; font-weight: bold;}
                .redirect a:visited {color: #666666; text-decoration: none; font-weight: bold;}
                .redirect a:hover {color: #999999; text-decoration: underline; font-weight: bold;}
        </style>
        </head>
        <body>
        <div align="center">
        <div class="redirect">
          <span style="font-size: 16px; font-weight: bold;">'.$message.'</span>
          <hr style="height: 3px; border: 3px #E18A00 solid; width: 95%;" />
          <p>'.sprintf(_IFNOTRELOAD, $url).'</p>
        </div>
        </div>
        </body>
        </html>';
    }
    exit();
}

function xoops_getenv($key)
{
    $ret = '';
    //$phpv = explode(".", PHP_VERSION);
    //if ($phpv[0] > 3 && $phpv[1] > 0) {
    //  $ret = isset($_SERVER[$key]) ? $_SERVER[$key] : $_ENV[$key];
    //} else {
        $ret = isset($_SERVER[$key]) ? $_SERVER[$key] : $_ENV[$key];
    //}

    switch($key) {
        case 'PHP_SELF':
        case 'PATH_INFO':
        case 'PATH_TRANSLATED':
            $ret = htmlspecialchars($ret,ENT_QUOTES);
            break;
    }

    return $ret;
}

/*
 * This function is deprecated. Do not use!
 */
function getTheme()
{
    return $GLOBALS['xoopsConfig']['theme_set'];
}

/*
 * Function to get css file for a certain theme
 * This function will be deprecated.
 */
function getcss($theme = '')
{
    return xoops_getcss($theme);
}

/*
 * Function to get css file for a certain themeset
 */
function xoops_getcss($theme = '')
{
    if ($theme == '') {
        $theme = $GLOBALS['xoopsConfig']['theme_set'];
    }
    $uagent = xoops_getenv('HTTP_USER_AGENT');
    if (stristr($uagent, 'mac')) {
        $str_css = 'styleMAC.css';
    } elseif (preg_match("/MSIE ([0-9]\.[0-9]{1,2})/i", $uagent)) {
        $str_css = 'style.css';
    } else {
        $str_css = 'styleNN.css';
    }
    if (is_dir(XOOPS_THEME_PATH.'/'.$theme)) {
        if (file_exists(XOOPS_THEME_PATH.'/'.$theme.'/'.$str_css)) {
            return XOOPS_THEME_URL.'/'.$theme.'/'.$str_css;
        } elseif (file_exists(XOOPS_THEME_PATH.'/'.$theme.'/style.css')) {
            return XOOPS_THEME_URL.'/'.$theme.'/style.css';
        }
    }
    return '';
}

function &getMailer()
{
    global $xoopsConfig;
    include_once XOOPS_ROOT_PATH."/class/xoopsmailer.php";
    if ( file_exists(XOOPS_ROOT_PATH."/language/".$xoopsConfig['language']."/xoopsmailerlocal.php") ) {
        include_once XOOPS_ROOT_PATH."/language/".$xoopsConfig['language']."/xoopsmailerlocal.php";
        if ( class_exists("XoopsMailerLocal") ) {
            $ret =& new XoopsMailerLocal();
            return $ret;
        }
    }
    $ret =& new XoopsMailer();
    return $ret;
}

function &xoops_gethandler($name, $optional = false )
{
    static $handlers;
    $name = strtolower(trim($name));
    if (!isset($handlers[$name])) {
        if ( file_exists( $hnd_file = XOOPS_ROOT_PATH.'/kernel/'.$name.'.php' ) ) {
            require_once $hnd_file;
        }
        $class = 'Xoops'.ucfirst($name).'Handler';
        if (class_exists($class)) {
            $handlers[$name] = new $class($GLOBALS['xoopsDB']);
        }
    }
    if (!isset($handlers[$name]) && !$optional ) {
        trigger_error('Class <b>'.$class.'</b> does not exist<br />Handler Name: '.$name, E_USER_ERROR);
    }
    $ret = false;
    if (isset($handlers[$name])) {
        $ret =& $handlers[$name];
    }
    return $ret;
}

function &xoops_getmodulehandler($name = null, $module_dir = null, $optional = false)
{
    static $handlers;
    // if $module_dir is not specified
    if (!isset($module_dir)) {
        //if a module is loaded
        if (isset($GLOBALS['xoopsModule']) && is_object($GLOBALS['xoopsModule'])) {
            $module_dir = $GLOBALS['xoopsModule']->getVar('dirname');
        } else {
            trigger_error('No Module is loaded', E_USER_ERROR);
        }
    } else {
        $module_dir = trim($module_dir);
    }
    $name = (!isset($name)) ? $module_dir : trim($name);
    if (!isset($handlers[$module_dir][$name])) {
        if ( file_exists( $hnd_file = XOOPS_ROOT_PATH . "/modules/{$module_dir}/class/{$name}.php" ) ) {
            include_once $hnd_file;
        }
        $class = ucfirst(strtolower($module_dir)).ucfirst($name).'Handler';
        if (class_exists($class)) {
            $handlers[$module_dir][$name] = new $class($GLOBALS['xoopsDB']);
        }
    }
    if (!isset($handlers[$module_dir][$name]) && !$optional) {
        trigger_error('Handler does not exist<br />Module: '.$module_dir.'<br />Name: '.$name, E_USER_ERROR);
    }
    $ret = false;
    if (isset($handlers[$module_dir][$name])) {
        $ret =& $handlers[$module_dir][$name];
    }
    return $ret;
}

function xoops_getrank($rank_id =0, $posts = 0)
{
    $db =& Database::getInstance();
    $myts =& MyTextSanitizer::getInstance();
    $rank_id = intval($rank_id);
    if ($rank_id != 0) {
        $sql = "SELECT rank_title AS title, rank_image AS image FROM ".$db->prefix('ranks')." WHERE rank_id = ".$rank_id;
    } else {
        $sql = "SELECT rank_title AS title, rank_image AS image FROM ".$db->prefix('ranks')." WHERE rank_min <= ".$posts." AND rank_max >= ".$posts." AND rank_special = 0";
    }
    $rank = $db->fetchArray($db->query($sql));
    $rank['title'] = $myts->makeTboxData4Show($rank['title']);
    $rank['id'] = $rank_id;
    return $rank;
}


/**
* Returns the portion of string specified by the start and length parameters. If $trimmarker is supplied, it is appended to the return string. This function works fine with multi-byte characters if mb_* functions exist on the server.
*
* @param    string    $str
* @param    int       $start
* @param    int       $length
* @param    string    $trimmarker
*
* @return   string
*/
function xoops_substr($str, $start, $length, $trimmarker = '...')
{
    if ( !XOOPS_USE_MULTIBYTES ) {
        return ( strlen($str) - $start <= $length ) ? substr( $str, $start, $length ) : substr( $str, $start, $length - strlen($trimmarker) ) . $trimmarker;
    }
    if (function_exists('mb_internal_encoding') && @mb_internal_encoding(_CHARSET)) {
        $str2 = mb_strcut( $str , $start , $length - strlen( $trimmarker ) );
        return $str2 . ( mb_strlen($str)!=mb_strlen($str2) ? $trimmarker : '' );
    }
    // phppp patch
    $DEP_CHAR=127;
    $pos_st=0;
    $action = false;
    for ( $pos_i = 0; $pos_i < strlen($str); $pos_i++ ) {
        if ( ord( substr( $str, $pos_i, 1) ) > 127 ) {
            $pos_i++;
        }
        if ($pos_i<=$start) {
            $pos_st=$pos_i;
        }
        if ($pos_i>=$pos_st+$length) {
            $action = true;
            break;
        }
    }
    return ($action) ? substr( $str, $pos_st, $pos_i - $pos_st - strlen($trimmarker) ) . $trimmarker : $str;
}

// RMV-NOTIFY
// ################ Notification Helper Functions ##################

// We want to be able to delete by module, by user, or by item.
// How do we specify this??

function xoops_notification_deletebymodule ($module_id)
{
    $notification_handler =& xoops_gethandler('notification');
    return $notification_handler->unsubscribeByModule ($module_id);
}

function xoops_notification_deletebyuser ($user_id)
{
    $notification_handler =& xoops_gethandler('notification');
    return $notification_handler->unsubscribeByUser ($user_id);
}

function xoops_notification_deletebyitem ($module_id, $category, $item_id)
{
    $notification_handler =& xoops_gethandler('notification');
    return $notification_handler->unsubscribeByItem ($module_id, $category, $item_id);
}

// ################### Comment helper functions ####################

function xoops_comment_count($module_id, $item_id = null)
{
    $comment_handler =& xoops_gethandler('comment');
    $criteria = new CriteriaCompo(new Criteria('com_modid', intval($module_id)));
    if (isset($item_id)) {
        $criteria->add(new Criteria('com_itemid', intval($item_id)));
    }
    return $comment_handler->getCount($criteria);
}

function xoops_comment_delete($module_id, $item_id)
{
    if (intval($module_id) > 0 && intval($item_id) > 0) {
        $comment_handler =& xoops_gethandler('comment');
        $comments =& $comment_handler->getByItemId($module_id, $item_id);
        if (is_array($comments)) {
            $count = count($comments);
            $deleted_num = array();
            for ($i = 0; $i < $count; $i++) {
                if (false != $comment_handler->delete($comments[$i])) {
                    // store poster ID and deleted post number into array for later use
                    $poster_id = $comments[$i]->getVar('com_uid');
                    if ($poster_id != 0) {
                        $deleted_num[$poster_id] = !isset($deleted_num[$poster_id]) ? 1 : ($deleted_num[$poster_id] + 1);
                    }
                }
            }
            $member_handler =& xoops_gethandler('member');
            foreach ($deleted_num as $user_id => $post_num) {
                // update user posts
                $com_poster = $member_handler->getUser($user_id);
                if (is_object($com_poster)) {
                    $member_handler->updateUserByField($com_poster, 'posts', $com_poster->getVar('posts') - $post_num);
                }
            }
            return true;
        }
    }
    return false;
}

// ################ Group Permission Helper Functions ##################

function xoops_groupperm_deletebymoditem($module_id, $perm_name, $item_id = null)
{
    // do not allow system permissions to be deleted
    if (intval($module_id) <= 1) {
        return false;
    }
    $gperm_handler =& xoops_gethandler('groupperm');
    return $gperm_handler->deleteByModule($module_id, $perm_name, $item_id);
}

function &xoops_utf8_encode(&$text)
{
    if (XOOPS_USE_MULTIBYTES == 1) {
        if (function_exists('mb_convert_encoding')) {
            return mb_convert_encoding($text, 'UTF-8', 'auto');
        }
        return $text;
    }
    return utf8_encode($text);
}

function &xoops_convert_encoding(&$text)
{
    return xoops_utf8_encode($text);
}

function xoops_getLinkedUnameFromId($userid)
{
    $userid = intval($userid);
    if ($userid > 0) {
        $member_handler =& xoops_gethandler('member');
        $user =& $member_handler->getUser($userid);
        if (is_object($user)) {
            $linkeduser = '<a href="'.XOOPS_URL.'/userinfo.php?uid='.$userid.'">'. $user->getVar('uname').'</a>';
            return $linkeduser;
        }
    }
    return $GLOBALS['xoopsConfig']['anonymous'];
}

function xoops_trim($text)
{
    if (function_exists('xoops_language_trim')) {
        return xoops_language_trim($text);
    }
    return trim($text);
}

?>