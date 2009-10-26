 <?php
/*
 * $Id: blocks.php,v 1.7 2005/09/04 03:11:41 tohokuaiki Exp $
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


if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_MB_LOADED' ) ) {

define( 'WEBLOG_MB_LOADED' , 1 ) ;

define('_MB_WEBLOG_EDIT_NUMBER_OF_ENTRIES','�Cu�ntas entradas quiere publicar?');
define('_MB_WEBLOG_EDIT_LINK_TO_LIST', '�Quiere enlazar el nombre de los autores a la p�gina de inicio de weBLog? (0=No,1=S�)');
define('_MB_WEBLOG_EDIT_MAX_TITLE_LENGTH','N� m�ximo de letras para el t�tulo');
define('_MB_WEBLOG_EDIT_MAX_CONTENTS_LENGTH','�Quiere publicar su post? (0=No, 1= S�lo la primera mitad )');
define('_MB_WEBLOG_EDIT_DATE_FORMAT','Formato de la fecha');
define('_MB_WEBLOG_EDIT_USE_AVATARS','�Quiere visualizar los caretos de los autores? (0=No,1=S�)'); //careto=avatar=icono personal
define('_MB_WEBLOG_EDIT_TYPE','Tama�o de letras (1=peque�o,2=mediano,3=grande)');

define('_MB_WEBLOG_EDIT_NUMBER_OF_USERS', '�Cu�ntos usuarios quiere mostrar ?');
define('_MB_WEBLOG_EDIT_NUMBER_OF_TRACKBACKS', '?Cu�ntos trackbacks quiere mostrar ?');  // trackback=enlace inverso
define('_MB_WEBLOG_EDIT_NUMBER_OF_COMMENTS', 'Cu�ntos comentarios quiere mostrar ?');
define('_MB_WEBLOG_EDIT_ORDER_BY', '?Cu�l quiere mostrar? (0=Ultima fecha de post,1=N� de lectura)');
define('_MB_WEBLOG_EDIT_LINKS_MODULE', 'Selecci�n de m�dulos de enlace.<br />( De momento,s�lo mylinks y weblinks son disponibles.)');
define('_MB_WEBLOG_EDIT_LINKS_NUMBER', 'N� de enlaces a mostrar');
define('_MB_WEBLOG_EDIT_LINKS_ONLYPOST', 'Publicar s�lo cuando el autor escribe su post (0=No , 1=S�)');
define('_MB_WEBLOG_EDIT_LINKS_SHOWDSC', 'Mostrar la descripci�n de enlaces (0=No , 1=S�)');
define('_MB_WEBLOG_EDIT_CAT_ORDERBY', 'Orden de clasificaci�n');// a�adida por hodaka para el listado de categor�as
define('_MB_WEBLOG_EDIT_CAT_TITLE', 'T�tulo de categor�a');
define('_MB_WEBLOG_EDIT_CAT_ID', 'N� Identificador(ID) de categor�a');
define('_MB_WEBLOG_EDIT_SHOW_FORBIDDEN_PICTURE', '�Quiere visualizar las im�genes a los usuarios registrados<br />aun cuando no est�n autorizados a leer los posts? (0=No , 1=S� )');
define('_MB_WEBLOG_EDIT_SHOW_CONTENTS', '�Quiere publicar el contenido del post? (0=No , 1=S� )');
define('_MB_WEBLOG_EDIT_TBCENTER_ENTRIES', '�Cu�ntas entradas quiere publicar en el Central de Trackbacks?');
define('_MB_WEBLOG_EDIT_TBCENTER_CONTENTS_NUM', '�Con cu�ntas letras quiere publicar cada entrada en el Central de Trackbacks?');
define('_MB_WEBLOG_EDIT_TBCENTER_CATEGORY', '�Con qu� nombre de categor�a prefiere asignar al Central de Trackbacks?');
// a�adido por hodaka para el listado del archivos
define('_MB_WEBLOG_EDIT_ARCHIVE_NUMBER_PER_PAGE', '�Cu�ntos meses quiere mostrar?');
define('_MB_WEBLOG_LANG_SORT_ARCHIVE', 'Clasificaci�n de archivos');
// a�adido por hodaka para el calendario
define('_MB_WEBLOG_LANG_PREVMONTH', '&laquo;');
define('_MB_WEBLOG_LANG_NEXTMONTH', '&raquo;');
define('_MB_WEBLOG_LANG_PREVYEAR', '&laquo;');
define('_MB_WEBLOG_LANG_NEXTYEAR', '&raquo;');
define('_MB_WEBLOG_LANG_PREVMONTH_TITLE', 'Mes anterior');
define('_MB_WEBLOG_LANG_NEXTMONTH_TITLE', 'Mes pr�ximo');
define('_MB_WEBLOG_LANG_PREVYEAR_TITLE', 'A�o anterior');
define('_MB_WEBLOG_LANG_NEXTYEAR_TITLE', 'A�o pr�ximo');
define('_MB_WEBLOG_LANG_THIS_MONTH_TITLE', 'Archivo de este mes');
define('_MB_WEBLOG_LANG_SUNDAY', 'Do');
define('_MB_WEBLOG_LANG_MONDAY', 'Lu');
define('_MB_WEBLOG_LANG_TUESDAY', 'Ma');
define('_MB_WEBLOG_LANG_WEDNESDAY', 'Mi');
define('_MB_WEBLOG_LANG_THURSDAY', 'Ju');
define('_MB_WEBLOG_LANG_FRIDAY', 'Vi');
define('_MB_WEBLOG_LANG_SATURDAY', 'Sa');

define('_MB_WEBLOG_LANG_TITLE', 'T�tulo');
define('_MB_WEBLOG_LANG_ENTRIES', 'Nuevas entradas');
define('_MB_WEBLOG_LANG_AUTHOR', 'Autor');
define('_MB_WEBLOG_LANG_COMMENTS', 'N� de comentarios');
define('_MB_WEBLOG_LANG_POSTED', 'Fecha de post'); 
define('_MB_WEBLOG_LANG_READS', 'N� de lectura');
define('_MB_WEBLOG_LANG_MOREWEBLOGS', 'A la p�gina principal de weBLog');
define('_MB_WEBLOG_LANG_TRACKBACKS', 'N� de Trackbacks');
define('_MB_WEBLOG_LANG_TB_TITLE', 'T�tulo');
define('_MB_WEBLOG_LANG_TB_WEBLOGTITLE', 'T�tulo del weBLog para trackback');
define('_MB_WEBLOG_LANG_TB_BLOGNAME', 'Nombre del weBLog');
define('_MB_WEBLOG_LANG_TB_POSTED', 'Fecha');
define('_MB_WEBLOG_LANG_COM_TITLE', 'Comentario');
define('_MB_WEBLOG_LANG_COM_UNAME', 'Usuario');
define('_MB_WEBLOG_LANG_COM_WEBLOGTITLE', 'T�tulo');
define('_MB_WEBLOG_LANG_COM_POSTED', 'Fecha');
define('_MB_WEBLOG_LANG_LINKS_FOR','Enlaces para %s');
define('_MB_WEBLOG_LANG_LINKS_FOR_EVERYONE','Enlaces');
define('_MB_WEBLOG_LANG_DENOTE_PERMIT','El acceso a las entradas marcadas con <span style=\'color:#ff0000;font-size:10px\'>*</span>  est� restringido.');

define('_MB_WEBLOG_USERS_SORT_READS', 'Total n� de lectura');
define('_MB_WEBLOG_USERS_SORT_UPDATE', 'Ultima actualizaci�n');

}
?>