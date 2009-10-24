<?php
// $Id: delete.php,v 1.5 2005/08/03 12:39:14 onokazu Exp $
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
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

include 'header.php';

$ok = 0;
$forum = isset($_GET['forum']) ? intval($_GET['forum']) : 0;
$post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
$topic_id = isset($_GET['topic_id']) ? intval($_GET['topic_id']) : 0;
$order = isset($_GET['order']) ? intval($_GET['order']) : 0;
$viewmode = (isset($_GET['viewmode']) && $_GET['viewmode'] != 'flat') ? 'thread' : 'flat';
$forum = isset($_POST['forum']) ? intval($_POST['forum']) : $forum;
$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : $post_id;
$topic_id = isset($_POST['topic_id']) ? intval($_POST['topic_id']) : $topic_id;
$order = isset($_POST['order']) ? intval($_POST['order']) : $order;
$viewmode = (isset($_POST['viewmode']) && $_POST['viewmode'] != 'flat') ? 'thread' : $viewmode;
if ( empty($forum) ) {
    redirect_header("index.php", 2, _MD_ERRORFORUM);
    exit();
} elseif ( empty($post_id) ) {
    redirect_header("viewforum.php?forum=$forum", 2, _MD_ERRORPOST);
    exit();
}

if ( $xoopsUser ) {
    if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
        if ( !is_moderator($forum, $xoopsUser->uid()) ) {
            redirect_header("viewtopic.php?topic_id=$topic_id&amp;order=$order&amp;viewmode=$viewmode&amp;pid=$pid&amp;forum=$forum", 2, _MD_DELNOTALLOWED);
            exit();
        }
    }
} else {
    redirect_header("viewtopic.php?topic_id=$topic_id&amp;order=$order&amp;viewmode=$viewmode&amp;pid=$pid&amp;forum=$forum", 2, _MD_DELNOTALLOWED);
    exit();
}

include_once 'class/class.forumposts.php';

if ( !empty($_POST['ok']) ) {
    if ( !empty($post_id) ) {
        $post = new ForumPosts($post_id);
        $post->delete();
        sync($post->forum(), "forum");
        sync($post->topic(), "topic");
    }
    if ( $post->istopic() ) {
        redirect_header("viewforum.php?forum=$forum", 2, _MD_POSTSDELETED);
        exit();
    } else {
        redirect_header("viewtopic.php?topic_id=$topic_id&amp;order=$order&amp;viewmode=$viewmode&amp;pid=$pid&amp;forum=$forum", 2, _MD_POSTSDELETED);
        exit();
    }
} else {
    include XOOPS_ROOT_PATH."/header.php";
    xoops_confirm(array('post_id' => $post_id, 'viewmode' => $viewmode, 'order' => $order, 'forum' => $forum, 'topic_id' => $topic_id, 'ok' => 1), 'delete.php', _MD_AREUSUREDEL);
}
include XOOPS_ROOT_PATH.'/footer.php';
?>