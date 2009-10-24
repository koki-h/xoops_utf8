<?php
// $Id: notifications.php,v 1.3 2005/09/04 20:46:08 onokazu Exp $
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

$xoopsOption['pagetype'] = 'notification';
include 'mainfile.php';

if (empty($xoopsUser)) {
    redirect_header('index.php', 3, _NOT_NOACCESS);
    exit();
}

$uid = $xoopsUser->getVar('uid');

$op = 'list';

if (isset($_POST['op'])) {
    $op = trim($_POST['op']);
} elseif (isset($_GET['op'])) {
    $op = trim($_GET['op']);
}
if (isset($_POST['delete'])) {
    $op = 'delete';
} elseif (isset($_GET['delete'])) {
    $op = 'delete';
}
if (isset($_POST['delete_ok'])) {
    $op = 'delete_ok';
}
if (isset($_POST['delete_cancel'])) {
    $op = 'cancel';
}

switch ($op) {

case 'cancel':

    // FIXME: does this always go back to correct location??
    redirect_header ('index.php');
    break;

case 'list':

// Do we allow other users to see our notifications?  Nope, but maybe
// see who else is monitoring a particular item (or at least how many)?
// Well, maybe admin can see all...

// TODO: need to span over multiple pages...???

    // Get an array of all notifications for the selected user

    $criteria = new Criteria ('not_uid', $uid);
    $criteria->setSort ('not_modid,not_category,not_itemid');
    $notification_handler =& xoops_gethandler('notification');
    $notifications =& $notification_handler->getObjects($criteria);

    // Generate the info for the template

    $module_handler =& xoops_gethandler('module');
    include_once XOOPS_ROOT_PATH . '/include/notification_functions.php';

    $modules = array();
    $prev_modid = -1;
    $prev_category = -1;
    $prev_item = -1;
    foreach ($notifications as $n) {
        $modid = $n->getVar('not_modid');
        if ($modid != $prev_modid) {
            $prev_modid = $modid;
            $prev_category = -1;
            $prev_item = -1;
            $module =& $module_handler->get($modid);
            $modules[$modid] = array ('id'=>$modid, 'name'=>$module->getVar('name'), 'categories'=>array());
            // TODO: note, we could auto-generate the url from the id
            // and category info... (except when category has multiple
            // subscription scripts defined...)
            // OR, add one more option to xoops_version 'view_from'
            // which tells us where to redirect... BUT, e.g. forums, it
            // still wouldn't give us all the required info... e.g. the
            // topic ID doesn't give us the ID of the forum which is
            // a required argument...

            // Get the lookup function, if exists
            $not_config = $module->getInfo('notification');
            $lookup_func = '';
            if (!empty($not_config['lookup_file'])) {
                $lookup_file = XOOPS_ROOT_PATH . '/modules/' . $module->getVar('dirname') . '/' . $not_config['lookup_file'];
                if (file_exists($lookup_file)) {
                    include_once $lookup_file;
                    if (!empty($not_config['lookup_func']) && function_exists($not_config['lookup_func'])) {
                        $lookup_func = $not_config['lookup_func'];
                    }
                }
            }
        }
        $category = $n->getVar('not_category');
        if ($category != $prev_category) {
            $prev_category = $category;
            $prev_item = -1;
            $category_info =& notificationCategoryInfo($category, $modid);
            $modules[$modid]['categories'][$category] = array ('name'=>$category, 'title'=>$category_info['title'], 'items'=>array());
        }
        $item = $n->getVar('not_itemid');
        if ($item != $prev_item) {
            $prev_item = $item;
            if (!empty($lookup_func)) {
                $item_info = $lookup_func($category, $item);
            } else {
                $item_info = array ('name'=>'['._NOT_NAMENOTAVAILABLE.']', 'url'=>'');
            }
            $modules[$modid]['categories'][$category]['items'][$item] = array ('id'=>$item, 'name'=>$item_info['name'], 'url'=>$item_info['url'], 'notifications'=>array());
        }
        $event_info =& notificationEventInfo($category, $n->getVar('not_event'), $n->getVar('not_modid'));
        $modules[$modid]['categories'][$category]['items'][$item]['notifications'][] = array ('id'=>$n->getVar('not_id'), 'module_id'=>$n->getVar('not_modid'), 'category'=>$n->getVar('not_category'), 'category_title'=>$category_info['title'], 'item_id'=>$n->getVar('not_itemid'), 'event'=>$n->getVar('not_event'), 'event_title'=>$event_info['title'], 'user_id'=>$n->getVar('not_uid'));
    }
    $xoopsOption['template_main'] = 'system_notification_list.html';
    include XOOPS_ROOT_PATH.'/header.php';
    $xoopsTpl->assign ('modules', $modules);    
    $user_info = array ('uid' => $xoopsUser->getVar('uid'));
    $xoopsTpl->assign ('user', $user_info);
    $xoopsTpl->assign ('lang_cancel', _CANCEL);
    $xoopsTpl->assign ('lang_clear', _NOT_CLEAR);
    $xoopsTpl->assign ('lang_delete', _DELETE);
    $xoopsTpl->assign ('lang_checkall', _NOT_CHECKALL);
    $xoopsTpl->assign ('lang_module', _NOT_MODULE);
    $xoopsTpl->assign ('lang_event', _NOT_EVENT);
    $xoopsTpl->assign ('lang_events', _NOT_EVENTS);
    $xoopsTpl->assign ('lang_category', _NOT_CATEGORY);
    $xoopsTpl->assign ('lang_itemid', _NOT_ITEMID);
    $xoopsTpl->assign ('lang_itemname', _NOT_ITEMNAME);
    $xoopsTpl->assign ('lang_activenotifications', _NOT_ACTIVENOTIFICATIONS);
    include XOOPS_ROOT_PATH.'/footer.php';

// TODO: another display mode... instead of one notification per line,
// show one line per item_id, with checkboxes for the available options...
// and an update button to change them...  And still have the delete box
// to delete all notification for that item

// How about one line per ID, showing category, name, id, and list of
// events...

// TODO: it would also be useful to provide links to other available
// options so we can say switch from new_message to 'bookmark' if we
// are receiving too many emails.  OR, if we click on 'change options' 
// we get a form for that page...

// TODO: option to specify one-time??? or other modes??

    break;

case 'delete':
    if (empty($_POST['del_not'])||!is_array($_POST['del_not'])) {
        redirect_header('notifications.php', 2, _NOT_NOTHINGTODELETE);
    }
    $del_notifications = array();
    foreach($_POST['del_not'] as $not_modid => $not_ids) {
        if (!is_array($not_ids)) {
            redirect_header('notifications.php', 2, _NOT_NOTHINGTODELETE);
        }
        foreach ($not_ids as $not_id) {
            $del_notifications[] = intval($not_modid).'|'.intval($not_id);
        }
    }
    $del_not = implode(',', $del_notifications);
    include XOOPS_ROOT_PATH.'/header.php';
    $hidden_vars = array('delete_ok'=>1, 'del_not'=>$del_not);
    print '<h4>'._NOT_DELETINGNOTIFICATIONS.'</h4>';
    xoops_confirm($hidden_vars, xoops_getenv('PHP_SELF'), _NOT_RUSUREDEL);
    include XOOPS_ROOT_PATH.'/footer.php';
    break;

case 'delete_ok':
    if(!xoops_confirm_validate()) {
        redirect_header('notifications.php',2,'Ticket Error');
    }
    if (empty($_POST['del_not'])) {
        redirect_header('notifications.php', 2, _NOT_NOTHINGTODELETE);
    }
    $del_notifications = explode(',', $_POST['del_not']);
    if (!is_array($del_notifications) || count($del_notifications)==0) {
        redirect_header('notifications.php', 2, _NOT_NOTHINGTODELETE);
    }
    $notification_handler =& xoops_gethandler('notification');
    foreach ($del_notifications as $del_notification) {
        $del_notification_items = explode('|',$del_notification);
        if (is_array($del_notification_items) && (count($del_notification_items)==2) && !empty($del_notification_items[0]) && !empty($del_notification_items[1])) {
            $notification =& $notification_handler->get(intval($del_notification_items[1]));
            if (!empty($notification) && ($notification->getVar('not_uid') == $uid) && ($notification->getVar('not_modid') == intval($del_notification_items[0]))) {
                $notification_handler->delete($notification);
            }
        }
    }
    redirect_header('notifications.php', 2, _NOT_DELETESUCCESS);
    break;
default:
    break;
}

?>
