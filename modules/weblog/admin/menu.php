<?php
/*
 * $Id: menu.php,v 1.5 2005/06/18 17:56:01 tohokuaiki Exp $
 * Copyright (c) 2003 by Hiro SAKAI (http://wellwine.zive.net/)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting
 * source code which is considered copyrighted (c) material of the
 * original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
 */
$adminmenu[1]['title'] = _MI_WEBLOG_CATMANAGER;
$adminmenu[1]['link'] = "admin/catmanager.php";
$adminmenu[2]['title'] = _MI_WEBLOG_PRIVMANAGER;
$adminmenu[2]['link'] = "admin/privmanager.php";
$adminmenu[3]['title'] = _MI_WEBLOG_MYGROUPSADMIN ;
$adminmenu[3]['link'] = "admin/groupperm_global.php" ;
$adminmenu[4]['title'] = _MI_WEBLOG_DBMANAGER;
$adminmenu[4]['link'] = "admin/dbmanager.php";
$adminmenu[5]['title'] = _MI_WEBLOG_MYBLOCKSADMIN ;
$adminmenu[5]['link'] = "admin/myblocksadmin.php" ;
$adminmenu[6]['title'] = _MI_WEBLOG_TEMPLATE_MANEGER ;
$adminmenu[6]['link'] = "admin/index.php?op=templates" ;
?>