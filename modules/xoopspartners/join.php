<?php
// $Id: join.php,v 1.5 2005/09/04 20:46:12 onokazu Exp $
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
// ------------------------------------------------------------------------- //
// Author: Raul Recio (AKA UNFOR)                                            //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

include "header.php";
$xoopsOption['template_main'] = 'xoopspartners_join.html';
include XOOPS_ROOT_PATH."/header.php";
$myts =& MyTextSanitizer::getInstance();
if ( $xoopsUser ){
    if ( !empty($_POST['op']) && $_POST['op'] == "sendMail" ) {
        include XOOPS_ROOT_PATH."/class/xoopsmailer.php";
        if ( empty($_POST['title']) or empty($_POST['url']) or empty($_POST['description']) or $_POST['url'] == "http://" ) {
            $xoopsTpl->assign(array(
            "content4join"         => _MD_ERROR1,
            "lang_main_partner"    => _MD_PARTNERS,
            "sitename"             => htmlspecialchars($xoopsConfig['sitename'])
            ));
            $xoopsContentsTpl = 'partnerjoin.html';
            include_once XOOPS_ROOT_PATH.'/footer.php';
            exit();
        }
        $url          = formatURL($myts->makeTboxData4Show($_POST['url']));
        $image        = formatURL($myts->makeTboxData4Show($_POST['image']));
        $title        = $myts->makeTboxData4Show($_POST['title']);
        $description  = $myts->makeTboxData4Show($_POST['description']);
        $imageInfo    = @getimagesize($image);
        $imageWidth   = $imageInfo[0];
        $imageHeight  = $imageInfo[1];
        $type = $imageInfo[2];
        if ($type == 0) {
            $xoopsTpl->assign(array(
            "content4join"         => _MD_ERROR3,
            "lang_main_partner"    => _MD_PARTNERS,
            "sitename"             => htmlspecialchars($xoopsConfig['sitename'])
            ));
            $xoopsContentsTpl = 'partnerjoin.html';
            include_once XOOPS_ROOT_PATH.'/footer.php';
            exit();
        }
        if ( $imageWidth >= 110 or $imageHeight >=50 ) {
            $xoopsTpl->assign(array(
            "content4join"         => _MD_ERROR2,
            "lang_main_partner"    => _MD_PARTNERS,
            "sitename"             => htmlspecialchars($xoopsConfig['sitename'])
            ));
            $xoopsContentsTpl = 'partnerjoin.html';
            include_once XOOPS_ROOT_PATH.'/footer.php';
            exit();
        }
        if( $image == "http://" ) {
            $image = "";
        }
        $xoopsMailer =& getMailer();
        $xoopsMailer->useMail();
        $xoopsMailer->setTemplateDir(XOOPS_ROOT_PATH.'/modules/xoopspartners/language/'.$xoopsConfig['language'].'/');
        $xoopsMailer->setTemplate("join.tpl");
        $xoopsMailer->assign("SITENAME", $xoopsConfig['sitename']);
        $xoopsMailer->assign("SITEURL", XOOPS_URL."/");
        $xoopsMailer->assign("IP", $_SERVER['REMOTE_ADDR']);
        $xoopsMailer->assign("URL", $url);
        $xoopsMailer->assign("IMAGE", $image);
        $xoopsMailer->assign("TITLE", $title);
        $xoopsMailer->assign("DESCRIPTION", $description);
        $xoopsMailer->assign("USER", $xoopsUser->getVar("uname"));
        $xoopsMailer->setToEmails($xoopsConfig['adminmail']);
        $xoopsMailer->setFromEmail($xoopsUser->getVar("email"));
        $xoopsMailer->setFromName($xoopsUser->getVar("uname"));
        $xoopsMailer->setSubject(sprintf(_MD_NEWPARTNER,$xoopsConfig['sitename']));
        if ( !$xoopsMailer->send() ) {
            $xoopsTpl->assign(array(
            "content4join"         => "<br />".$xoopsMailer->getErrors()._MD_GOBACK,
            "lang_main_partner"    => _MD_PARTNERS,
            "lang_join"            => _MD_JOIN,
            "sitename"             => htmlspecialchars($xoopsConfig['sitename'])
            ));
        } else {
            $xoopsTpl->assign(array(
            "content4join"         => "<br />"._MD_SENDMAIL,
            "lang_main_partner"    => _MD_PARTNERS,
            "lang_join"            => _MD_JOIN,
            "sitename"             => htmlspecialchars($xoopsConfig['sitename'])
                ));
        }
        $xoopsContentsTpl = 'partnerjoin.html';
    } else {
        include XOOPS_ROOT_PATH."/class/xoopsformloader.php";
        $form = new XoopsThemeForm("", "joinform", "join.php");
        $titlePartern = new XoopsFormText(_MD_TITLE, "title", 30, 50);
        $imagePartern = new XoopsFormText(_MD_IMAGE, "image", 30, 150, "http://");
        $urlPartern = new XoopsFormText(_MD_URL, "url", 30, 150, "http://");
        $descriptionPartern = new XoopsFormTextArea(_MD_DESCRIPTION, "description","", 7, 50);
        $op_hidden = new XoopsFormHidden("op", "sendMail");
        $submit_button = new XoopsFormButton("", "dbsubmit", _MD_SEND, "submit");
        $form->addElement($titlePartern);
        $form->addElement($imagePartern);
        $form->addElement($urlPartern);
        $form->addElement($descriptionPartern);
        $form->addElement($op_hidden);
        $form->addElement($submit_button);
        $form->setRequired($titlePartern);
        $form->setRequired($urlPartern);
        $form->setRequired($descriptionPartern);
        $content = $form->render();
        $xoopsTpl->assign(array(
        "content4join"         => $content,
        "lang_main_partner"    => _MD_PARTNERS,
        "lang_join"            => _MD_JOIN,
        "sitename"             => htmlspecialchars($xoopsConfig['sitename'])
        ));
    }
} else { // else -- if ( $xoopsUser )
    redirect_header("index.php",2,_NOPERM);
}
include_once XOOPS_ROOT_PATH.'/footer.php';
?>