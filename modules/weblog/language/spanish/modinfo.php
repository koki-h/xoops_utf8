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
define('_MI_WEBLOG_DESC','Blog/Sistema con registro cronol�gico(=log)');
define('_MI_WEBLOG_SMNAME1','Mi weBLog');
define('_MI_WEBLOG_SMNAME2','Post');
define('_MI_WEBLOG_SMNAME3','Archivos');

// nombres de submen�
define('_MI_WEBLOG_DBMANAGER', 'Control de Base de datos');
define('_MI_WEBLOG_CATMANAGER', 'Categor�as');
define('_MI_WEBLOG_PRIVMANAGER', 'Control de autorizaci�n (sistema convencional de weBLog)'); //weBLog Simple System
define('_MI_WEBLOG_MYGROUPSADMIN', 'Control de autorizaci�n (sistema standard de XOOPS)'); // XOOPS standard System
define('_MI_WEBLOG_MYBLOCKSADMIN', 'Bloques y autorizaciones de acceso');
define('_MI_WEBLOG_TEMPLATE_MANEGER', 'Template');

define('_MI_WEBLOG_NOTIFY','Esta entrada');
define('_MI_WEBLOG_NOTIFYDSC','Notificar cuando hay alguna modificaci�n  en esta entrada');
define('_MI_WEBLOG_ENTRY_NOTIFY','Esta entrada  ');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','Notificar cuando hay alguna modificaci�n en esta entrada de weBLog');

define('_MI_WEBLOG_ADD_NOTIFY','Nuevo Post');
define('_MI_WEBLOG_ADD_NOTIFYCAP','Notif�queme cuando publican nuevos posts');
define('_MI_WEBLOG_ADD_NOTIFYDSC','Notificar cuando publican nuevos posts');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Nuevo post de weBLog');

define('_MI_WEBLOG_ENTRY_COMMENT','Comentario a�adido');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Notificar cuando hay nuevos comentarios sobre esta entrada.');

define('_MI_WEBLOG_RECENT_BNAME1','Ultima entrada');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','Ultima entrada publicada de weBLog');
define('_MI_WEBLOG_TOP_WEBLOGS','La entrada m�s popular');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','La entrada m�s le�da de weBLog');
define('_MI_WEBLOG_USERS_WEBLOGS','Entradas por autor');
define('_MI_WEBLOG_USERS_WEBLOGS_DESC','Entradas por usuario');
define('_MI_WEBLOG_RECENT_TRACKBACKS','Ultimos Trackbacks');
define('_MI_WEBLOG_RECENT_TRACKBACKS_DESC','Ultimos Trackbacks recibidos');
define('_MI_WEBLOG_RECENT_COMMENTS','Ultimos comentarios');
define('_MI_WEBLOG_RECENT_COMMENTS_DESC','Ultimos comentarios sobre esta entrada de weBLog');
define('_MI_WEBLOG_LINKS','Enlaces de weBLog para autor');
define('_MI_WEBLOG_LINKS_DESC','Lista de enlaces integrados con un m�dulo de enlaces');
define('_MI_WEBLOG_RECENT_IMAGES','Im�genes recientes');
define('_MI_WEBLOG_RECENT_IMAGES_DESC','Im�genes recientemente incorporadas en el weBLog');
define('_MI_WEBLOG_CATEGORY_LIST', 'Listado de categor�as');
define('_MI_WEBLOG_CATEGORY_LIST_DESC', 'Listado de categor�as con n� de entradas');
define('_MI_WEBLOG_TB_CENTER', 'Central de Trackbacks');
define('_MI_WEBLOG_TB_CENTERDSC', 'Lista de entradas donde quiera centrar  los enlaces inversos (trackbacks).');
// hodaka ha agregado el bloque  de listado  de archivos
define('_MI_WEBLOG_ARCHIVE_LIST', 'Listado de archivos');
define('_MI_WEBLOG_ARCHIVE_LIST_DESC', 'Listado de archivos clasificable');
// hodaka ha agregado el bloque de calendario
define('_MI_WEBLOG_CALENDAR', 'Calendario weBLog');
define('_MI_WEBLOG_CALENDAR_DESC', 'Calendario del weBLog mensual con fechas marcadas de posts');

// Configraci�n
define('_MI_WEBLOG_NUMPERPAGE','N� de entradas por p�gina');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Formato de fecha');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Formato de hora');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Formato de fecha para la �ltima entrada');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Visualizar el careto del autor');
define('_MI_WEBLOG_SHOWAVATARDSC','Visualizar el avatar del usuario en cada entrada');
define('_MI_WEBLOG_ALIGNAVATAR','Alinear el careto');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','N� m�nimo de letras para escribir un post ');
define('_MI_WEBLOG_MINENTRYSIZEDSC','Tiene el sistema la funci�n de cuenta autom�tica pero queda nula �sta si elige "0"<br />Y el post no ser� aceptado cuando contiene menos n�mero de letras aqu� fijado. ');
define('_MI_WEBLOG_IMGURL', 'URL de imagen');
define('_MI_WEBLOG_IMGURLDSC', 'URL de imagen para la p�gina de imprimir y  del RSS');
define('_MI_WEBLOG_OPDOHTML', 'Opci�n/Inv�lido HTML') ;
define('_MI_WEBLOG_OPDOHTMLDSC', 'Si quiere por defecto tener activada la opci�n de "Inv�lido HTML", elija "S�".') ;
define('_MI_WEBLOG_OPDOBR', 'Opci�n/Avance autom�tico de l�nea') ; // Auto wrap lines
define('_MI_WEBLOG_OPDOBRDSC', 'Si quiere por defecto tener activada la opci�n de "Avance autom�tico de l�nea (Auto wrap lines) ", elija  "S�".') ; 
define('_MI_WEBLOG_OPPRIVATE', 'Opci�n/Privado') ;
define('_MI_WEBLOG_OPPRIVATEDSC', 'Si quiere por defecto tener activada la opici�n de "Privado", elija "S�".') ;
define('_MI_WEBLOG_OPUPDATEPING', 'Opci�n/Actualizar el ping') ;
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'Si quiere por defecto tener activada la opicion de "Actualizar el ping", elija "S�".') ;

define('_MI_WEBLOG_UPDATE_READS_WHEN','Actualizar el n�mero de lectura cuando el visitante...');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','ha le�do la entrada en details.php.');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','ha entrado en index.php de un autor determinado.');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','ha entrado en index.php de cualquier autor.');
define('_MI_WEBLOG_GTICKETTIMEOUT','L�mite de tiempo para hacer un post.');
define('_MI_WEBLOG_GTICKETTIMEOUTDSC','Escriba su post dentro de los minutos fijados');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Visualizar la lista de entradas (index.php)de weBLog asignado');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Escribir un post de weBLog');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Publicar el contenido entero de cada entrada (details.php)');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','Feed RSS de la �ltima entrada');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Imprimir');
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Archivos mensuales');
define('_MI_WEBLOG_TEMPLATE_IMAGEMANAGERDSC','weBLog Image Manager');
define('_MI_WEBLOG_CALBLOCKCSS_DSC','CSS (hoja de estilo en cascada) para el bloque de calendario');
// myarchive.php por hodaka
define('_MI_WEBLOG_TEMPLATE_MYARCHIVEDSC', 'Archivos para clasificar');

define('_MI_WEBLOG_EDITORHEIGHT','Altura de la casilla para escribir ( n� de l�neas)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Ancho de la casilla para escribir (n� de letras)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN',"Unicamente puede escribir los administradores del m�dulo.");
define('_MI_WEBLOG_ONLYADMINDSC',' "S�"= solos administradores, "No" =administradores  y todos los usuarios registrados.<br />Esta configuraci�n es v�lida cuando tiene elegido el sistema convencional de weBLog (= weBLog Simple System) como control de autorizaci�n.');
define('_MI_WEBLOG_POST_COUNTUP',"Validaci�n del n�mero de post ");
define('_MI_WEBLOG_POST_COUNTUPDSC','Sumar el n�mero de post del autor al de XOOPS USERS POSTS(=contarlo como parte de los env�os generales del usuario en este sitioWeb) ');
define('_MI_WEBLOG_DISABLE_HTML',"No permitir el uso de las etiquetas de  HTML.");
define('_MI_WEBLOG_DISABLE_HTMLDSC','Si a nadie va a imponer condici�n alguna para registrarse  y escribir un post, elija "S�" por seguridad.');
define('_MI_WEBLOG_TB_BLOGNAME',"Palabras (strings) como t�tulo de la entrada al enviar enlaces inversos (trackbacks) a la entrada del otro.");
define('_MI_WEBLOG_TB_BLOGNAMEDSC','Puede usar {MODULE_NAME} (=nombre del m�dulo) ,{USER_NAME} (=nombre del autor) ,{SITE_NAME}(=nombre del sitioWeb)');

// wellwine para leer cookie
define('_MI_WEBLOG_EXPIRATION','Expiraci�n de n�mero de lectura (por segundo)');
define('_MI_WEBLOG_EXPIRATIONDSC','Fije el tiempo de caducidad de los puntos de lectura de cada entrada. <br />Empezar� a contar desde el "0" tras pasar el tiempo fijado. ');
define('_MI_WEBLOG_RSSSHOW','Visualizar el icono enlazado al feed RSS');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','N�mero m�ximo de entradas en el feed RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

define('_MI_WEBLOG_USESEPARATOR','Usar la l�nea divisoria del contenido');
define('_MI_WEBLOG_USESEPARATORDSC','Con la l�nea separadora insertada , puede dividir el contenido en dos partes para que en index.php aparezca solo la primera parte pero en details.php las dos (=texto entero)');
define('_MI_WEBLOG_USESMEMBERONLY','Autorizar s�lo a los usuarios registrados para leer "');
define('_MI_WEBLOG_USESMEMBERONLYDSC','A partir de la l�nea separadora insertada pueden leer �nicamente los usuarios registrados.');
define('_MI_WEBLOG_USEIMAGEMANAGER','Uso del weBLog Image manager');
define('_MI_WEBLOG_USEIMAGEMANAGERDSC','Con el weBlog Image manager,  diferente al XOOPS Core Image Manager, tiene m�s libertad en manejar im�genes como crear sus miniaturas (thumbnails) por ejemplo.');
define('_MI_WEBLOG_USEPERMITSYSTEM','Control del acceso de cada entrada. ');
define('_MI_WEBLOG_USEPERMITSYSTEMDSC','Al hacer un post, a cada grupo puede dar o no el permiso de leerlo.');
define('_MI_WEBLOG_DEFAULT_PERMIT','Autorizaci�n por defecto con el sistema activo de permission');
define('_MI_WEBLOG_DEFAULT_PERMITDSC','Permiso predeterminado de acceso al hacer un nuevo post.');
define('_MI_WEBLOG_PERMIT_SHOWTITLE','Mostrar al menos el t�tulo del post a los usuarios no autorizados a leerlo.') ;
define('_MI_WEBLOG_PERMIT_SHOWTITLEDSC','Advertencia : Aun con "S�" elegido, los usuarios an�nimos pueden leer los comentarios y las referencias de Trackbacks de la entrada.') ;
//define('_MI_WEBLOG_PERMIT_INGROUP' , 'Define el significado de "SAME GROUP"');
//define('_MI_WEBLOG_PERMIT_INGROUPDSC' , '"SAME GROUP"=mismo grupo');
//define('_MI_WEBLOG_PERMIT_OUTGROUP' , 'Define el significado de "DIFFERENT GROUP"');
//define('_MI_WEBLOG_PERMIT_OUTGROUPDSC' , '"DIFFERENT GROUP"=distinto grupo');
//define('_MI_WEBLOG_PERMIT_G_COMPLETE_S','Todos los grupos pertenecientes se coinciden por completo.(concordia total)');
//define('_MI_WEBLOG_PERMIT_G_PARTIAL_S','Al menos un grupo perteneciente se coincide.(concordia parcial)');
//define('_MI_WEBLOG_PERMIT_G_COMPLETE_D','Ning�n grupo perteneciente se coincide. (excepci�n total)');
//define('_MI_WEBLOG_PERMIT_G_PARTIAL_D','Al menos un grupo perteneciente es diferente. (excepci�n parcial)');
define('_MI_WEBLOG_PRIVILEGE_SYSTEM','Control administrativo de autorizaci�n del m�dulo'); // Privilege system
define('_MI_WEBLOG_PRIVILEGE_SYSTEMDSC','Tiene dos opciones ; "weBLog" or "XOOPS". <br />El sistema "weBLog" es sencillo  y original del m�dulo, exclusive hasta la versi�n 1.41. <br />Y el "XOOPS", funci�n m�s compleja, es del propio XOOPS .');
define('_MI_WEBLOG_SHOWCATEGORY','Visualizaci�n del listado de categor�as');
define('_MI_WEBLOG_SHOWCATEGORY_DSC','Elija "S�" si quiere mostrar el listado de categor�as en la p�gina de inicio de weBLog (index.php)');
define('_MI_WEBLOG_CAT_POSTPERM','Control de selecci�n de categor�as en el post');
define('_MI_WEBLOG_CAT_POSTPERM_DSC','Con "S�" elegido, puede restringir a cada grupo la selecci�n de categor�as al hacer su post.');
define('_MI_WEBLOG_CAT_LISTCOL','N� de columnas del listado de categor�as');
define('_MI_WEBLOG_CAT_LISTCOL_DSC','');

// "myalbum-P"  Image manager
// Configuraci�n
define( "_MI_ALBM_CFG_PHOTOSPATH" , "Directorio de fotos" ) ;
define( "_MI_ALBM_CFG_DESCPHOTOSPATH" , "Designar el directorio desde el punto instalado del XOOPS.<br />(Imprescindible anteponer la barra '/'. pero no a�adir la �ltima  '/'.)<br /> Da el permission 777 � 707 para este directorio en unix." ) ;
define( "_MI_ALBM_CFG_THUMBSPATH" , "Directorio de mini-fotos(thumbnails)" ) ;
define( "_MI_ALBM_CFG_DESCTHUMBSPATH" , "Prepare de igual modo que el directorio para fotos." ) ;
//define( "_MI_ALBM_CFG_THUMBWIDTH" , "Ancho de mini-fotos(thumbnails)" ) ;
//define( "_MI_ALBM_CFG_DESCTHUMBWIDTH" , "La altura de fotos se determina autom�ticamente seg�n su ancho." ) ;
define( "_MI_ALBM_CFG_THUMBSIZE" , "Tama�o de mini-fotos (pixel)" ) ;
define( "_MI_ALBM_CFG_THUMBRULE" , "Relga de c�lculos para construir mini-fotos" ) ;
define( "_MI_ALBM_CFG_WIDTH" , "Ancho m�ximo de fotos" ) ;
define( "_MI_ALBM_CFG_DESCWIDTH" , "Ancho m�ximo de fotos que va a reajustar autom�ticamente al visualizar en la p�gina principal.<br />Sin embargo, cuando utiliza el GD sin truecolor, significa la simple limitaci�n de ancho." ) ;
define( "_MI_ALBM_CFG_HEIGHT" , "Altura m�xima de fotos" ) ;
define( "_MI_ALBM_CFG_DESCHEIGHT" , "Comprende igual que ancho." ) ;
define( "_MI_ALBM_CFG_FSIZE" , "Tama�o m�ximo de fotos" ) ;
define( "_MI_ALBM_CFG_DESCFSIZE" , "M�ximo al subir.(byte)" ) ;
define( "_MI_ALBM_CFG_MIDDLEPIXEL" , "Tama�o m�ximo en vi�eta independiente" ) ;
//define( "_MI_ALBM_CFG_DESCMIDDLEPIXEL" , "Determinar con  (ancho) x (alto)<br />ej) 480x480" ) ;

define( "_MI_ALBUM_OPT_CALCFROMWIDTH" , "ancho : determinado / alto : autom�tico" ) ;
define( "_MI_ALBUM_OPT_CALCFROMHEIGHT" , "ancho : autom�tico /   alto : determinado" ) ;
define( "_MI_ALBUM_OPT_CALCWHINSIDEBOX" , "tama�o determinado del cual m�s tiene" ) ;


}
?>