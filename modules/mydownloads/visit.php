<?php
// $Id: visit.php,v 1.3 2005/08/03 12:39:13 onokazu Exp $
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

include "../../mainfile.php";
$lid = intval($_GET['lid']);
if (empty($lid)) {
    header('Location: '.XOOPS_URL.'/');
    exit();
}
$cid = intval($_GET['cid']);
if ( $xoopsModuleConfig['check_host'] ) {
    $goodhost      = 0;
    $referer       = parse_url(xoops_getenv('HTTP_REFERER'));
    $referer_host  = $referer['host'];
    foreach ( $xoopsModuleConfig['referers'] as $ref ) {
        if ( !empty($ref) && preg_match("/".$ref."/i", $referer_host) ) {
            $goodhost = "1";
            break;
        }
    }
    if (!$goodhost) {
        redirect_header(XOOPS_URL . "/modules/mydownloads/singlefile.php?cid=$cid&amp;lid=$lid", 20, _MD_NOPERMISETOLINK);
        exit();
    }
}
$sql = sprintf("UPDATE %s SET hits = hits+1 WHERE lid = %u AND status > 0", $xoopsDB->prefix("mydownloads_downloads"), $lid);
$xoopsDB->queryF($sql);
$result = $xoopsDB->query("SELECT url FROM ".$xoopsDB->prefix("mydownloads_downloads")." WHERE lid=$lid AND status>0");
list($url) = $xoopsDB->fetchRow($result);
if (empty($url)) {
    header('Location: '.XOOPS_URL.'/');
    exit();
}
if (!preg_match("/^ed2k*:\/\//i", $url)) {
    Header("Location: $url");
}
$url = htmlspecialchars(preg_replace( '/javascript:/si' , 'java script:', $url ), ENT_QUOTES);
echo "<html><head><meta http-equiv=\"Refresh\" content=\"0; URL=".$url."\"></meta></head><body></body></html>";
exit();
?>
