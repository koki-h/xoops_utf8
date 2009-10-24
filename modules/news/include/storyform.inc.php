<?php
// $Id: storyform.inc.php,v 1.7 2005/09/04 20:46:11 onokazu Exp $
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

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}
include XOOPS_ROOT_PATH."/class/xoopsformloader.php";
$sform = new XoopsThemeForm(_NW_SUBMITNEWS, "storyform", xoops_getenv('PHP_SELF'));
$sform->addElement(new XoopsFormToken(XoopsMultiTokenHandler::quickCreate('news_submit')));
$sform->addElement(new XoopsFormText(_NW_TITLE, 'subject', 50, 80, $subject), true);
ob_start();
$xt->makeTopicSelBox(0);
$sform->addElement(new XoopsFormLabel(_NW_TOPIC, ob_get_contents()));
ob_end_clean();
$sform->addElement($topic_select);
$sform->addElement(new XoopsFormDhtmlTextArea(_NW_THESCOOP, 'message', $message, 15, 60), true);
$option_tray = new XoopsFormElementTray(_OPTIONS,'<br />');
if ($xoopsUser) {
    if ($xoopsModuleConfig['anonpost'] == 1) {
        $noname_checkbox = new XoopsFormCheckBox('', 'noname', $noname);
        $noname_checkbox->addOption(1, _POSTANON);
        $option_tray->addElement($noname_checkbox);
    }
    $notify_checkbox = new XoopsFormCheckBox('', 'notifypub', $notifypub);
    $notify_checkbox->addOption(1, _NW_NOTIFYPUBLISH);
    $option_tray->addElement($notify_checkbox);
    if ($xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
        $nohtml_checkbox = new XoopsFormCheckBox('', 'nohtml', $nohtml);
        $nohtml_checkbox->addOption(1, _DISABLEHTML);
        $option_tray->addElement($nohtml_checkbox);
    }
}
$smiley_checkbox = new XoopsFormCheckBox('', 'nosmiley', $nosmiley);
$smiley_checkbox->addOption(1, _DISABLESMILEY);
$option_tray->addElement($smiley_checkbox);
$sform->addElement($option_tray);
$button_tray = new XoopsFormElementTray('' ,'');
$button_tray->addElement(new XoopsFormButton('', 'preview', _PREVIEW, 'submit'));
$button_tray->addElement(new XoopsFormButton('', 'post', _NW_POST, 'submit'));
$sform->addElement($button_tray);
$sform->display();
?>