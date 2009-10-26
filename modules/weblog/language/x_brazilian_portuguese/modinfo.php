<?php
/**
 * $Id: modinfo.php,v 1.2 2005/05/06 18:53:29 tohokuaiki Exp $
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
 *
 * Translation for Brazilian Portuguese by giba@foxbrasil.com.br
 * 
 */

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_MI_LOADED' ) ) {

define( 'WEBLOG_MI_LOADED' , 1 ) ;




define('_MI_WEBLOG_NAME','weBLog');
define('_MI_WEBLOG_DESC','weBLogging/Sistema de Jornal');
define('_MI_WEBLOG_SMNAME1','Meu weBLog');
define('_MI_WEBLOG_SMNAME2','Enviar');
define('_MI_WEBLOG_SMNAME3','Arquivos');

// submenu name
define('_MI_WEBLOG_DBMANAGER', 'Database'); //eng
define('_MI_WEBLOG_CATMANAGER', 'Categories'); //eng
define('_MI_WEBLOG_PRIVMANAGER', 'Privileges'); //eng
define('_MI_WEBLOG_MYBLOCKSADMIN', 'Blocks and Groups'); //eng

define('_MI_WEBLOG_NOTIFY','Este weBLog');
define('_MI_WEBLOG_NOTIFYDSC','Quando algo acontecer a este weBLog');
define('_MI_WEBLOG_ENTRY_NOTIFY','Esta entrada no weBlog');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','Quando algo acontecer a esta entrada do weBLog');

define('_MI_WEBLOG_ADD_NOTIFY','Novo Envio');
define('_MI_WEBLOG_ADD_NOTIFYCAP','Notificar-me quando um novo envio ocorrer');
define('_MI_WEBLOG_ADD_NOTIFYDSC','Quando um novo envio for feito');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Novo weBLog Enviado');

define('_MI_WEBLOG_ENTRY_COMMENT','Adicionar Comentбrios');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Notificar-me quando um novo comentбrio for postado para este item.');

define('_MI_WEBLOG_RECENT_BNAME1','Recentes weBLogs');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','Recente weBLog Digitado');
define('_MI_WEBLOG_TOP_WEBLOGS','Top weBLogs');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','Top weBLogs');

// Config Settings
define('_MI_WEBLOG_NUMPERPAGE','Nъmeros de entradas por pбgina');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Format de la date');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Formato da Hora');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Formato da data no recente weBLog\'s');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Mostra avatar dos usuбrios que realizaram as entradas');
define('_MI_WEBLOG_SHOWAVATARDSC','');
define('_MI_WEBLOG_ALIGNAVATAR','Alinhar avatar');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','Tamanho minimo de digitaзгo (0=tamanho nгo serб verificado)');
define('_MI_WEBLOG_MINENTRYSIZEDSC','');
define('_MI_WEBLOG_IMGURL', 'Image URL'); //eng
define('_MI_WEBLOG_IMGURLDSC', 'URL of image that is shown or indicated in printer-friendly page and RSS');//eng
define('_MI_WEBLOG_OPDOHTML', 'Option/Disable HTML') ;//eng
define('_MI_WEBLOG_OPDOHTMLDSC', 'If you want to be checked disable HTML Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPPRIVATE', 'Option/Private') ;//eng
define('_MI_WEBLOG_OPPRIVATEDSC', 'If you want to be checked Private Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPUPDATEPING', 'Option/Update ping') ;//eng
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'If you want to be checked Update ping Option as default , set "Yes".') ;//eng

define('_MI_WEBLOG_UPDATE_READS_WHEN','Atualizar a contagem de lidos quando');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','Quando observar os detalhes');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','Quando usuбrio ver o weBLog');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','Quando ver a listagem das entradas');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Mostra as entradas realizados no weBLog');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Enviar um novo weBLog');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Mostrar detalhes sobre um weBLog');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','RSS alimenta as entradas no weBlog');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Pбgina de Impressгo');
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Arquivos mensais');

define('_MI_WEBLOG_EDITORHEIGHT','Altura da caixa do editor (linhas)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Largura da caixa do editor (caracteres)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN',"Permitir que somente administradores possam postar?");
define('_MI_WEBLOG_ONLYADMINDSC','Ajustando em nгo permite que todos postem, quando colocar SIM significaria que somente os administradores do mуdulo podem postar.');

// wellwine for read cookie
define('_MI_WEBLOG_EXPIRATION','Prazo de Expiraзгo de quantidade de leituras (segundo)');
define('_MI_WEBLOG_EXPIRATIONDSC','Defina a expiraзгo do tempo de cada contagem lida blog. A contagem serб incrementada se passar este perнodo desde a ъltima visгo.');
define('_MI_WEBLOG_RSSSHOW','Mostre um icone linkado para o alimentador RSS');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','O nъmero de entradas para ser alimentado no RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

//define('_MI_WEBLOG_NUMINRECENTBLOCK','Nъmero de entradas para ser mostrada no bloco recentes');
//define('_MI_WEBLOG_NUMINRECENTBLOCKDSC','');
}
?>