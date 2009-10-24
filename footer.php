<?php
// $Id: footer.php,v 1.6 2006/05/01 02:37:26 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2005 XOOPS.org                           //
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
if ( !defined("XOOPS_FOOTER_INCLUDED") ) {
    define("XOOPS_FOOTER_INCLUDED",1);
    $xoopsLogger->stopTime();
    if ($xoopsOption['theme_use_smarty'] == 0) {
        // the old way
        $footer = htmlspecialchars($xoopsConfigMetaFooter['footer']).'<br /><div style="text-align:center">Powered by XOOPS Cube &copy; 2005-2006 <a href="http://xoopscube.org/" target="_blank">The XOOPS Cube Project</a></div>';
        if (isset($xoopsOption['template_main'])) {
            $xoopsTpl->xoops_setCaching(0);
            $xoopsTpl->display('db:'.$xoopsOption['template_main']);
        }
        if (!isset($xoopsOption['show_rblock'])) {
            $xoopsOption['show_rblock'] = 0;
        }
        themefooter($xoopsOption['show_rblock'], $footer);
        xoops_footer();
    } else {
        // RMV-NOTIFY
        include_once XOOPS_ROOT_PATH . '/include/notification_select.php';
        if (isset($xoopsOption['template_main'])) {
            if (isset($xoopsCachedTemplateId)) {
                $xoopsTpl->assign('xoops_contents', $xoopsTpl->fetch('db:'.$xoopsOption['template_main'], $xoopsCachedTemplateId));
            } else {
                $xoopsTpl->assign('xoops_contents', $xoopsTpl->fetch('db:'.$xoopsOption['template_main']));
            }
        } else {
            if (isset($xoopsCachedTemplate)) {
                $xoopsTpl->assign('dummy_content', ob_get_contents());
                $xoopsTpl->assign('xoops_contents', $xoopsTpl->fetch($xoopsCachedTemplate, $xoopsCachedTemplateId));
            } else {
                $xoopsTpl->assign('xoops_contents', ob_get_contents());
            }
            ob_end_clean();
        }
        if (!headers_sent()) {
            header('Content-Type:text/html; charset='._CHARSET);
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
            header('Cache-Control: no-store, no-cache, must-revalidate');
            header('Cache-Control: post-check=0, pre-check=0', false);
            header('Pragma: no-cache');
        }
        $xoopsTpl->xoops_setCaching(0);
        $xoopsTpl->display($xoopsConfig['theme_set'].'/theme.html');
    }
    if ($xoopsConfig['debug_mode'] == 2 && $xoopsUserIsAdmin) {
        echo '<script type="text/javascript">
        <!--//
        debug_window = openWithSelfMain("", "xoops_debug", 680, 600, true);
        ';
        $content = '<html><head><meta http-equiv="content-type" content="text/html; charset='._CHARSET.'" /><meta http-equiv="content-language" content="'._LANGCODE.'" /><title>'.htmlspecialchars($xoopsConfig['sitename']).'</title><link rel="stylesheet" type="text/css" media="all" href="'.getcss($xoopsConfig['theme_set']).'" /></head><body>'.$xoopsLogger->dumpAll().'<div style="text-align:center;"><input class="formButton" value="'._CLOSE.'" type="button" onclick="javascript:window.close();" /></div></body></html>';
        $lines = preg_split("/(\r\n|\r|\n)( *)/", $content);
        foreach ($lines as $line) {
            echo 'debug_window.document.writeln("'.str_replace('"', '\"', $line).'");';
        }
        echo '
        debug_window.document.close();
        //-->
        </script>';
    }
}
?>
