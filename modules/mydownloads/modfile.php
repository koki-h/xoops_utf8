<?php
// $Id: modfile.php,v 1.3 2005/09/04 20:46:09 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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

include "header.php";
include_once XOOPS_ROOT_PATH."/class/xoopstree.php";
include_once XOOPS_ROOT_PATH."/class/module.errorhandler.php";
$myts =& MyTextSanitizer::getInstance(); // MyTextSanitizer object
$mytree = new XoopsTree($xoopsDB->prefix("mydownloads_cat"),"cid","pid");

if($_POST['submit']) {
	$eh = new ErrorHandler; //ErrorHandler object
	if(empty($xoopsUser)){
		redirect_header(XOOPS_URL."/user.php",2,_MD_MUSTREGFIRST);
		exit();
	} else {
		$ratinguser = $xoopsUser->getVar('uid');
	}
	$submit_vars = array('lid', 'title', 'url', 'homepage', 'description', 'logourl', 'cid', 'version', 'size', 'platform');
	foreach($submit_vars as $submit_key) {
		$$submit_key = $_POST[$submit_key];
	}
	$lid = intval($lid);

	// Check if Title exist
	if (trim($title)=="") {
		$eh->show("1001");
	}
	// Check if URL exist
	if (trim($url)=="") {
		$eh->show("1016");
	}
	// Check if HOMEPAGE exist
	if (trim($homepage)=="") {
		$eh->show("1016");
	}
	// Check if Description exist
	if (trim($description)=="") {
		$eh->show("1008");
	}

	$url = $myts->makeTboxData4Save($url);
	$logourl = $myts->makeTboxData4Save($logourl);
	$cid = intval($cid);
	$title = $myts->makeTboxData4Save($title);
	$homepage = $myts->makeTboxData4Save($homepage);
	$version = $myts->makeTboxData4Save($version);
	$size = $myts->makeTboxData4Save($size);
	$platform = $myts->makeTboxData4Save($platform);
	$description = $myts->makeTareaData4Save($description);
	$newid = $xoopsDB->genId($xoopsDB->prefix("mydownloads_mod")."_requestid_seq");

	$sql = sprintf("INSERT INTO %s (requestid, lid, cid, title, url, homepage, version, size, platform, logourl, description, modifysubmitter) VALUES (%u, %u, %u, '%s', '%s', '%s', '%s', %u, '%s', '%s', '%s', %u)", $xoopsDB->prefix("mydownloads_mod"), $newid, $lid, $cid, $title, $url, $homepage, $version, $size, $platform, $logourl, $description, $ratinguser);
	$xoopsDB->query($sql) or $eh->show("0013");
	$tags = array();
	$tags['MODIFYREPORTS_URL'] = XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname') . '/admin/index.php?op=listModReq';
	$notification_handler =& xoops_gethandler('notification');
	$notification_handler->triggerEvent('global', 0, 'file_modify', $tags);
	redirect_header("index.php",2,_MD_THANKSFORINFO);
	exit();

} else {
	$lid = intval($_GET['lid']);
	if(empty($xoopsUser)){
		redirect_header(XOOPS_URL."/user.php",2,_MD_MUSTREGFIRST);
		exit();
	}
	$xoopsOption['template_main'] = 'mydownloads_modfile.html';
	include XOOPS_ROOT_PATH."/header.php";
	$result = $xoopsDB->query("SELECT cid, title, url, homepage, version, size, platform, logourl FROM ".$xoopsDB->prefix("mydownloads_downloads")." WHERE lid=".$lid." AND status>0");
	$xoopsTpl->assign('lang_requestmod', _MD_REQUESTMOD);
	list($cid, $title, $url, $homepage, $version, $size, $platform, $logourl) = $xoopsDB->fetchRow($result);
	$title = $myts->makeTboxData4Edit($title);
	$url = $myts->makeTboxData4Edit($url);
	$homepage = $myts->makeTboxData4Edit($homepage);
	$version = $myts->makeTboxData4Edit($version);
	$size = $myts->makeTboxData4Edit($size);
	$platform = $myts->makeTboxData4Edit($platform);
	$logourl = $myts->makeTboxData4Edit($logourl);
	$result2 = $xoopsDB->query("SELECT description FROM ".$xoopsDB->prefix("mydownloads_text")." WHERE lid=$lid");
	list($description)=$xoopsDB->fetchRow($result2);
	$description = $myts->makeTareaData4Edit($description);
	$xoopsTpl->assign('file', array('id' => $lid, 'rating' => number_format($rating, 2), 'title' => $title, 'url' => $url, 'logourl' => $logourl, 'updated' => formatTimestamp($time,"m"), 'description' => $description, 'hits' => $hits, 'votes' => $votestring,'plataform' => $platform,'size'  => $size,'homepage' => $homepage,'version'  => $version,));
	$xoopsTpl->assign('lang_fileid', _MD_FILEID);
	$xoopsTpl->assign('lang_sitetitle', _MD_FILETITLE);
	$xoopsTpl->assign('lang_siteurl', _MD_DLURL);
	$xoopsTpl->assign('lang_category', _MD_CATEGORYC);
	$xoopsTpl->assign('lang_homepage', _MD_HOMEPAGEC);
	$xoopsTpl->assign('lang_version', _MD_VERSIONC);
	$xoopsTpl->assign('lang_size', _MD_FILESIZEC);
	$xoopsTpl->assign('lang_bytes', _MD_BYTES);
	$xoopsTpl->assign('lang_platform', _MD_PLATFORMC);
	ob_start();
	$mytree->makeMySelBox("title", "title", $cid);
	$selbox = ob_get_contents();
	ob_end_clean();
	$xoopsTpl->assign('category_selbox', $selbox);
	$xoopsTpl->assign('lang_description', _MD_DESCRIPTIONC);
	$xoopsTpl->assign('modifysubmitter', $xoopsUser->getVar('uid'));
	$xoopsTpl->assign('lang_sendrequest', _MD_SENDREQUEST);
	$xoopsTpl->assign('lang_cancel', _CANCEL);
	include XOOPS_ROOT_PATH.'/footer.php';
}
?>
