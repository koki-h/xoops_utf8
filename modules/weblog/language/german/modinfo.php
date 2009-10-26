<?php
/*
 * $Id: modinfo.php,v 1.2 2005/05/06 18:53:29 tohokuaiki Exp $
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

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_MI_LOADED' ) ) {

define( 'WEBLOG_MI_LOADED' , 1 ) ;

define('_MI_WEBLOG_NAME','weBLog');
define('_MI_WEBLOG_DESC','weBLogging/Journal-System');
define('_MI_WEBLOG_SMNAME1','Mein weBLog');
define('_MI_WEBLOG_SMNAME2','Eintrag senden');
define('_MI_WEBLOG_SMNAME3','Archive');

// submenu name
define('_MI_WEBLOG_DBMANAGER', 'Database'); //eng
define('_MI_WEBLOG_CATMANAGER', 'Categories'); //eng
define('_MI_WEBLOG_PRIVMANAGER', 'Privileges'); //eng
define('_MI_WEBLOG_MYBLOCKSADMIN', 'Blocks and Groups'); //eng

define('_MI_WEBLOG_NOTIFY','Dieses weBLog');
define('_MI_WEBLOG_NOTIFYDSC','Wenn etwas bei dem weBLog passiert');
define('_MI_WEBLOG_ENTRY_NOTIFY','Dieser weBLog-Eintrag');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','Wenn etwas bei diesem weBLog-Eintrag passiert');

define('_MI_WEBLOG_ADD_NOTIFY','Neuer Eintrag');
define('_MI_WEBLOG_ADD_NOTIFYCAP','Benachrichtigen wenn ein Eintrag veröffentlicht worden ist');
define('_MI_WEBLOG_ADD_NOTIFYDSC','Wenn ein neuer Eintrag veröffentlicht worden ist');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Neuer weBLog-Eintrag');

define('_MI_WEBLOG_ENTRY_COMMENT','Kommentar hinzugefügt');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Benachrichtigen wenn ein neuer Kommentar für diesen Eintrag veröffentlicht worden ist.');

define('_MI_WEBLOG_RECENT_BNAME1','Die neuesten weBLogs');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','Die neuesten weBLog-Einträge');
define('_MI_WEBLOG_TOP_WEBLOGS','Top weBLogs');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','Top weBLogs');

// Config Settings
define('_MI_WEBLOG_NUMPERPAGE','Anzahl der Einträge pro Seite');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Datumsformat');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Zeitformat');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Datumsformat in neueste weBLog\'s');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Mitglieder-Avatare bei jedem Eintrag anzeigen');
define('_MI_WEBLOG_SHOWAVATARDSC','');
define('_MI_WEBLOG_ALIGNAVATAR','Avatar ausrichten');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','Minimale Länge des Eintrags (0 = Längen-Check deaktiviert)');
define('_MI_WEBLOG_MINENTRYSIZEDSC','');
define('_MI_WEBLOG_IMGURL', 'Image URL'); //eng
define('_MI_WEBLOG_IMGURLDSC', 'URL of image that is shown or indicated in printer-friendly page and RSS');//eng
define('_MI_WEBLOG_OPDOHTML', 'Option/Disable HTML') ;//eng
define('_MI_WEBLOG_OPDOHTMLDSC', 'If you want to be checked disable HTML Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPPRIVATE', 'Option/Private') ;//eng
define('_MI_WEBLOG_OPPRIVATEDSC', 'If you want to be checked Private Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPUPDATEPING', 'Option/Update ping') ;//eng
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'If you want to be checked Update ping Option as default , set "Yes".') ;//eng

define('_MI_WEBLOG_UPDATE_READS_WHEN','Zugriffs-Zähler aktualisieren');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','Wenn Details gelesen werden');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','Wenn Mitglieder-weBLog gelesen wird');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','Wenn Einträge in jeglichen Listen gelesen werden');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Einträge für den gegebenen weBLog anzeigen');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Neuen weBLog-Eintrag veröffentlichen');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Details eines weBLog-Eintrags anzeigen');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','RSS-Feed der weBLog-Einträge');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Druckoptimierte Seite');
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Monatliche Archive');

define('_MI_WEBLOG_EDITORHEIGHT','Höhe der Editor-Box (in Zeilen)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Breite der Editor-Box (in Zeichen)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN',"Nur Modul-Admins Veröffentlichung erlauben?");
define('_MI_WEBLOG_ONLYADMINDSC','Nein erlaubt allen registrierten Mitglieder die Veröffentlichung. Ja erlaubt nur Modul-Administratoren die Veröffentlichung.');

// wellwine for read cookie
define('_MI_WEBLOG_EXPIRATION','Ablauf des Lesez&auml;hlers (in Sekunden)');
define('_MI_WEBLOG_EXPIRATIONDSC','Ablauf des Lesez&auml;hlers jedes weBLog definieren. Der Z&auml;hler wird erh&ouml;ht wenn der festgelegte Zeitraum seit dem letzten Aufruf verstrichen ist.');
define('_MI_WEBLOG_RSSSHOW','Icon anzeigen das mit RSS Feed verlinkt werden soll');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','Anzahl der Eintr&auml;ge f&uuml;r RSS RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

//define('_WEBLOG_NO','Nein');
//define('_WEBLOG_YES','Ja');
//define('_WEBLOG_TOP','Oben');
//define('_WEBLOG_MID','Mittig');
//define('_WEBLOG_BOT','Unten');
//define('_WEBLOG_LEFT','Links');
//define('_WEBLOG_RIGHT','Rechts');

//define('_MI_WEBLOG_NUMINRECENTBLOCK','Anzahl der Einträge im Block für die neuesten Einträge');
//define('_MI_WEBLOG_NUMINRECENTBLOCKDSC','');

}
?>