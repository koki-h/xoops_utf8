<?php
// Module Info

// The name of this module
define("_MI_NEWBB_NAME","フォーラム");

// A brief description of this module
define("_MI_NEWBB_DESC","XOOPSフォーラムモジュール");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BNAME1","フォーラムでの最近の投稿");
define("_MI_NEWBB_BNAME2","フォーラムでの参照数の多い話題");
define("_MI_NEWBB_BNAME3","フォーラムでの発言数の多い話題");
define("_MI_NEWBB_BNAME4","プライベートフォーラムでの投稿");

define("_MI_NEWBB_ADMENU1","フォーラムの追加");
define("_MI_NEWBB_ADMENU2","フォーラムの編集");
define("_MI_NEWBB_ADMENU3","プライベートフォーラムの設定");
define("_MI_NEWBB_ADMENU4","スレッド投稿数の再集計");
define("_MI_NEWBB_ADMENU5","カテゴリの追加");
define("_MI_NEWBB_ADMENU6","カテゴリの編集");
define("_MI_NEWBB_ADMENU7","カテゴリーの削除");
define("_MI_NEWBB_ADMENU8","カテゴリの配置変更");

// RMV-NOTIFY
// Notification event descriptions and mail templates

define ('_MI_NEWBB_THREAD_NOTIFY', '表示中のスレッド'); 
define ('_MI_NEWBB_THREAD_NOTIFYDSC', '表示中のスレッドに対する通知オプション');

define ('_MI_NEWBB_FORUM_NOTIFY', '表示中のフォーラム'); 
define ('_MI_NEWBB_FORUM_NOTIFYDSC', '表示中のフォーラムに対する通知オプション');

define ('_MI_NEWBB_GLOBAL_NOTIFY', 'モジュール全体');
define ('_MI_NEWBB_GLOBAL_NOTIFYDSC', 'フォーラムモジュール全体における通知オプション');

define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', '返信の投稿');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', 'このスレッドにおいて返信が投稿された場合に通知する');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', 'このスレッドにおいて返信が投稿された場合に通知する');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: スレッド内に返信が投稿されました');

define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', '新規スレッド');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', 'このフォーラムにおいて新規スレッドの投稿があった場合に通知する');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', 'このフォーラムにおいて新規スレッドの投稿があった場合に通知する');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規スレッドが投稿されました');

define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', '新規フォーラム');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', '新規フォーラムが作成された場合に通知する');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', '新規フォーラムが作成された場合に通知する');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規フォーラムが作成されました');

define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', '新規投稿');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', '新規スレッドまたは返信の投稿があった場合に通知する');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', '新規スレッドまたは返信の投稿があった場合に通知する');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規投稿がありました');

define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', '新規投稿');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', 'このフォーラムにおいて新規投稿があった場合に通知する');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', 'このフォーラムにおいて新規投稿があった場合に通知する');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: フォーラムにて新規投稿がありました');

define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', '新規投稿（投稿文含む）');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', '新規スレッドまたは返信の投稿があった場合に通知する（投稿文付き）');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', '新規スレッドまたは返信の投稿があった場合に通知する（投稿文付き）');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規投稿（投稿文付き）');


?>