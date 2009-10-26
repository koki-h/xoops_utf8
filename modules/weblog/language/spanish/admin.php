<?php
/**
 * $Id: admin.php,v 1.3 2005/09/04 03:11:41 tohokuaiki Exp $
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
 * Foundation, Inc., 59 Temple Place
 */
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_AM_LOADED' ) ) {

global $xoopsModule ;

define( 'WEBLOG_AM_LOADED' , 1 ) ;

define('_AM_WEBLOG_CONFIG', $xoopsModule->name().' Configuraci�n');
define('_AM_WEBLOG_PREFERENCES', _PREFERENCES);
define('_AM_WEBLOG_PREFERENCESDSC', 'Configuraci�n General.');
define('_AM_WEBLOG_GO', _GO);
define('_AM_WEBLOG_CANCEL', _CANCEL);
define('_AM_WEBLOG_DELETE', _DELETE);
define('_AM_WEBLOG_MODIFY', 'Modificar');
define('_AM_WEBLOG_TITLE', 'T�tulo');

define('_AM_WEBLOG_DBMANAGER', 'Control de Base de Datos '); 
define('_AM_WEBLOG_DBMANAGERDSC', 'Gesti�n de Base de Datos (Database) al actualizar el m�dulo.');
define('_AM_WEBLOG_TABLE', 'Tabla');
define('_AM_WEBLOG_SYNCCOMMENTS', 'Ajuste del  n� de comentarios');
define('_AM_WEBLOG_SYNCCOMMENTSDSC', 'Puede rectificar el n� de comentarios de cada entrada si lo considera err�neo.<br />El error puede generar por el posible defecto del sistema de  contador en la  versi�n1.02 y  sus anteriores .');
define('_AM_WEBLOG_CHECKTABLE', 'Comprobaci�n de  la estructura de tablas.');
define('_AM_WEBLOG_CHECKTABLEDSC', 'Puede verificar y adaptar nuevas tablas y columnas y sus n�meros en su Base de Datos cuando cambia de versi�n.');
define('_AM_WEBLOG_CREATETABLE', 'Crear una nueva tabla   \'%s\'');
define('_AM_WEBLOG_CREATETABLEDSC', 'Crear una nueva tabla denominada  \'%s\'');

define('_AM_WEBLOG_ADD', 'No existe  Columna  \'%s\' ');
define('_AM_WEBLOG_ADDDSC', 'Columna \'<b>%s</b>\'  es necesaria para esta versi�n y no encuentra en la tabla de Base de Datos. <br />Pulse el bot�n para a�adirla.<br />Se recomienda, antes de la operaci�n, hacer la copia de seguridad (backup) .');
define('_AM_WEBLOG_NOADD', '�Tabla \'%s\' est� lista ya!');
define('_AM_WEBLOG_NOADDDSC', 'Puede usar sin problema esta tabla \'%s\' en esta versi�n.');
define('_AM_WEBLOG_DBUPDATED', '�Base de Datos actualizada!');
define('_AM_WEBLOG_UNSUPPORTED', 'Error : Esta versi�n no dispone de la funci�n requerida. ');
define('_AM_WEBLOG_TABLEADDED', '�Nueva tabla creada!');
define('_AM_WEBLOG_TABLENOTADDED', 'Error : No ha sido posible crear Tabla : %s');
define('_AM_WEBLOG_COLADDED', '�Nueva columna a�adida!');
define('_AM_WEBLOG_COLNOTADDED', 'Error: No ha sido posible crear Columna : %s');

define('_AM_WEBLOG_CATMANAGER', 'Categor�as');
define('_AM_WEBLOG_CATMANAGERDSC', 'A�adir / Modificar / Eliminar categor�as.');
define('_AM_WEBLOG_ADDCAT', 'A�adir una nueva categor�a');
define('_AM_WEBLOG_ADDMAINCAT', 'A�adir categor�a principal');
define('_AM_WEBLOG_ADDSUBCAT', 'A�adir una nueva subcategor�a');
define('_AM_WEBLOG_CAT', 'Categor�a');
define('_AM_WEBLOG_IMGURL', 'URL de la imagen');
define('_AM_WEBLOG_ERRORTITLE', '�Error: Escriba un t�tulo!');
define('_AM_WEBLOG_NEWCATADDED', '�Nueva categor�a a�adida!');
define('_AM_WEBLOG_CATNOTADDED', '�Error : No ha podido a�adir categor�as!');
define('_AM_WEBLOG_CATMODED', '�Categor�a modificada satisfactoriamente!');
define('_AM_WEBLOG_CATNOTMODED', '�Error : No ha podido modificar la categor�a!');
define('_AM_WEBLOG_MODCAT', 'Modificar categor�a');
define('_AM_WEBLOG_PCAT', 'Categor�a primaria');
define('_AM_WEBLOG_CHOSECAT', 'Categor�a seleccionada');
define('_AM_WEBLOG_DELCONFIRM', '�Quiere en verdad eliminar esta categor�a \'%s\'  y sus secundarias ?<br />Atenci�n: con esta operaci�n, borrar�  las entradas de todas las categor�as.');
define('_AM_WEBLOG_CATDELETED', '�Categor�a eliminada!');
define('_AM_WEBLOG_CAT_GPERM', 'Grupo de usuarios que pueden escribir posts en esta categor�a'); 
define('_AM_WEBLOG_CAT_OPERATE', 'Operar');
define('_AM_WEBLOG_CAT_SETALL', ' Control global de cada grupo para hacer posts en cualquier categor�a. ');


define('_AM_WEBLOG_MYBLOCKSADMIN', 'Control de bloques y autorizaci�n de cada grupo');
define('_AM_WEBLOG_MYBLOCKSADMINDSC', 'Puede aqu� gestionar  sobre cada bloque y  autorizar el acceso a cada grupo.');
define('_AM_WEBLOG_TEMPLATE_MANEGER', 'Template'); // =Modelo de dise�o (ficheros de html)
define('_AM_WEBLOG_TEMPLATE_MANEGERDSC', 'Acceso directo a Template');//Shortcut to Template Manager en ingl�s

define('_AM_WEBLOG_PRIVMANAGER_WEBLOG', 'Control de autorizaci�n (Sistema Convencional de weBLog )');// weBLog Simple System en ingl�s
define('_AM_WEBLOG_PRIVMANAGER_WEBLOG_DSC', 'Condiciones para escribir posts.');
define('_AM_WEBLOG_PRIVMANAGER_WEBLOG_CAUTION', 'Esta configuraci�n es v�lida cuando tiene elegido el Sistema Convencional de weBLog  para el control de autorizaci�n.');
define('_AM_WEBLOG_PRIVMANAGER_XOOPS', 'Control de autorizaci�n  (Sistema Standard de XOOPS)'); //XOOPS standard system
define('_AM_WEBLOG_PRIVMANAGER_XOOPS_DSC', 'Condiciones para escribir y leer posts.');
define('_AM_WEBLOG_PRIVMANAGER_XOOPS_CAUTION', 'Esta configraci�n es v�lida cuando tiene elegido el Sitema B�sico de XOOPS para el control de autorizaci�n.');
define('_AM_WEBLOG_ADDPRIV', _ADD);
define('_AM_WEBLOG_DELETEPRIV', _DELETE);
define('_AM_WEBLOG_NONPRIV', 'No autorizado para escribir');
define('_AM_WEBLOG_PRIV', 'Autorizado para escribir');

define('_AM_WEBLOG_GROUPPERM_GLOBAL' , 'Control de autorizaci�n para cada grupo' );
define('_AM_WEBLOG_GROUPPERM_GLOBALDESC' , 'Aqu� puede condicionar autorizaci�n de cada grupo . <br />�Ojo! la autorizaci�n de escribir/reescribir/borrar posts para los usuarios an�nimos queda nula aunque la d� marcada.' );
define('_AM_WEBLOG_GPERMUPDATED' , '�Se ha actualizado la autorizaci�n de cada grupo!' );
define('_AM_WEBLOG_PRIV_EDIT' , 'Autorizaci�n de escribir/reescribir/borrar posts') ;
define('_AM_WEBLOG_PRIV_READINDEX' , 'Autorizaci�n de leer la lista ( index/rss/rdf )') ;
define('_AM_WEBLOG_PRIV_READDETAIL' , 'Autorizaci�n de leer cada entrada (details.php)') ;

}
?>