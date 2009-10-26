<?php
/**
 * $Id: main.php,v 1.7 2005/09/04 03:11:41 tohokuaiki Exp $
 * Copyright (c) 2003 by Jeremy N. Cowgar <jc@cowgar.com>
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

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_BL_LOADED' ) ) {

define( 'WEBLOG_BL_LOADED' , 1 ) ;

// Básicos
define('_BL_DISABLEHTML', _DISABLEHTML);
define('_BL_WRAPLINES', 'Avance automático de línea '); 
define('_BL_TITLE', 'Título');
define('_BL_CATEGORY', 'Categoría');
define('_BL_CATEGORIES', 'Categorías');
define('_BL_MAIN', 'Principal');
define('_BL_CONTENTS','Entradas');
define('_BL_POST','Escribir');
define('_BL_PREVIEW',_PREVIEW);
define('_BL_PRIVATE','Privado');
define('_BL_OPTIONS','Opciones');
define('_BL_COMMENTS','Comentarios');
define('_BL_READ_USERS_BLOG',"Leer el weBLog de  %s's ");
define('_BL_EDIT',_EDIT);
define('_BL_READ','Leer');
define('_BL_SHOW','Publicar'); 
define('_BL_DELETE',_DELETE);
define('_BL_BLOG','weBLog');
define('_BL_BLOGGER','Usuario');
define('_BL_GATHERING','¡Reuniendo sus entradas......!');
define('_BL_GATHERING_SORRY','Disculpe, My weBLog es exclusivo para los usuarios registrados.');
define('_BL_PRIVATE_NOTEXIST_SORRY', 'Disculpe, la entrada que quiere leer es privada o no existe.');
define('_BL_ENTRY_POSTED','¡Ha  publicado un post!');
define('_BL_MOST_RECENT','Ultima Entrada');
define('_BL_ENTRIES_FOR','Entradas de  %s');
define('_BL_ENTRY_FOR','Entrada de  %s');
define('_BL_NUMBER_OF_READS','Nº de lectura');
define('_BL_NUMBER_OF_TRACKBACKS','Nº de Trackbacks');
define('_BL_CONFIRM_DELETE','¿Estás seguro de que quiere eliminar la entrada titulada  '%s'?");
define('_BL_BLOG_DELETED','La entrada elegida se ha eliminado.');
define('_BL_BLOG_NOT_DELETED','No ha podido eliminar la entrada elegida. Comfirme su autorización.');
define('_BL_WHOS_BLOG',"Entrada de  %s's");
define('_BL_ANON_CANNOT_POST_SORRY','Disculpe, sólo pueden escribir posts los usuarios autorizados.<br />Por favor, ponga en contacto con el administrador del site para pedir autorización.');
define('_BL_CANNOT_READ_SORRY','Disculpe, sólo pueden leer los usuarios registrados.<br />Por favor, regístrese o ponga en contacto con el administrador del sitioWeb para pedir autorización.');
define('_BL_CANNOT_EDIT','Solamente el administrador y los autores pueden modificar.');
define('_BL_DELETE_BUTTON',_DELETE);
define('_BL_PREVIEW_BUTTON',_PREVIEW);
define('_BL_POST_BUTTON','Publicar');
define('_BL_POST_TOO_SMALL','El post debe componerse al menos con  %d letras.<br />El suyo sólo contiene  %d. Amplie más su contenido.');
define('_BL_POST_TIMEOUT','Escriba el post en el tiempo de <b>%d</b> minutos');
define('_BL_POST_MUST_BE','El post debe constar de  <b>%d</b> letras minímas');
define('_BL_CONTINUE_EDITING','Seguir editando.');
define('_BL_RSS_RECENT', 'Sindicación del weBLog con RSS');
define('_BL_RSS_RECENT_FOR', 'Sindicar la entrada de  %s con RSS');
define('_BL_UPDATEPING','Enviar el ping renovado');
define('_BL_SPECIFY_TIME' , 'Designar fecha y hora de su post abajo seleccionada') ;
define('_BL_SPECIFY_TIME_DSC' , '&nbsp;&nbsp;&nbsp; fecha de post') ;
define('_BL_TRACKBACK','URL del Trackback');
define('_BL_TRACKBACKS','Nº de Trackbacks');
define('_BL_TRACKBACK_DSC','Cuando quiere enumerar varias URL de Trackbacks,  escriba una por una en cada línea. ');
define('_BL_TRACKBACK_ADMIN','Trackbacks recibidos'); 
define('_BL_PERMISSION','Grupos autorizados para leer');
define('_BL_PERMISSION_CAPTION','Puede aquí controlar la autorización de cada grupo para leer este post.');
define('_BL_TRACKBACK_DELETE',_DELETE);
define('_BL_GROUP_PERMIT', "Disculpe, no está usted autorizado a leer esta entrada.");
define('_BL_SELECT_ALL', 'Todos seleccionados');
define('_BL_CAUTION_NOHTML', '<b>Atención</b>');
define('_BL_FORBIDDEN_HTML_TAGS', '<b>No se permite usar todas las etiquetas de  HTML</b>(Aproveche el uso de las originales de Xoos "BB")');


// %s  es el nombre de su sitioWeb
define('_BL_INTARTICLE','Interesante blog encontrado en  %s');
define('_BL_INTARTFOUND','He encontrado este muy interesante blog en  %s');

define('_BL_PRINTERPAGE','Imprimir');
define('_BL_SENDSTORY','Enviar a mi amigo');

define('_BL_POSTED', 'Fecha de post');
define('_BL_AUTHOR', 'Autor');
// %s es el nombre de su sitioWeb
define('_BL_COMESFROM', 'Puede leer más blogs en %s');
define('_BL_PARMALINK', 'URL de este blog');

// % es número o puntos
define('_BL_THEREAREINTOTAL', '%s entrada(s) en archivo.');
define('_BL_NOARCHIVEDESC', 'Ninguna entrada en archivo.');
define('_BL_ARCHIVE', 'Archivos');
define('_BL_ARCHIVE_FOR', "Archivo de %s");
define('_BL_READS', 'Nº de lectura');
define('_BL_NEXT', 'Siguiente');
define('_BL_PREV', 'Anterior');

// División del contenido
define('_BL_ENTRY_SEPARATOR' , 'Separador del contenido');
define('_BL_ENTRY_SEPARATOR_CAPTION' , 'Esta línea divide el contenido en dos partes, cuya misión es publicar sólo su primera parte en la lista de entradas (index.php).<br />El texto completo puede leer en la página de cada entrada (details.php)');
define('_BL_ENTRY_SEPARATOR_VALUE' , 'Pinche este botón para insertar la línea separadora');
define('_BL_ENTRY_SEPARATOR_NEXT' , 'leer más...');

// División del contenido exclusiva para miembros
define('_BL_MEMBER_ONLY_READ' , 'Sólo miembros');
define('_BL_MEMBER_ONLY_READ_CAPTION' , 'A partir de la línea separadora, sólo podrán leer los miembros.');
define('_BL_MEMBER_ONLY_READ_VALUE' , 'Pinche este botón para insertar la línea separadora');
define('_BL_MEMBER_ONLY_READ_MORE' , 'Es necesario registrarse si quiere leer la entrada completa.');

// Bandeja de image manager
define('_BL_WEBLOG_IMAGEMANAGER' , 'Image Manager');
define('_BL_WEBLOG_IMAGEMANAGER_CAUTION' , '" Sus circunstancias son inválidas. El weBLog imagemanager requiere la extensión de PHP-GD2."');

// %s es trackback (=enlace inverso)
define('_BL_TRACKBACK_ANOUNCE' , 'URL de Trackbacks de esta entrada');
define('_BL_TRACKBACK_TRANSMIT' , 'Esta entrada está enlazada con la siguiente URL de Trackbacks');
define('_BL_TRACKBACK_RECIEVED' , 'Trackbacks recibidas');

// %s es uname (=nombre del usuario)
define('_BL_TRACKBACKS_FOR','Para la entrada de  %s\'s ');
define('_BL_COMMENTS_FOR','Para la entrada de  %s\'s  ');


// uso del  weBLog imagemanager :: myalbum-P
define("_BL_ALBM_PHOTOUPLOAD","Subir la foto");
define("_BL_ALBM_MAXPIXEL","´Máximo tamaño (pixel)");
define("_BL_ALBM_MAXSIZE","Máximo tamaño (byte)");
define("_BL_ALBM_PHOTOTITLE","Título");
define("_BL_ALBM_PHOTOCAT","Categoría");
define("_BL_ALBM_SELECTFILE","Foto elegida");

define("_BL_ALBM_PHOTODEL","¿Quiere eliminar la foto?");
define("_BL_ALBM_DELETINGPHOTO","Eliminando la foto.....");
define("_BL_ALBM_RECEIVED","Hemos recibido su foto. ¡Muchas gracias!");
define("_BL_ALBM_MUSTREGFIRST","Disculpe. No está usted autorizado.<br />Por favor, regístrese o entre de nuevo como usuario registrado.");
define("_BL_ALBM_NOIMAGESPECIFIED","Error: Elija un fichero de imagen que quiera subir.");
define("_BL_ALBM_FILEERROR","Error: El tamaño de la foto pasa del máximo permitido o no encuentra en el directorio en que ha buscado para subir.");
define("_BL_ALBM_FILEREADERROR","Error: No se puede visualizar las fotos por algún u otro problema.");

}
?>