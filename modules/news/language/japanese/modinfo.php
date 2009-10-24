<?php
// Module Info

// The name of this module
define("_MI_NEWS_NAME","ニュース");

// A brief description of this module
define("_MI_NEWS_DESC","ユーザが自由にコメントできる、スラッシュドット風のニュース記事システムを構築します");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWS_BNAME1","ニューストピックブロック");
define("_MI_NEWS_BNAME3","本日のトップニュースブロック");
define("_MI_NEWS_BNAME4","トップニュースブロック");
define("_MI_NEWS_BNAME5","最新ニュースブロック");

define("_MI_NEWS_SMNAME1","ニュース投稿");
define("_MI_NEWS_SMNAME2","アーカイブ");

//define("_MI_NEWS_ADMENU1","一般設定");
define("_MI_NEWS_ADMENU2","トピック管理");
define("_MI_NEWS_ADMENU3","ニュース記事の投稿 / 編集");

// Title of config items
define("_MI_STORYHOME", "トップページに掲載する記事数");
define("_MI_NOTIFYSUBMIT", "新規投稿の際にメールで知らせる");
define("_MI_DISPLAYNAV", "ナビゲーションボックスを表示する");
define('_MI_ANONPOST','匿名ユーザによるニュース記事の投稿を許可する');
define('_MI_AUTOAPPROVE','管理者の介在しない新規ニュース記事の自動承認');

// Description of each config items
define("_MI_STORYHOMEDSC", "トップページに表示する記事の数を指定してください。");
define("_MI_NOTIFYSUBMITDSC", "新規投稿があった時にお知らせメールをウェブマスターに送信するには「はい」を選択してください。");
define("_MI_DISPLAYNAVDSC", "カテゴリを選択するナビゲーションボックスを記事の上部に表示するには「はい」を選択してください。");
define('_MI_AUTOAPPROVEDSC', '管理者の承認操作なしに新規ニュース記事の承認を行う場合は「はい」を選択してください。');

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'モジュール全体');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'ニュースモジュール全体における通知オプション');

define('_MI_NEWS_STORY_NOTIFY', '表示中のニュース記事');
define('_MI_NEWS_STORY_NOTIFYDSC', '表示中のニュース記事に対する通知オプション');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', '新規トピック');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', '新規トピックが作成された場合に通知する');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', '新規トピックが作成された場合に通知する');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規トピックが作成されました');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', '新規ニュース記事投稿');       
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', '新規ニュースの投稿があった場合に通知する');                           
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', '新規ニュースの投稿があった場合に通知する');                
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規ニュースの投稿がありました');                              

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', '新規ニュース記事掲載');       
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', '新規ニュース記事が掲載された場合に通知する');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', '新規ニュース記事が掲載された場合に通知する');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規ニュースが掲載されました');                              

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'ニュース記事の承認');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'このニュース記事が承認された場合に通知する');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'このニュース記事が承認された場合に通知する');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: ニュース記事が承認されました');


?>