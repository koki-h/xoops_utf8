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
 *
 * Spanish language, thanks to:
 *
 * Sergio G. Kohl (w4z004@hotmail.com, w4z004) 
 *
 * Xoops Spanish Support
 * http://www.esxoops.com
 *
 */
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_MI_LOADED' ) ) {

define( 'WEBLOG_MI_LOADED' , 1 ) ;

define('_MI_WEBLOG_NAME','weBLog');
define('_MI_WEBLOG_DESC','weBLogging/Journal system');
define('_MI_WEBLOG_SMNAME1','Mi weBLog');
define('_MI_WEBLOG_SMNAME2','Enviar');
define('_MI_WEBLOG_SMNAME3','Archives'); //eng

// submenu name
define('_MI_WEBLOG_DBMANAGER', 'Database'); //eng
define('_MI_WEBLOG_CATMANAGER', 'Categories'); //eng
define('_MI_WEBLOG_PRIVMANAGER', 'Privileges'); //eng
define('_MI_WEBLOG_MYBLOCKSADMIN', 'Blocks and Groups'); //eng

define('_MI_WEBLOG_NOTIFY','Este weBLog');
define('_MI_WEBLOG_NOTIFYDSC','Cuando algo le ocurre a este weBLog');
define('_MI_WEBLOG_ENTRY_NOTIFY','Este ingreso de weBLog');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','Cuando algo le ocurre a este ingreso de weBLog');

define('_MI_WEBLOG_ADD_NOTIFY','Nuevo envνο');
define('_MI_WEBLOG_ADD_NOTIFYCAP','Notificarme cuando un nuevo envνο ocurre');
define('_MI_WEBLOG_ADD_NOTIFYDSC','cuando un nuevo envνο se produce');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Nuevo envio de weBLog');

define('_MI_WEBLOG_ENTRY_COMMENT','Comentario Agregado');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Notificarme cuando un nuevo comentario es enviado para este item.');

define('_MI_WEBLOG_RECENT_BNAME1','weBlogs Recientes');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','weBlogs Recientes');
define('_MI_WEBLOG_TOP_WEBLOGS','Top weBLogs');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','Top weBLogs');

// Config Settings
define('_MI_WEBLOG_NUMPERPAGE','Nϊνero de ingresos por pαηina');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Formato de la Fecha');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Formato de la Hora');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Formato de la fecha en weBLog recientes');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Mostrar avatar del usuario en cada ingreso');
define('_MI_WEBLOG_SHOWAVATARDSC','');
define('_MI_WEBLOG_ALIGNAVATAR','Alinear avatar');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','Minimo tamaρο de ingreso (0=desactivar el chequeo de tamaρο)');
define('_MI_WEBLOG_IMGURL', 'Image URL'); //eng
define('_MI_WEBLOG_IMGURLDSC', 'URL of image that is shown or indicated in printer-friendly page and RSS');//eng
define('_MI_WEBLOG_MINENTRYSIZEDSC','');
define('_MI_WEBLOG_OPDOHTML', 'Option/Disable HTML') ;//eng
define('_MI_WEBLOG_OPDOHTMLDSC', 'If you want to be checked disable HTML Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPPRIVATE', 'Option/Private') ;//eng
define('_MI_WEBLOG_OPPRIVATEDSC', 'If you want to be checked Private Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPUPDATEPING', 'Option/Update ping') ;//eng
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'If you want to be checked Update ping Option as default , set "Yes".') ;//eng

define('_MI_WEBLOG_UPDATE_READS_WHEN','Actualizar el contador cuando');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','Cuando ve detalles');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','Cuando usuarios ven el weBLog');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','Cuando esta viendo el ingreso en cualquier lista');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Display entries for the given weBLog');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Post a new weBLog entry');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Display details about a weBLog entry');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','RSS feed of weBLog entries');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Printer friendly page'); //eng
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Monthly archives'); //eng

define('_MI_WEBLOG_EDITORHEIGHT','Altura del editor (lineas)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Ancho del editor (caracteres)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN',"Permitir solo la publicacion de admins?");
define('_MI_WEBLOG_ONLYADMINDSC','Configurandolo en NO le permite a los usuarios registrados el publicar, configurandolo en SI, solo los administradores podrαξ publicar.');

// wellwine for read cookie
define('_MI_WEBLOG_EXPIRATION','Expiration of read count (second)');
define('_MI_WEBLOG_EXPIRATIONDSC','Define the time expiration of each blog read count. The count will be incremented if it has passed this period since last viewing.');
define('_MI_WEBLOG_RSSSHOW','Show an icon linked to RSS feed');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','The number of entries to be fed in RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

//define('_MI_WEBLOG_NUMINRECENTBLOCK','Nϊνero de ingresos a mostrar en el bloque de blogs recientes');
//define('_MI_WEBLOG_NUMINRECENTBLOCKDSC','');
}
?>