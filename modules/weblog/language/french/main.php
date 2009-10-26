<?php
/*
 * $Id: main.php,v 1.6 2005/05/06 18:53:29 tohokuaiki Exp $
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
 
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_BL_LOADED' ) ) {

define( 'WEBLOG_BL_LOADED' , 1 ) ;

// Basic's
define('_BL_DISABLEHTML', _DISABLEHTML); //eng
define('_BL_TITLE', 'Titre');
define('_BL_CATEGORY', 'Category'); //eng
define('_BL_CATEGORIES', 'Categories'); //eng
define('_BL_MAIN', 'Main'); //eng
define('_BL_CONTENTS','Contenus');
define('_BL_POST','Poster');
define('_BL_PREVIEW','Pr&eacute;visualiser');
define('_BL_PRIVATE','Priv&eacute;');
define('_BL_OPTIONS','Options');
define('_BL_COMMENTS','commentaire(s)');
define('_BL_READ_USERS_BLOG',"Lire le journal de %s");
define('_BL_EDIT','Editer');
define('_BL_READ','Lire');
define('_BL_DELETE','Effacer');
define('_BL_BLOG','Journal');
define('_BL_GATHERING','Ouverture de votre journal en cours!');
define('_BL_GATHERING_SORRY','D&eacute;sol&eacute;. Seuls les membres peuvent avoir un journal.');
define('_BL_PRIVATE_NOTEXIST_SORRY', 'Sorry, The entry you requested is private or does not exist.');//eng
define('_BL_ENTRY_POSTED','L\'article a &eacute;t&eacute; post&eacute;!');
define('_BL_MOST_RECENT','Articles les plus r&eacute;cents');
define('_BL_ENTRIES_FOR','Articles de %s');
define('_BL_ENTRY_FOR','Entry for %s');//eng
define('_BL_NUMBER_OF_READS','%d lectures');
define('_BL_NUMBER_OF_TRACKBACKS','Trackback');//eng
define('_BL_CONFIRM_DELETE',"Etes-vous certains de vouloir effacer l'article '%s'?");
define('_BL_BLOG_DELETED','L\'article s&eacute;lectionn&eacute; a &eacute;t&eacute; effac&eacute;!');
define('_BL_BLOG_NOT_DELETED','L\'article s&eacute;lectionn&eacute; n\'a pas &eacute;t&eacute; effac&eacute;! Droits insuffisants?');
define('_BL_WHOS_BLOG',"Le journal de %s");
define('_BL_ANON_CANNOT_POST_SORRY','D&eacute;sol&eacute;, seuls les membres peuvent poster des articles.');
define('_BL_DELETE_BUTTON','Effacer');
define('_BL_PREVIEW_BUTTON','Pr&eacute;visualiser');
define('_BL_POST_BUTTON','Poster');
define('_BL_POST_TOO_SMALL','Les articles doivent contenirs au moins %d signes, le v&ocirc;tre en contient %d. Veuillez &eacute;crire un peu plus!');
define('_BL_POST_MUST_BE','L\'article doit contenir au moins <b>%d</b> signes');
define('_BL_CONTINUE_EDITING','Poursuivre l\'&eacute;dition');
define('_BL_RSS_RECENT', 'Syndicate weBLogs'); //eng
define('_BL_RSS_RECENT_FOR', "Syndicate %s's entries"); //eng
define('_BL_UPDATEPING','Send update ping'); //eng
define('_BL_TRACKBACK','Trackback URL'); //eng
define('_BL_TRACKBACK_DSC','Please fill trackback URLs set apart by new line'); //eng
define('_BL_TRACKBACK_ADMIN','Recieved Trackback'); //eng
define('_BL_TRACKBACK_DELETE',_DELETE); //eng

// %s is your site name
define('_BL_INTARTICLE','Interesting blog at %s'); //eng
define('_BL_INTARTFOUND','Here is an interesting blog I have found at %s'); //eng

define('_BL_PRINTERPAGE','Printer Friendly Page'); //eng
define('_BL_SENDSTORY','Send this Blog to a Friend'); //eng

define('_BL_POSTED', 'Posted'); //eng
define('_BL_AUTHOR', 'Author'); //eng
// %s is your site name
define('_BL_COMESFROM', 'This blog comes from %s'); //eng
define('_BL_PARMALINK', 'The URL of this blog'); //eng

// %s is count
define('_BL_THEREAREINTOTAL', '%s entrie(s) in archive.'); //eng
define('_BL_NOARCHIVEDESC', 'No entries in archive.'); //eng
define('_BL_ARCHIVE', 'Archives'); //eng
define('_BL_ARCHIVE_FOR', "%s's archive"); //eng
define('_BL_READS', 'Reads'); //eng
define('_BL_NEXT', 'Next entry'); //eng
define('_BL_PREV', 'Previous entry'); //eng

// %s is trackback
define('_BL_TRACKBACK_ANOUNCE' , 'Trackback URL of this entry'); //eng
define('_BL_TRACKBACK_TRANSMIT' , 'This entry trackbacks to below URL'); //eng
define('_BL_TRACKBACK_RECIEVED' , 'Trackbacks to this entry'); //eng

}
?>
