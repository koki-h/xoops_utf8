<?php
/*
 * $Id: modinfo.php,v 1.5 2005/05/06 18:53:29 tohokuaiki Exp $
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

define('_MI_WEBLOG_NAME','WeBLog');
define('_MI_WEBLOG_DESC','WeBLog/Syst&egrave;me de Journal');
define('_MI_WEBLOG_SMNAME1','Mon Journal');
define('_MI_WEBLOG_SMNAME2','Poster');
define('_MI_WEBLOG_SMNAME3','Archives'); //eng

// submenu name
define('_MI_WEBLOG_DBMANAGER', 'Database'); //eng
define('_MI_WEBLOG_CATMANAGER', 'Categories'); //eng
define('_MI_WEBLOG_PRIVMANAGER', 'Privileges'); //eng
define('_MI_WEBLOG_MYBLOCKSADMIN', 'Blocks and Groups'); //eng

define('_MI_WEBLOG_NOTIFY','Ce journal');
define('_MI_WEBLOG_NOTIFYDSC','D&egrave;s qu\'un &eacute;v&egrave;nement survient dans ce journal');
define('_MI_WEBLOG_ENTRY_NOTIFY','Dans cet article');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','D&egrave;s qu\'un &eacute;v&egrave;nement survient dans cet article');

define('_MI_WEBLOG_ADD_NOTIFY','Nouveau Post');
define('_MI_WEBLOG_ADD_NOTIFYCAP','M\'avertir lors d\'un nouveau post');
define('_MI_WEBLOG_ADD_NOTIFYDSC','D&egrave;s qu\'il y a un nouvel article');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Nouveau post du Journal');

define('_MI_WEBLOG_ENTRY_COMMENT','Commentaire Ajout&eacute;');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Me pr&eacute;venir lorsqu\'un commentaire est ajout&eacute; &agrave; cet article.');

define('_MI_WEBLOG_RECENT_BNAME1','Nouveau Journal');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','Nouvelle(s) entr&eacute;e(s) au Journal');
define('_MI_WEBLOG_TOP_WEBLOGS','Top WeBLogs');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','Top WeBLogs');

// Config Settings
define('_MI_WEBLOG_NUMPERPAGE','Nombre d\'articles par page');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Format de la date');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Format de l\'heure');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Format de la date des articles r&eacute;cents');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Montrer l\'avatar de l\'utilisateur sur chaque article');
define('_MI_WEBLOG_SHOWAVATARDSC','');
define('_MI_WEBLOG_ALIGNAVATAR','Aligner l\'avatar');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','Taille minimale de l\'article (0=contr&ocirc;le de la taille d&eacute;sactiv&eacute;)');
define('_MI_WEBLOG_MINENTRYSIZEDSC','');
define('_MI_WEBLOG_IMGURL', 'Image URL'); //eng
define('_MI_WEBLOG_IMGURLDSC', 'URL of image that is shown or indicated in printer-friendly page and RSS');//eng
define('_MI_WEBLOG_OPDOHTML', 'Option/Disable HTML') ;//eng
define('_MI_WEBLOG_OPDOHTMLDSC', 'If you want to be checked disable HTML Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPPRIVATE', 'Option/Private') ;//eng
define('_MI_WEBLOG_OPPRIVATEDSC', 'If you want to be checked Private Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPUPDATEPING', 'Option/Update ping') ;//eng
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'If you want to be checked Update ping Option as default , set "Yes".') ;//eng

define('_MI_WEBLOG_UPDATE_READS_WHEN','Mise &agrave; jour du compteur lors');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','De l\'affichage d&eacute;taill&eacute;');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','De l\'affichage du journal d\'un membre');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','De l\'affichage de n\'importe quel article');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Montrer les articles de ce journal');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Poster un nouvel article');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Afficher le(s) d&eacute;tail(s) d\'un article');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','RSS feed of BLogger entries');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Printer friendly page'); //eng
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Monthly archives'); //eng

define('_MI_WEBLOG_EDITORHEIGHT','Hauteur de la bo&icirc;te d\'&eacute;dition (lignes)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Largeur de la bo&icirc;te d\'&eacute;dition (caract&egrave;res)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN','Autoriser uniquement l\'Admin &agrave; publier dans le module?');
define('_MI_WEBLOG_ONLYADMINDSC','D&eacute;fini &agrave; non autorisera tous les membres &agrave; publier des articles, alors que oui n\'autorisera que le(s) Administrateur(s) !');

// wellwine for read cookie
define('_MI_WEBLOG_EXPIRATION','Expiration of read count (second)');
define('_MI_WEBLOG_EXPIRATIONDSC','Define the time expiration of each blog read count. The count will be incremented if it has passed this period since last viewing.');
define('_MI_WEBLOG_RSSSHOW','Show an icon linked to RSS feed');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','The number of entries to be fed in RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

//define('_MI_WEBLOG_NUMINRECENTBLOCK','Nombre d\'articles &agrave; montrer dans le bloc');
//define('_MI_WEBLOG_NUMINRECENTBLOCKDSC','');

}
?>