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
define('_BL_DISABLEHTML', _DISABLEHTML); //eng
define('_BL_TITLE', 'TÌÙulo');
define('_BL_CATEGORY', 'Category'); //eng
define('_BL_CATEGORIES', 'Categories'); //eng
define('_BL_MAIN', 'Main'); //eng
define('_BL_CONTENTS','Contenido');
define('_BL_POST','Enviar');
define('_BL_PREVIEW','Previsualizar');
define('_BL_PRIVATE','Privado');
define('_BL_OPTIONS','Opciones');
define('_BL_COMMENTS','comentarios');
define('_BL_READ_USERS_BLOG',"Leer los weBLog de %s");
define('_BL_EDIT','Editar');
define('_BL_READ','leer');
define('_BL_BLOG','WeBLog');
define('_BL_DELETE','Borrar');
define('_BL_GATHERING','Obteniendo sus ingresos BLog ahora!');
define('_BL_GATHERING_SORRY','Lo lamento, BLog es para usuarios registrados unicamente.');
define('_BL_PRIVATE_NOTEXIST_SORRY', 'Sorry, The entry you requested is private or does not exist.');//eng
define('_BL_ENTRY_POSTED','El ingreso ha sido publicado!');
define('_BL_MOST_RECENT','Los m·Û recientes ingresos');
define('_BL_ENTRIES_FOR','Ingresos por %s');
define('_BL_ENTRY_FOR','Entry for %s');//eng
define('_BL_NUMBER_OF_READS','%d lectura(s) ');
define('_BL_NUMBER_OF_TRACKBACKS','Trackback');//eng
define('_BL_CONFIRM_DELETE',"ø≈st·†seguro que desea remover el ingreso de weBLog '%s'?");
define('_BL_BLOG_DELETED','Selected weBLog entry was deleted');
define('_BL_BLOG_NOT_DELETED','El weBLog Seleccionado no ha sido borrado.ø†Permisos Insuficientes ?');
define('_BL_WHOS_BLOG',"%s's weBLog");
define('_BL_ANON_CANNOT_POST_SORRY','Lo lamento, BLog es para usuarios registrados unicamente.');
define('_BL_DELETE_BUTTON','Borrar');
define('_BL_PREVIEW_BUTTON','Previsualizar');
define('_BL_POST_BUTTON','Enviar');
define('_BL_POST_TOO_SMALL','Entries must be at least %d charaters, yours is %d. Please add more content!');
define('_BL_POST_MUST_BE','El ingreso debe tener al menos <b>%d</b> carateres');
define('_BL_CONTINUE_EDITING','Continuar Editando');
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