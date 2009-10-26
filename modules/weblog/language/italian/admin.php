<?php
/**
 * $Id: admin.php,v 1.2 2005/05/06 18:53:29 tohokuaiki Exp $
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

define( 'WEBLOG_AM_LOADED' , 1 ) ;

 
define('_AM_WEBLOG_CONFIG', $xoopsModule->name().' Configurazione');
define('_AM_WEBLOG_PREFERENCES', PREFERENZE);
define('_AM_WEBLOG_PREFERENCESDSC', 'Configuratione Generale.');
define('_AM_WEBLOG_GO', VAI);
define('_AM_WEBLOG_CANCEL', CANCELLA);
define('_AM_WEBLOG_DELETE', ELIMINA);
define('_AM_WEBLOG_TITLE', 'WebLog');

define('_AM_WEBLOG_DBMANAGER', 'Database');
define('_AM_WEBLOG_DBMANAGERDSC', 'Utilitßþdi Database necessaria per aggiornare il modulo.');
define('_AM_WEBLOG_TABLE', 'Tabella');
define('_AM_WEBLOG_SYNCCOMMENTS', 'Sincronizza conteggio commenti');
define('_AM_WEBLOG_SYNCCOMMENTSDSC', 'Correggi conteggio se vedi un errore tipo # nei commenti di ciascun messaggio.<br />Questo potrebbe essere dovuto al fatto che la versione v1.02 o anteriori non avevano il conteggio settato in modo corretto.');
define('_AM_WEBLOG_CHECKTABLE', 'Controlla la struttura tabelle');
define('_AM_WEBLOG_CHECKTABLEDSC', 'Controlla le tabelle nel database. Il sistema di controllo potrebbe richiedere nuove tabelle e colonne.');
define('_AM_WEBLOG_CREATETABLE', 'Crea tabella \'%s\'');
define('_AM_WEBLOG_CREATETABLEDSC', 'Crea tabella chiamata \'%s\'');

define('_AM_WEBLOG_ADD', 'Colonna \'%s\' non trovata');
define('_AM_WEBLOG_ADDDSC', 'Colonna \'<b>%s</b>\' non e stata trovata nella tabella del database. Questa colonna e richiesta per la versione corrente.<br />Premi un bottone per aggiungere queste colonne alle tabelle esistenti.<br />Il Salvataggio Back Up del database e strettamente raccomandato.');
define('_AM_WEBLOG_NOADD', 'Tabella \'%s\' çþpronta!');
define('_AM_WEBLOG_NOADDDSC', 'Tabella \'%s\' çþpronta ad essere usata con la corrente versione. Non hai alcuna garanzia sullo stato delle tabelle.');
define('_AM_WEBLOG_DBUPDATED', 'Database aggiornato con successo!');
define('_AM_WEBLOG_UNSUPPORTED', 'Errore: richiesta non supportata');
define('_AM_WEBLOG_TABLEADDED', 'Nuove tabelle create con successo!');
define('_AM_WEBLOG_TABLENOTADDED', 'Errore: Le tabelle non possono essere create: %s');
define('_AM_WEBLOG_COLADDED', 'Nuova colonna aggiunta con successo!');
define('_AM_WEBLOG_COLNOTADDED', 'Errore: La Colonna non puñþessere aggiunta: %s');

define('_AM_WEBLOG_CATMANAGER', 'Categorie');
define('_AM_WEBLOG_CATMANAGERDSC', 'Aggiungi/Modifica/Cancella Categorie.');
define('_AM_WEBLOG_ADDCAT', 'Aggiungi Categorie');
define('_AM_WEBLOG_ADDMAINCAT', 'Aggiungi Categorie generali');
define('_AM_WEBLOG_ADDSUBCAT', 'Aggiungi Sotto Categorie');
define('_AM_WEBLOG_CAT', 'Categorie');
define('_AM_WEBLOG_IMGURL', 'Indirizzo Immagine');
define('_AM_WEBLOG_ERRORTITLE', 'ERRORE: Devi inserire un TITOLO!');
define('_AM_WEBLOG_NEWCATADDED', 'Nuova categoria aggiunta con successo!');
define('_AM_WEBLOG_CATNOTADDED', 'La categoria non puñþessere aggiunta!');
define('_AM_WEBLOG_CATMODED', 'Categoria modificata con successo!');
define('_AM_WEBLOG_CATNOTMODED', 'La Categoria non puñþessere modificata!');
define('_AM_WEBLOG_MODCAT', 'Modifica Categoria');
define('_AM_WEBLOG_PCAT', 'Categoria Superiore');
define('_AM_WEBLOG_CHOSECAT', 'Scegli Categoria');
define('_AM_WEBLOG_DELCONFIRM', 'Sei sicuro di voler cancellare la categoria \'%s\' e le sue sottocategorie?<br />Tutti gli ingressi contenuti in queste categorie saranno cancellati.');
define('_AM_WEBLOG_CATDELETED', 'Categoria cancellata con successo!');

define('_AM_WEBLOG_MYBLOCKSADMIN', 'Blocks and Groups'); // eng
define('_AM_WEBLOG_MYBLOCKSADMINDSC', 'Setting of Blocks and Groups'); // eng

define('_AM_WEBLOG_PRIVMANAGER', 'Privilegi');
define('_AM_WEBLOG_PRIVMANAGERDSC', 'Controllo Privilegi Messaggi.');
define('_AM_WEBLOG_ADDPRIV', _ADD);
define('_AM_WEBLOG_DELETEPRIV', _DELETE);
define('_AM_WEBLOG_NONPRIV', 'Non Privilegiati');
define('_AM_WEBLOG_PRIV', 'Privilegiati');

}
?>