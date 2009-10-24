<?php
// $Id: xoops_version.php,v 1.2 2005/03/18 12:52:14 onokazu Exp $
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

$modversion['name'] = _MI_MYDOWNLOADS_NAME;
$modversion['version'] = 1.10;
$modversion['description'] = _MI_MYDOWNLOADS_DESC;
$modversion['author'] = "";
$modversion['credits'] = "Modified by wanderer<br />( http://www.mpn-tw.com/ ) <br /> The XOOPS Project";
$modversion['help'] = "mydownloads.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/mydl_slogo.png";
$modversion['dirname'] = "mydownloads";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "mydownloads_broken";
$modversion['tables'][1] = "mydownloads_cat";
$modversion['tables'][2] = "mydownloads_downloads";
$modversion['tables'][3] = "mydownloads_mod";
$modversion['tables'][4] = "mydownloads_text";
$modversion['tables'][5] = "mydownloads_votedata";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Blocks
$modversion['blocks'][1]['file'] = "mydownloads_top.php";
$modversion['blocks'][1]['name'] = _MI_MYDOWNLOADS_BNAME1;
$modversion['blocks'][1]['description'] = "Shows recently added donwload files";
$modversion['blocks'][1]['show_func'] = "b_mydownloads_top_show";
$modversion['blocks'][1]['edit_func'] = "b_mydownloads_top_edit";
$modversion['blocks'][1]['options'] = "date|10|19";
$modversion['blocks'][1]['template'] = 'mydownloads_block_new.html';

$modversion['blocks'][2]['file'] = "mydownloads_top.php";
$modversion['blocks'][2]['name'] = _MI_MYDOWNLOADS_BNAME2;
$modversion['blocks'][2]['description'] = "Shows most downloaded files";
$modversion['blocks'][2]['show_func'] = "b_mydownloads_top_show";
$modversion['blocks'][2]['edit_func'] = "b_mydownloads_top_edit";
$modversion['blocks'][2]['options'] = "hits|10|19";
$modversion['blocks'][2]['template'] = 'mydownloads_block_top.html';

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = _MI_MYDOWNLOADS_SMNAME1;
$modversion['sub'][1]['url'] = "submit.php";
$modversion['sub'][2]['name'] = _MI_MYDOWNLOADS_SMNAME2;
$modversion['sub'][2]['url'] = "topten.php?hit=1";
$modversion['sub'][3]['name'] = _MI_MYDOWNLOADS_SMNAME3;
$modversion['sub'][3]['url'] = "topten.php?rate=1";

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "mydownloads_search";

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'lid';
$modversion['comments']['pageName'] = 'singlefile.php';
$modversion['comments']['extraParams'] = array('cid');
// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'mydownloads_com_approve';
$modversion['comments']['callback']['update'] = 'mydownloads_com_update';

// Templates
$modversion['templates'][1]['file'] = 'mydownloads_brokenfile.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'mydownloads_download.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'mydownloads_index.html';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file'] = 'mydownloads_modfile.html';
$modversion['templates'][4]['description'] = '';
$modversion['templates'][5]['file'] = 'mydownloads_ratefile.html';
$modversion['templates'][5]['description'] = '';
$modversion['templates'][6]['file'] = 'mydownloads_singlefile.html';
$modversion['templates'][6]['description'] = '';
$modversion['templates'][7]['file'] = 'mydownloads_submit.html';
$modversion['templates'][7]['description'] = '';
$modversion['templates'][8]['file'] = 'mydownloads_topten.html';
$modversion['templates'][8]['description'] = '';
$modversion['templates'][9]['file'] = 'mydownloads_viewcat.html';
$modversion['templates'][9]['description'] = '';

// Config Settings (only for modules that need config settings generated automatically)

// name of config option for accessing its specified value. i.e. $xoopsModuleConfig['storyhome']
$modversion['config'][1]['name'] = 'popular';

// title of this config option displayed in config settings form
$modversion['config'][1]['title'] = '_MI_MYDOWNLOADS_POPULAR';

// description of this config option displayed under title
$modversion['config'][1]['description'] = '_MI_MYDOWNLOADS_POPULARDSC';

// form element type used in config form for this option. can be one of either textbox, textarea, select, select_multi, yesno, group, group_multi
$modversion['config'][1]['formtype'] = 'select';

// value type of this config option. can be one of either int, text, float, array, or other
// form type of 'group_multi', 'select_multi' must always be 'array'
// form type of 'yesno', 'group' must be always be 'int'
$modversion['config'][1]['valuetype'] = 'int';

// the default value for this option
// ignore it if no default
// 'yesno' formtype must be either 0(no) or 1(yes)
$modversion['config'][1]['default'] = 100;

// options to be displayed in selection box
// required and valid for 'select' or 'select_multi' formtype option only
// language constants can be used for both array keys and values
$modversion['config'][1]['options'] = array('5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000);


$modversion['config'][2]['name'] = 'newdownloads';
$modversion['config'][2]['title'] = '_MI_MYDOWNLOADS_NEWDLS';
$modversion['config'][2]['description'] = '_MI_MYDOWNLOADS_NEWDLSDSC';
$modversion['config'][2]['formtype'] = 'select';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 10;
$modversion['config'][2]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$modversion['config'][3]['name'] = 'perpage';
$modversion['config'][3]['title'] = '_MI_MYDOWNLOADS_PERPAGE';
$modversion['config'][3]['description'] = '_MI_MYDOWNLOADS_PERPAGEDSC';
$modversion['config'][3]['formtype'] = 'select';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 10;
$modversion['config'][3]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$modversion['config'][4]['name'] = 'anonpost';
$modversion['config'][4]['title'] = '_MI_MYDOWNLOADS_ANONPOST';
$modversion['config'][4]['description'] = '';
$modversion['config'][4]['formtype'] = 'yesno';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 0;

$modversion['config'][5]['name'] = 'autoapprove';
$modversion['config'][5]['title'] = '_MI_MYDOWNLOADS_AUTOAPPROVE';
$modversion['config'][5]['description'] = '_MI_MYDOWNLOADS_AUTOAPPROVEDSC';
$modversion['config'][5]['formtype'] = 'yesno';
$modversion['config'][5]['valuetype'] = 'int';
$modversion['config'][5]['default'] = 0;

$modversion['config'][6]['name'] = 'useshots';
$modversion['config'][6]['title'] = '_MI_MYDOWNLOADS_USESHOTS';
$modversion['config'][6]['description'] = '_MI_MYDOWNLOADS_USESHOTSDSC';
$modversion['config'][6]['formtype'] = 'yesno';
$modversion['config'][6]['valuetype'] = 'int';
$modversion['config'][6]['default'] = 0;

$modversion['config'][7]['name'] = 'shotwidth';
$modversion['config'][7]['title'] = '_MI_MYDOWNLOADS_SHOTWIDTH';
$modversion['config'][7]['description'] = '_MI_MYDOWNLOADS_SHOTWIDTHDSC';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'int';
$modversion['config'][7]['default'] = 140;

$modversion['config'][8]['name'] = 'check_host';
$modversion['config'][8]['title'] = '_MI_MYDOWNLOADS_CHECKHOST';
$modversion['config'][8]['description'] = '';
$modversion['config'][8]['formtype'] = 'yesno';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 0;

$xoops_url = parse_url(XOOPS_URL);
$modversion['config'][9]['name'] = 'referers';
$modversion['config'][9]['title'] = '_MI_MYDOWNLOADS_REFERERS';
$modversion['config'][9]['description'] = '_MI_MYDOWNLOADS_REFERERSDSC';
$modversion['config'][9]['formtype'] = 'textarea';
$modversion['config'][9]['valuetype'] = 'array';
$modversion['config'][9]['default'] = array($xoops_url['host']);

// Notification

$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'mydownloads_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_MYDOWNLOADS_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC;                                                     
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php','viewcat.php','singlefile.php');
                                                              
$modversion['notification']['category'][2]['name'] = 'category';
$modversion['notification']['category'][2]['title'] = _MI_MYDOWNLOADS_CATEGORY_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('viewcat.php', 'singlefile.php');
$modversion['notification']['category'][2]['item_name'] = 'cid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'file';
$modversion['notification']['category'][3]['title'] = _MI_MYDOWNLOADS_FILE_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_MYDOWNLOADS_FILE_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'singlefile.php';
$modversion['notification']['category'][3]['item_name'] = 'lid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'new_category';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'file_modify';
$modversion['notification']['event'][2]['category'] = 'global';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_filemodify_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'file_broken';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['admin_only'] = 1;
$modversion['notification']['event'][3]['title'] = _MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_filebroken_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'file_submit';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_filesubmit_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_file';
$modversion['notification']['event'][5]['category'] = 'global';
$modversion['notification']['event'][5]['title'] = _MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_newfile_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'file_submit';
$modversion['notification']['event'][6]['category'] = 'category';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_filesubmit_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][7]['name'] = 'new_file';
$modversion['notification']['event'][7]['category'] = 'category';
$modversion['notification']['event'][7]['title'] = _MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_newfile_notify';
$modversion['notification']['event'][7]['mail_subject'] = _MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ;

$modversion['notification']['event'][8]['name'] = 'approve';
$modversion['notification']['event'][8]['category'] = 'file';
$modversion['notification']['event'][8]['invisible'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'file_approve_notify';
$modversion['notification']['event'][8]['mail_subject'] = _MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ;                                                 

?>
