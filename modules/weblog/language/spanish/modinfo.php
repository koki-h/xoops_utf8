<?php
/**
 * $Id: modinfo.php,v 1.6 2005/09/04 03:11:41 tohokuaiki Exp $
 * Copyright (c) 2003 by Jeremy N. Cowgar <jc@cowgar.com>
 * Copyright (c) 2003 by Hiro SAKAI (http://wellwine.net/)
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
define('_MI_WEBLOG_DESC','Blog/Sistema con registro cronológico(=log)');
define('_MI_WEBLOG_SMNAME1','Mi weBLog');
define('_MI_WEBLOG_SMNAME2','Post');
define('_MI_WEBLOG_SMNAME3','Archivos');

// nombres de submenú
define('_MI_WEBLOG_DBMANAGER', 'Control de Base de datos');
define('_MI_WEBLOG_CATMANAGER', 'Categorías');
define('_MI_WEBLOG_PRIVMANAGER', 'Control de autorización (sistema convencional de weBLog)'); //weBLog Simple System
define('_MI_WEBLOG_MYGROUPSADMIN', 'Control de autorización (sistema standard de XOOPS)'); // XOOPS standard System
define('_MI_WEBLOG_MYBLOCKSADMIN', 'Bloques y autorizaciones de acceso');
define('_MI_WEBLOG_TEMPLATE_MANEGER', 'Template');

define('_MI_WEBLOG_NOTIFY','Esta entrada');
define('_MI_WEBLOG_NOTIFYDSC','Notificar cuando hay alguna modificación  en esta entrada');
define('_MI_WEBLOG_ENTRY_NOTIFY','Esta entrada  ');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','Notificar cuando hay alguna modificación en esta entrada de weBLog');

define('_MI_WEBLOG_ADD_NOTIFY','Nuevo Post');
define('_MI_WEBLOG_ADD_NOTIFYCAP','Notifíqueme cuando publican nuevos posts');
define('_MI_WEBLOG_ADD_NOTIFYDSC','Notificar cuando publican nuevos posts');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Nuevo post de weBLog');

define('_MI_WEBLOG_ENTRY_COMMENT','Comentario añadido');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Notificar cuando hay nuevos comentarios sobre esta entrada.');

define('_MI_WEBLOG_RECENT_BNAME1','Ultima entrada');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','Ultima entrada publicada de weBLog');
define('_MI_WEBLOG_TOP_WEBLOGS','La entrada más popular');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','La entrada más leída de weBLog');
define('_MI_WEBLOG_USERS_WEBLOGS','Entradas por autor');
define('_MI_WEBLOG_USERS_WEBLOGS_DESC','Entradas por usuario');
define('_MI_WEBLOG_RECENT_TRACKBACKS','Ultimos Trackbacks');
define('_MI_WEBLOG_RECENT_TRACKBACKS_DESC','Ultimos Trackbacks recibidos');
define('_MI_WEBLOG_RECENT_COMMENTS','Ultimos comentarios');
define('_MI_WEBLOG_RECENT_COMMENTS_DESC','Ultimos comentarios sobre esta entrada de weBLog');
define('_MI_WEBLOG_LINKS','Enlaces de weBLog para autor');
define('_MI_WEBLOG_LINKS_DESC','Lista de enlaces integrados con un módulo de enlaces');
define('_MI_WEBLOG_RECENT_IMAGES','Imágenes recientes');
define('_MI_WEBLOG_RECENT_IMAGES_DESC','Imágenes recientemente incorporadas en el weBLog');
define('_MI_WEBLOG_CATEGORY_LIST', 'Listado de categorías');
define('_MI_WEBLOG_CATEGORY_LIST_DESC', 'Listado de categorías con nº de entradas');
define('_MI_WEBLOG_TB_CENTER', 'Central de Trackbacks');
define('_MI_WEBLOG_TB_CENTERDSC', 'Lista de entradas donde quiera centrar  los enlaces inversos (trackbacks).');
// hodaka ha agregado el bloque  de listado  de archivos
define('_MI_WEBLOG_ARCHIVE_LIST', 'Listado de archivos');
define('_MI_WEBLOG_ARCHIVE_LIST_DESC', 'Listado de archivos clasificable');
// hodaka ha agregado el bloque de calendario
define('_MI_WEBLOG_CALENDAR', 'Calendario weBLog');
define('_MI_WEBLOG_CALENDAR_DESC', 'Calendario del weBLog mensual con fechas marcadas de posts');

// Configración
define('_MI_WEBLOG_NUMPERPAGE','Nº de entradas por página');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Formato de fecha');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Formato de hora');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Formato de fecha para la última entrada');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Visualizar el careto del autor');
define('_MI_WEBLOG_SHOWAVATARDSC','Visualizar el avatar del usuario en cada entrada');
define('_MI_WEBLOG_ALIGNAVATAR','Alinear el careto');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','Nº mínimo de letras para escribir un post ');
define('_MI_WEBLOG_MINENTRYSIZEDSC','Tiene el sistema la función de cuenta automática pero queda nula ésta si elige "0"<br />Y el post no será aceptado cuando contiene menos número de letras aquí fijado. ');
define('_MI_WEBLOG_IMGURL', 'URL de imagen');
define('_MI_WEBLOG_IMGURLDSC', 'URL de imagen para la página de imprimir y  del RSS');
define('_MI_WEBLOG_OPDOHTML', 'Opción/Inválido HTML') ;
define('_MI_WEBLOG_OPDOHTMLDSC', 'Si quiere por defecto tener activada la opción de "Inválido HTML", elija "Sí".') ;
define('_MI_WEBLOG_OPDOBR', 'Opción/Avance automático de línea') ; // Auto wrap lines
define('_MI_WEBLOG_OPDOBRDSC', 'Si quiere por defecto tener activada la opción de "Avance automático de línea (Auto wrap lines) ", elija  "Sí".') ; 
define('_MI_WEBLOG_OPPRIVATE', 'Opción/Privado') ;
define('_MI_WEBLOG_OPPRIVATEDSC', 'Si quiere por defecto tener activada la opición de "Privado", elija "Sí".') ;
define('_MI_WEBLOG_OPUPDATEPING', 'Opción/Actualizar el ping') ;
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'Si quiere por defecto tener activada la opicion de "Actualizar el ping", elija "Sí".') ;

define('_MI_WEBLOG_UPDATE_READS_WHEN','Actualizar el número de lectura cuando el visitante...');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','ha leído la entrada en details.php.');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','ha entrado en index.php de un autor determinado.');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','ha entrado en index.php de cualquier autor.');
define('_MI_WEBLOG_GTICKETTIMEOUT','Límite de tiempo para hacer un post.');
define('_MI_WEBLOG_GTICKETTIMEOUTDSC','Escriba su post dentro de los minutos fijados');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Visualizar la lista de entradas (index.php)de weBLog asignado');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Escribir un post de weBLog');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Publicar el contenido entero de cada entrada (details.php)');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','Feed RSS de la última entrada');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Imprimir');
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Archivos mensuales');
define('_MI_WEBLOG_TEMPLATE_IMAGEMANAGERDSC','weBLog Image Manager');
define('_MI_WEBLOG_CALBLOCKCSS_DSC','CSS (hoja de estilo en cascada) para el bloque de calendario');
// myarchive.php por hodaka
define('_MI_WEBLOG_TEMPLATE_MYARCHIVEDSC', 'Archivos para clasificar');

define('_MI_WEBLOG_EDITORHEIGHT','Altura de la casilla para escribir ( nº de líneas)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Ancho de la casilla para escribir (nº de letras)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN',"Unicamente puede escribir los administradores del módulo.");
define('_MI_WEBLOG_ONLYADMINDSC',' "Sí"= solos administradores, "No" =administradores  y todos los usuarios registrados.<br />Esta configuración es válida cuando tiene elegido el sistema convencional de weBLog (= weBLog Simple System) como control de autorización.');
define('_MI_WEBLOG_POST_COUNTUP',"Validación del número de post ");
define('_MI_WEBLOG_POST_COUNTUPDSC','Sumar el número de post del autor al de XOOPS USERS POSTS(=contarlo como parte de los envíos generales del usuario en este sitioWeb) ');
define('_MI_WEBLOG_DISABLE_HTML',"No permitir el uso de las etiquetas de  HTML.");
define('_MI_WEBLOG_DISABLE_HTMLDSC','Si a nadie va a imponer condición alguna para registrarse  y escribir un post, elija "Sí" por seguridad.');
define('_MI_WEBLOG_TB_BLOGNAME',"Palabras (strings) como título de la entrada al enviar enlaces inversos (trackbacks) a la entrada del otro.");
define('_MI_WEBLOG_TB_BLOGNAMEDSC','Puede usar {MODULE_NAME} (=nombre del módulo) ,{USER_NAME} (=nombre del autor) ,{SITE_NAME}(=nombre del sitioWeb)');

// wellwine para leer cookie
define('_MI_WEBLOG_EXPIRATION','Expiración de número de lectura (por segundo)');
define('_MI_WEBLOG_EXPIRATIONDSC','Fije el tiempo de caducidad de los puntos de lectura de cada entrada. <br />Empezará a contar desde el "0" tras pasar el tiempo fijado. ');
define('_MI_WEBLOG_RSSSHOW','Visualizar el icono enlazado al feed RSS');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','Número máximo de entradas en el feed RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

define('_MI_WEBLOG_USESEPARATOR','Usar la línea divisoria del contenido');
define('_MI_WEBLOG_USESEPARATORDSC','Con la línea separadora insertada , puede dividir el contenido en dos partes para que en index.php aparezca solo la primera parte pero en details.php las dos (=texto entero)');
define('_MI_WEBLOG_USESMEMBERONLY','Autorizar sólo a los usuarios registrados para leer "');
define('_MI_WEBLOG_USESMEMBERONLYDSC','A partir de la línea separadora insertada pueden leer únicamente los usuarios registrados.');
define('_MI_WEBLOG_USEIMAGEMANAGER','Uso del weBLog Image manager');
define('_MI_WEBLOG_USEIMAGEMANAGERDSC','Con el weBlog Image manager,  diferente al XOOPS Core Image Manager, tiene más libertad en manejar imágenes como crear sus miniaturas (thumbnails) por ejemplo.');
define('_MI_WEBLOG_USEPERMITSYSTEM','Control del acceso de cada entrada. ');
define('_MI_WEBLOG_USEPERMITSYSTEMDSC','Al hacer un post, a cada grupo puede dar o no el permiso de leerlo.');
define('_MI_WEBLOG_DEFAULT_PERMIT','Autorización por defecto con el sistema activo de permission');
define('_MI_WEBLOG_DEFAULT_PERMITDSC','Permiso predeterminado de acceso al hacer un nuevo post.');
define('_MI_WEBLOG_PERMIT_SHOWTITLE','Mostrar al menos el título del post a los usuarios no autorizados a leerlo.') ;
define('_MI_WEBLOG_PERMIT_SHOWTITLEDSC','Advertencia : Aun con "Sí" elegido, los usuarios anónimos pueden leer los comentarios y las referencias de Trackbacks de la entrada.') ;
//define('_MI_WEBLOG_PERMIT_INGROUP' , 'Define el significado de "SAME GROUP"');
//define('_MI_WEBLOG_PERMIT_INGROUPDSC' , '"SAME GROUP"=mismo grupo');
//define('_MI_WEBLOG_PERMIT_OUTGROUP' , 'Define el significado de "DIFFERENT GROUP"');
//define('_MI_WEBLOG_PERMIT_OUTGROUPDSC' , '"DIFFERENT GROUP"=distinto grupo');
//define('_MI_WEBLOG_PERMIT_G_COMPLETE_S','Todos los grupos pertenecientes se coinciden por completo.(concordia total)');
//define('_MI_WEBLOG_PERMIT_G_PARTIAL_S','Al menos un grupo perteneciente se coincide.(concordia parcial)');
//define('_MI_WEBLOG_PERMIT_G_COMPLETE_D','Ningún grupo perteneciente se coincide. (excepción total)');
//define('_MI_WEBLOG_PERMIT_G_PARTIAL_D','Al menos un grupo perteneciente es diferente. (excepción parcial)');
define('_MI_WEBLOG_PRIVILEGE_SYSTEM','Control administrativo de autorización del módulo'); // Privilege system
define('_MI_WEBLOG_PRIVILEGE_SYSTEMDSC','Tiene dos opciones ; "weBLog" or "XOOPS". <br />El sistema "weBLog" es sencillo  y original del módulo, exclusive hasta la versión 1.41. <br />Y el "XOOPS", función más compleja, es del propio XOOPS .');
define('_MI_WEBLOG_SHOWCATEGORY','Visualización del listado de categorías');
define('_MI_WEBLOG_SHOWCATEGORY_DSC','Elija "Sí" si quiere mostrar el listado de categorías en la página de inicio de weBLog (index.php)');
define('_MI_WEBLOG_CAT_POSTPERM','Control de selección de categorías en el post');
define('_MI_WEBLOG_CAT_POSTPERM_DSC','Con "Sí" elegido, puede restringir a cada grupo la selección de categorías al hacer su post.');
define('_MI_WEBLOG_CAT_LISTCOL','Nº de columnas del listado de categorías');
define('_MI_WEBLOG_CAT_LISTCOL_DSC','');

// "myalbum-P"  Image manager
// Configuración
define( "_MI_ALBM_CFG_PHOTOSPATH" , "Directorio de fotos" ) ;
define( "_MI_ALBM_CFG_DESCPHOTOSPATH" , "Designar el directorio desde el punto instalado del XOOPS.<br />(Imprescindible anteponer la barra '/'. pero no añadir la última  '/'.)<br /> Da el permission 777 ó 707 para este directorio en unix." ) ;
define( "_MI_ALBM_CFG_THUMBSPATH" , "Directorio de mini-fotos(thumbnails)" ) ;
define( "_MI_ALBM_CFG_DESCTHUMBSPATH" , "Prepare de igual modo que el directorio para fotos." ) ;
//define( "_MI_ALBM_CFG_THUMBWIDTH" , "Ancho de mini-fotos(thumbnails)" ) ;
//define( "_MI_ALBM_CFG_DESCTHUMBWIDTH" , "La altura de fotos se determina automáticamente según su ancho." ) ;
define( "_MI_ALBM_CFG_THUMBSIZE" , "Tamaño de mini-fotos (pixel)" ) ;
define( "_MI_ALBM_CFG_THUMBRULE" , "Relga de cálculos para construir mini-fotos" ) ;
define( "_MI_ALBM_CFG_WIDTH" , "Ancho máximo de fotos" ) ;
define( "_MI_ALBM_CFG_DESCWIDTH" , "Ancho máximo de fotos que va a reajustar automáticamente al visualizar en la página principal.<br />Sin embargo, cuando utiliza el GD sin truecolor, significa la simple limitación de ancho." ) ;
define( "_MI_ALBM_CFG_HEIGHT" , "Altura máxima de fotos" ) ;
define( "_MI_ALBM_CFG_DESCHEIGHT" , "Comprende igual que ancho." ) ;
define( "_MI_ALBM_CFG_FSIZE" , "Tamaño máximo de fotos" ) ;
define( "_MI_ALBM_CFG_DESCFSIZE" , "Máximo al subir.(byte)" ) ;
define( "_MI_ALBM_CFG_MIDDLEPIXEL" , "Tamaño máximo en viñeta independiente" ) ;
//define( "_MI_ALBM_CFG_DESCMIDDLEPIXEL" , "Determinar con  (ancho) x (alto)<br />ej) 480x480" ) ;

define( "_MI_ALBUM_OPT_CALCFROMWIDTH" , "ancho : determinado / alto : automático" ) ;
define( "_MI_ALBUM_OPT_CALCFROMHEIGHT" , "ancho : automático /   alto : determinado" ) ;
define( "_MI_ALBUM_OPT_CALCWHINSIDEBOX" , "tamaño determinado del cual más tiene" ) ;


}
?>