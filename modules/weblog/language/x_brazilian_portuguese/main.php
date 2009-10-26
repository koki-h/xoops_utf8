<?php
/**
 * $Id: main.php,v 1.3 2005/05/06 18:53:29 tohokuaiki Exp $
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
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_BL_LOADED' ) ) {

define( 'WEBLOG_BL_LOADED' , 1 ) ;

// Basic's
define('_BL_DISABLEHTML', _DISABLEHTML); //eng
define('_BL_TITLE', 'Titulo');
define('_BL_CATEGORY', 'Category'); //eng
define('_BL_CATEGORIES', 'Categories'); //eng
define('_BL_MAIN', 'Main'); //eng
define('_BL_CONTENTS','Conteúdo');
define('_BL_POST','Enviar');
define('_BL_PREVIEW',_PREVIEW);
define('_BL_PRIVATE','Privado');
define('_BL_OPTIONS','Opções');
define('_BL_COMMENTS','comentários');
define('_BL_READ_USERS_BLOG',"Lido %s's weBLog");
define('_BL_EDIT',_EDITAR);
define('_BL_READ','Ler');
define('_BL_DELETE',_DELETE);
define('_BL_BLOG','weBLog');
define('_BL_GATHERING','Recolhendo suas entradas do weBLog agora!');
define('_BL_GATHERING_SORRY','Desculpe, Meu weBLog é para usuários registados somente.');
define('_BL_PRIVATE_NOTEXIST_SORRY', 'Desculpe, A entrada que você pediu é confidencial ou não existe.');
define('_BL_ENTRY_POSTED','A entrada do weBLog foi aceita!');
define('_BL_MOST_RECENT','Melhores entradas recentes');
define('_BL_ENTRIES_FOR','Digitadas por %s');
define('_BL_ENTRY_FOR','Digitado por %s');
define('_BL_NUMBER_OF_READS','%d lidos');
define('_BL_NUMBER_OF_TRACKBACKS','Trackback');//eng
define('_BL_CONFIRM_DELETE',"Voce tem certeza que deseja remover este WeBLog '%s'?");
define('_BL_BLOG_DELETED','weBLog selecionado foi apagado');
define('_BL_BLOG_NOT_DELETED','weBLog selecionado não foi apagado. Não tem os direitros suficientes?');
define('_BL_WHOS_BLOG',"%s's weBLog");
define('_BL_ANON_CANNOT_POST_SORRY','Desculpe, Somente os usuários registados podem afixar entradas do weBLog.');
define('_BL_DELETE_BUTTON',_DELETE);
define('_BL_PREVIEW_BUTTON',_PREVIEW);
define('_BL_POST_BUTTON','Postar');
define('_BL_POST_TOO_SMALL','As entradas devem possuir ao menos %d caracteres, está com %d. Por favor, digite mais conteúdo!');
define('_BL_POST_MUST_BE','A digitação de ter ao menos <b>%d</b> caracteres');
define('_BL_CONTINUE_EDITING','Continua Editando');
define('_BL_RSS_RECENT', 'Syndicate weBLogs');
define('_BL_RSS_RECENT_FOR', "Syndicate %s's entries");
define('_BL_UPDATEPING','Send update ping'); //eng
define('_BL_TRACKBACK','Trackback URL'); //eng
define('_BL_TRACKBACK_DSC','Please fill trackback URLs set apart by new line'); //eng
define('_BL_TRACKBACK_ADMIN','Recieved Trackback'); //eng
define('_BL_TRACKBACK_DELETE',_DELETE); //eng

// %s is your site name
define('_BL_INTARTICLE','Blog interessante em %s');
define('_BL_INTARTFOUND','Aqui está um blog interessane que encontrei %s');

define('_BL_PRINTERPAGE','Página para impressão');
define('_BL_SENDSTORY','Envie este Blog para um amigo');

define('_BL_POSTED', 'Enviado');
define('_BL_AUTHOR', 'Autor');
// %s is your site name
define('_BL_COMESFROM', 'Este Blog vem de %s');
define('_BL_PARMALINK', 'A URL deste blog é');

// %s is count
define('_BL_THEREAREINTOTAL', '%s entradas no arquivo.');
define('_BL_NOARCHIVEDESC', 'No entries in archive.'); //eng
define('_BL_ARCHIVE', 'Arquivos');
define('_BL_ARCHIVE_FOR', "%s's arquivo");
define('_BL_READS', 'Lidos');
define('_BL_NEXT', 'Next entry'); //eng
define('_BL_PREV', 'Previous entry'); //eng

// %s is trackback
define('_BL_TRACKBACK_ANOUNCE' , 'Trackback URL of this entry'); //eng
define('_BL_TRACKBACK_TRANSMIT' , 'This entry trackbacks to below URL'); //eng
define('_BL_TRACKBACK_RECIEVED' , 'Trackbacks to this entry'); //eng

//define('_BL_T_COMMENTS', 'Comentários');
}
?>