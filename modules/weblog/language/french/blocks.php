<?php
/*
 * $Id: blocks.php,v 1.6 2005/05/06 18:53:29 tohokuaiki Exp $
 * Copyright (c) 2003 by Jeremy N. Cowgar <jc@cowgar.com>
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
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_MB_LOADED' ) ) {

define( 'WEBLOG_MB_LOADED' , 1 ) ;

define('_MB_RECENT_EDIT_NUMBER_OF_ENTRIES','Nombre d\'articles &agrave; afficher');
define('_MB_WEBLOG_EDIT_LINK_TO_LIST', 'Link authors to their entries? (0=No,1=Yes)'); //eng
define('_MB_RECENT_EDIT_MAX_TITLE_LENGTH','Longueur maximale du titre');
define('_MB_RECENT_EDIT_DATE_FORMAT','Format date');
define('_MB_RECENT_EDIT_USE_AVATARS','Utiliser les avatars? (0=No,1=Yes)');
define('_MB_RECENT_EDIT_TYPE','Type (1=Titre raccourçé, 2=Titre+Nom user, 3=Titre+Nom+Avatar)');

define('_MB_WEBLOG_LANG_TITLE', 'Title'); // eng
define('_MB_WEBLOG_LANG_ENTRIES', 'Recent Entries'); // eng
define('_MB_WEBLOG_LANG_AUTHOR', 'Author'); // eng
define('_MB_WEBLOG_LANG_COMMENTS', 'Comments'); // eng
define('_MB_WEBLOG_LANG_POSTED', 'Posted'); // eng
define('_MB_WEBLOG_LANG_READS', 'Reads'); // eng
define('_MB_WEBLOG_LANG_MOREWEBLOGS', 'More weBLogs'); // eng

define('_MB_WEBLOG_USERS_SORT_READS', 'Total Reads'); // eng
define('_MB_WEBLOG_USERS_SORT_UPDATE', 'Last Entry'); // eng

}
?>
