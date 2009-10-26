<?php
// ------------------------------------------------------------------------- //
//       Italian Translation by Marco Ragogna (m.ragogna@xoopsit.net)        //
//        webmasters of XOOPS :: Italian Corner  (www.xoopsit.net)           //
//              the XOOPS Official Italian Support Site                      //
// ------------------------------------------------------------------------- //
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'WEBLOG_MI_LOADED' ) ) {

define( 'WEBLOG_MI_LOADED' , 1 ) ;

define('_MI_WEBLOG_NAME','weBLog');
define('_MI_WEBLOG_DESC','weBLogging/Giornale online');
define('_MI_WEBLOG_SMNAME1','I miei messaggi');
define('_MI_WEBLOG_SMNAME2','Messaggio');
define('_MI_WEBLOG_SMNAME3','Archivio');

// submenu name
define('_MI_WEBLOG_DBMANAGER', 'Database');
define('_MI_WEBLOG_CATMANAGER', 'Categorie');
define('_MI_WEBLOG_PRIVMANAGER', 'Permessi');

define('_MI_WEBLOG_NOTIFY','Questo weBLog');
define('_MI_WEBLOG_NOTIFYDSC','Quando qualcosa accade in questo weBLog');
define('_MI_WEBLOG_ENTRY_NOTIFY','Il messaggio di questo weBLog');
define('_MI_WEBLOG_ENTRY_NOTIFYDSC','Quando qualcosa accade in questo messaggio del weBLog');

define('_MI_WEBLOG_ADD_NOTIFY','Nuovo messaggio');
define('_MI_WEBLOG_ADD_NOTIFYCAP','Inviami una notifica qualora vengano inviati nuovi messaggi');
define('_MI_WEBLOG_ADD_NOTIFYDSC','Quando viene inviato un nuovo messaggio');
define('_MI_WEBLOG_ADD_NOTIFYSBJ','Inviato un nuovo messaggio nel weBLog');

define('_MI_WEBLOG_ENTRY_COMMENT','Commento aggiunto');
define('_MI_WEBLOG_ENTRY_COMMENTDSC','Inviami una notifica quando viene inviato un nuovo commento per questo elemento.');

define('_MI_WEBLOG_RECENT_BNAME1','weBLogs recenti');
define('_MI_WEBLOG_RECENT_BNAME1_DESC','Aggiunte recenti al weBLog');
define('_MI_WEBLOG_TOP_WEBLOGS','I piú attivi dei weBLogs');
define('_MI_WEBLOG_TOP_WEBLOGS_DESC','I piú attivi dei weBLogs');

// Config Settings
define('_MI_WEBLOG_NUMPERPAGE','Numero di messaggi per pagina');
define('_MI_WEBLOG_NUMPERPAGEDSC','');
define('_MI_WEBLOG_DATEFORMAT','Formato data');
define('_MI_WEBLOG_DATEFORMATDSC','');
define('_MI_WEBLOG_TIMEFORMAT','Formato ora');
define('_MI_WEBLOG_TIMEFORMATDSC','');
define('_MI_WEBLOG_RECENT_DATEFORMAT','Formato data nei weBLog recenti\'s');
define('_MI_WEBLOG_RECENT_DATEFORMATDSC','');
define('_MI_WEBLOG_SHOWAVATAR','Mostra Avatar utente per ogni messaggi');
define('_MI_WEBLOG_SHOWAVATARDSC','');
define('_MI_WEBLOG_ALIGNAVATAR','Allinea avatar');
define('_MI_WEBLOG_ALIGNAVATARDSC','');
define('_MI_WEBLOG_MINENTRYSIZE','Dimensione minima del messaggio (0=controllo dimensione disabilitato)');
define('_MI_WEBLOG_MINENTRYSIZEDSC','');
define('_MI_WEBLOG_IMGURL', 'Indirizzo URL Immagine');
define('_MI_WEBLOG_IMGURLDSC', 'Indirizzo URL dell immagine mostrata nelle pagine adattate alla stampa e nei feed RSS');
define('_MI_WEBLOG_OPDOHTML', 'Option/Disable HTML') ;//eng
define('_MI_WEBLOG_OPDOHTMLDSC', 'If you want to be checked disable HTML Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPPRIVATE', 'Option/Private') ;//eng
define('_MI_WEBLOG_OPPRIVATEDSC', 'If you want to be checked Private Option as default , set "Yes".') ;//eng
define('_MI_WEBLOG_OPUPDATEPING', 'Option/Update ping') ;//eng
define('_MI_WEBLOG_OPUPDATEPINGDSC', 'If you want to be checked Update ping Option as default , set "Yes".') ;//eng

define('_MI_WEBLOG_UPDATE_READS_WHEN','Aggiorna il contatore delle letture quando');
define('_MI_WEBLOG_UPDATE_READS_WHENDSC','');
define('_MI_WEBLOG_UPDATE_READS_WHEN1','Quando vengono mostrati i dettagli');
define('_MI_WEBLOG_UPDATE_READS_WHEN2','Quando vengono mostrati i messaggi degli utenti');
define('_MI_WEBLOG_UPDATE_READS_WHEN3','Quando vengono mostrati messaggi in qualsiasi elenco');

define('_MI_WEBLOG_TEMPLATE_ENTRIESDSC','Visualizza i messaggio per il weBLog');
define('_MI_WEBLOG_TEMPLATE_POSTDSC','Invia un nuovo messaggio nel weBLog');
define('_MI_WEBLOG_TEMPLATE_DETAILSDSC','Mostra i dettagli di un messaggio del weBLog');
define('_MI_WEBLOG_TEMPLATE_RSSFEEDDSC','Fornisci i dati RSS dei messaggi del weBLog');
define('_MI_WEBLOG_TEMPLATE_PRINTDSC','Pagina adatta alla Stampa');
define('_MI_WEBLOG_TEMPLATE_ARCHIVEDSC','Archivio Mensile');

define('_MI_WEBLOG_EDITORHEIGHT','Altezza dell\'editor (linee)');
define('_MI_WEBLOG_EDITORHEIGHTDSC','');
define('_MI_WEBLOG_EDITORWIDTH','Larghezza dell\'editor (caratteri)');
define('_MI_WEBLOG_EDITORWIDTHDSC','');
define('_MI_WEBLOG_ONLYADMIN',"Consenti solo agli amministratori del modulo di inviare messaggi?");
define('_MI_WEBLOG_ONLYADMINDSC','Impostare a no consentirá a tutti gli utenti registrati di inviare messaggi, mentre Sí significa che solo gli amministratori del modulo possono postare.');

// wellwine for read cookie
define('_MI_WEBLOG_EXPIRATION','Il conteggio scade (secondi)');
define('_MI_WEBLOG_EXPIRATIONDSC','Definisci il tempo di scadenza per ciascun contatore. Il conteggio sarà incrementato se passerà il periodo durante l ultima visita.');
define('_MI_WEBLOG_RSSSHOW','Mostra un icona di link al Feed RSS');
define('_MI_WEBLOG_RSSSHOWDSC','');
define('_MI_WEBLOG_RSSMAX','Il numero di elementi da inserire nel Feed RSS');
define('_MI_WEBLOG_RSSMAXDSC','');

//define('_MI_WEBLOG_NUMINRECENTBLOCK','Numero di messaggi da mostrare nel blocco dei recenti weBLog');
//define('_MI_WEBLOG_NUMINRECENTBLOCKDSC','');

}
?>