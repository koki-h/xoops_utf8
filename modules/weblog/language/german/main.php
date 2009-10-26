<?php
/*
 * $Id: main.php,v 1.3 2005/05/06 18:53:29 tohokuaiki Exp $
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
define('_BL_DISABLEHTML', _DISABLEHTML);
define('_BL_TITLE','Titel');
define('_BL_CATEGORY', 'Category'); //eng
define('_BL_CATEGORIES', 'Categories'); //eng
define('_BL_MAIN', 'Main'); //eng
define('_BL_CONTENTS','Inhalte');
define('_BL_POST','Eintrag');
define('_BL_PREVIEW','Vorschau');
define('_BL_PRIVATE','Privat');
define('_BL_OPTIONS','Optionen');
define('_BL_COMMENTS','Kommentare');
define('_BL_READ_USERS_BLOG',"Lese %s's weBLog");
define('_BL_EDIT','Bearbeiten');
define('_BL_READ','Lesen');
define('_BL_DELETE','Löóchen');
define('_BL_BLOG','weBLog');
define('_BL_GATHERING','Ihre weBlog-Einträçe werden jetzt zusammengefasst!');
define('_BL_GATHERING_SORRY','Verzeihung, My weBLog steht nur registrierten Usern zur Verfüçung.');
define('_BL_PRIVATE_NOTEXIST_SORRY', 'Verzeihung! Der angeforderte Eintrag ist privat oder existiert nicht.');
define('_BL_ENTRY_POSTED','weBLog-Eintrag wurde veröæfentlicht!');
define('_BL_MOST_RECENT','Die neuesten Einträçe');
define('_BL_ENTRIES_FOR','Einträçe füò %s');
define('_BL_ENTRY_FOR','Eintrag f&uuml;r %s');
define('_BL_NUMBER_OF_READS','%d x gelesen');
define('_BL_NUMBER_OF_TRACKBACKS','Trackback');//eng
define('_BL_CONFIRM_DELETE',"Sind Sie sicher Sie wollen den weBLog-Eintrag '%s' löóchen?");
define('_BL_BLOG_DELETED','Der ausgewäèlte weBLog-Eintrag wurde gelöócht');
define('_BL_BLOG_NOT_DELETED','Der ausgewäèlte weBLog-Eintrag wurde NICHT gelöócht. Unzureichende Rechte?');
define('_BL_WHOS_BLOG',"%s's weBLog");
define('_BL_ANON_CANNOT_POST_SORRY','Verzeihung, nur registrierte User köînen weBLog-Einträçe veröæfentlichen.');
define('_BL_DELETE_BUTTON','Löóchen');
define('_BL_PREVIEW_BUTTON','Vorschau');
define('_BL_POST_BUTTON','Veröæfentlichen');
define('_BL_POST_TOO_SMALL','Einträçe müósen wenigstens %d Zeichen enthalten, Ihrer enthäìt %d. Bitte mehr Inhalt hinzufüçen!');
define('_BL_POST_MUST_BE','Einträçe m&uuml;ssen wenigstens <b>%d</b> Zeichen enthalten');
define('_BL_CONTINUE_EDITING','Bearbeitung fortsetzen');
define('_BL_RSS_RECENT', 'weBLogs verteilen');
define('_BL_RSS_RECENT_FOR', "%s's Eintr&auml;ge verteilen");
define('_BL_UPDATEPING','Send update ping'); //eng
define('_BL_TRACKBACK','Trackback URL'); //eng
define('_BL_TRACKBACK_DSC','Please fill trackback URLs set apart by new line'); //eng
define('_BL_TRACKBACK_ADMIN','Recieved Trackback'); //eng
define('_BL_TRACKBACK_DELETE',_DELETE); //eng

// %s is your site name
define('_BL_INTARTICLE','Interessanter weBLog auf %s');
define('_BL_INTARTFOUND','Hier ist ein interessanter weBLog den ich auf %s gefunden habe');

define('_BL_PRINTERPAGE','Druckoptimierte Seite');
define('_BL_SENDSTORY','Diesen weBLog einem Freund schicken');

define('_BL_POSTED', 'Ver&ouml;ffentlicht');
define('_BL_AUTHOR', 'Autor');
define('_BL_T_COMMENTS', 'Kommentare');
// %s is your site name
define('_BL_COMESFROM', 'Dieser weBLog kommt von %s');
define('_BL_PARMALINK', 'Die URL dieses weBLogs');

// %s is count
define('_BL_THEREAREINTOTAL', '%s Eintr&auml;ge in den Archiven.');
define('_BL_NOARCHIVEDESC', 'No entries in archive.'); //eng
define('_BL_ARCHIVE', 'Archive');
define('_BL_ARCHIVE_FOR', "%s's Archive");
define('_BL_READS', 'x gelesen');
define('_BL_NEXT', 'Next entry'); //eng
define('_BL_PREV', 'Previous entry'); //eng

// %s is trackback
define('_BL_TRACKBACK_ANOUNCE' , 'Trackback URL of this entry'); //eng
define('_BL_TRACKBACK_TRANSMIT' , 'This entry trackbacks to below URL'); //eng
define('_BL_TRACKBACK_RECIEVED' , 'Trackbacks to this entry'); //eng

}
?>