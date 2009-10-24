<?php
// Module Info

// The name of this module
define("_MI_MYDOWNLOADS_NAME","ダウンロード");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","ユーザが自由にダウンロード情報の登録／評価を行えるセクションを作成します。");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","新着ダウンロード");
define("_MI_MYDOWNLOADS_BNAME2","トップダウンロード");

// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","登録する");
define("_MI_MYDOWNLOADS_SMNAME2","人気ダウンロード");
define("_MI_MYDOWNLOADS_SMNAME3","高評価ダウンロード");

define("_MI_MYDOWNLOADS_ADMENU2","ダウンロード情報の追加 / 編集");
define("_MI_MYDOWNLOADS_ADMENU3","新規投稿ダウンロード情報");
define("_MI_MYDOWNLOADS_ADMENU4","ファイル破損報告");
define("_MI_MYDOWNLOADS_ADMENU5","修正ダウンロード情報");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR','「人気ダウンロード」になるためのダウンロード数');
define('_MI_MYDOWNLOADS_NEWDLS','トップページの「新着ダウンロード」に表示する件数');
define('_MI_MYDOWNLOADS_PERPAGE','１ページ毎に表示するダウンロード情報の件数');
define('_MI_MYDOWNLOADS_USESHOTS','スクリーンショットを使用する');
define('_MI_MYDOWNLOADS_SHOTWIDTH','スクリーンショットの画像幅');
define('_MI_MYDOWNLOADS_CHECKHOST','ダイレクトリンクの禁止(leeching)');
define('_MI_MYDOWNLOADS_REFERERS','これらのサイトはファイルへのダイレクトリンクが可能<br />各サイトは | で分割');
define('_MI_MYDOWNLOADS_ANONPOST','匿名ユーザによるダウンロード項目の投稿を許可する');
define('_MI_MYDOWNLOADS_AUTOAPPROVE','管理者の介在しない新規ダウンロードの自動承認');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC', '「人気！」アイコンが表示されるためのダウンロード件数を指定してください。');
define('_MI_MYDOWNLOADS_NEWDLSDSC', 'トップページの「新着ダウンロード」ブロックに表示する最大件数を指定してください。');
define('_MI_MYDOWNLOADS_PERPAGEDSC', 'ダウンロード一覧表示で１ページあたりに表示する最大件数を指定してください。');
define('_MI_MYDOWNLOADS_USESHOTSDSC', 'ダウンロード情報にスクリーンショット画像を表示する場合は 「はい」 を選択してください。');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC', 'スクリーンショット画像の横幅の最大値を指定してください。');
define('_MI_MYDOWNLOADS_REFERERSDSC', 'ファイルへのダイレクトリンクを許可する外部サイトを列挙してください。');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC', '管理者の承認操作なしに新規ダウンロード登録の承認を行う場合は「はい」を選択してください。');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY', 'モジュール全体');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC', 'ダウンロードモジュール全体における通知オプション');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY', '表示中のカテゴリ');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC', '表示中のカテゴリに対する通知オプション');

define('_MI_MYDOWNLOADS_FILE_NOTIFY', '表示中のファイル情報');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC', '表示中のダウンロード情報に対する通知オプション');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY', '新規カテゴリ');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP', '新規カテゴリが作成された場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC', '新規カテゴリが作成された場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規カテゴリが作成されました（ダウンロード集）');

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY', 'ファイル修正のリクエスト');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP', 'ファイル修正のリクエストがあった場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC', 'ファイル修正のリクエストがあった場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: ファイル修正のリクエストがありました');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY', 'ファイル破損報告');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP', 'ファイル破損の報告があった場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC', 'ファイル破損の報告があった場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: ファイル破損の報告がありました');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY', '新規ファイル投稿');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP', '新規ファイルの投稿があった場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC', '新規ファイルの投稿があった場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規ファイルの投稿がありました');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY', '新規ファイル掲載');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP', '新規ファイルが掲載された場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC', '新規ファイルが掲載された場合に通知する');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規ファイルの投稿がありました');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY', '新規ファイル投稿（特定カテゴリ）');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'このカテゴリにおいて新規ファイルの投稿があった場合に通知する');   
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'このカテゴリにおいて新規ファイルの投稿があった場合に通知する');      
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規ファイルの投稿がありました'); 

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY', '新規ファイル掲載（特定カテゴリ）');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP', 'このカテゴリにおいて新規ファイルが掲載された場合に通知する');   
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC', 'このカテゴリにおいて新規ファイルが掲載された場合に通知する');      
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規ファイルが掲載されました'); 

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY', 'ファイル承認');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP', 'このファイルが承認された場合に通知する');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC', 'このファイルが承認された場合に通知する');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: ファイルが承認されました');

?>