<?php

//%%%%%%		Module Name phpBB  		%%%%%
//functions.php
define("_MD_ERROR","エラー");
define("_MD_NOPOSTS","投稿はありません");
define("_MD_GO","送信");

//index.php
define("_MD_FORUM","フォーラム");
define("_MD_WELCOME","%s フォーラムへようこそ");
define("_MD_TOPICS","スレッド");
define("_MD_POSTS","投稿");
define("_MD_LASTPOST","最終投稿");
define("_MD_MODERATOR","モデレータ");
define("_MD_NEWPOSTS","最終訪問日以降の新しい投稿があります");
define("_MD_NONEWPOSTS","最終訪問日以降の新しい投稿はありません");
define("_MD_PRIVATEFORUM","プライベート・フォーラム");
define("_MD_BY","投稿者："); // Posted by
define("_MD_TOSTART","興味のあるフォーラムへぜひご参加ください。");
define("_MD_TOTALTOPICSC","総スレッド数: ");
define("_MD_TOTALPOSTSC","総投稿数: ");
define("_MD_TIMENOW","現在の時刻: %s");
define("_MD_LASTVISIT","最終訪問日時: %s");
define("_MD_ADVSEARCH","条件検索");
define("_MD_POSTEDON","投稿日時: ");
define("_MD_SUBJECT","題名");

//page_header.php
define("_MD_MODERATEDBY","モデレータ ");
define("_MD_SEARCH","検索");
define("_MD_SEARCHRESULTS","検索結果");
define("_MD_FORUMINDEX","メイン");
define("_MD_POSTNEW","新規スレッド作成画面へ");
define("_MD_REGTOPOST","投稿するにはまず登録を");

//search.php
define("_MD_KEYWORDS","キーワード:");
define("_MD_SEARCHANY","指定したいくつかの条件で検索（デフォルト）");
define("_MD_SEARCHALL","指定した全ての条件で検索");
define("_MD_SEARCHALLFORUMS","全てのフォーラムを検索");
define("_MD_FORUMC","フォーラム：");
define("_MD_AUTHORC","投稿者：");
define("_MD_SORTBY","ソート順:");
define("_MD_DATE","日時");
define("_MD_TOPIC","スレッド");
define("_MD_USERNAME","ユーザ名");
define("_MD_SEARCHIN","検索対象：");
define("_MD_BODY","本文");
define("_MD_NOMATCH","検索条件に一致するデータは見つかりませんでした");
define("_MD_POSTTIME","投稿日時");

//viewforum.php
define("_MD_REPLIES","返信");
define("_MD_POSTER","投稿者");
define("_MD_VIEWS","閲覧");
define("_MD_MORETHAN","人気スレッド！");//New posts [ Popular ]
define("_MD_MORETHAN2","人気スレッド！");
define("_MD_TOPICLOCKED","ロックされたスレッド");
define("_MD_LEGEND","Legend"); //[MADA]
define("_MD_NEXTPAGE","次のページ");
define("_MD_SORTEDBY","ソート順:");
define("_MD_TOPICTITLE","スレッドタイトル");
define("_MD_NUMBERREPLIES","返信");
define("_MD_TOPICPOSTER","投稿者");
define("_MD_LASTPOSTTIME","投稿日時");
define("_MD_ASCENDING","昇順");
define("_MD_DESCENDING","降順");
define("_MD_FROMLASTDAYS","過去%s日分");
define("_MD_THELASTYEAR","過去1年分");
define("_MD_BEGINNING","全て");

//viewtopic.php
define("_MD_AUTHOR","投稿者");
define("_MD_LOCKTOPIC","このスレッドをロック");
define("_MD_UNLOCKTOPIC","このスレッドのロックを解除");

define("_MD_MOVETOPIC","このスレッドを移動");
define("_MD_DELETETOPIC","このスレッドを削除");
define("_MD_TOP","トップ");
define("_MD_PARENT","親スレッド");
define("_MD_PREVTOPIC","前のトピック");
define("_MD_NEXTTOPIC","次のトピック");

//forumform.inc
define("_MD_ABOUTPOST","投稿に関して");
define("_MD_ANONCANPOST","このフォーラムでは全ての訪問者の方による投稿が許可されています。");
define("_MD_PRIVATE","<b>プライベート・フォーラム</b>.<br />アクセス許可されたユーザのみ投稿が可能です。");
define("_MD_REGCANPOST","このフォーラムで投稿が行えるのはメンバー登録者の方のみです。");
define("_MD_MODSCANPOST","このフォーラムで投稿が行えるのは管理者／モデレータのみです。");
define("_MD_PREVPAGE","前のページ");
define("_MD_QUOTE","引用");

// ERROR messages
define("_MD_ERRORFORUM","エラー: フォーラムが選択されていません");
define("_MD_ERRORPOST","エラー: 投稿が選択されていません");
define("_MD_NORIGHTTOPOST","このフォーラムに投稿することはできません。");
define("_MD_NORIGHTTOACCESS","このフォーラムへアクセスすることはできません。");
define("_MD_ERRORTOPIC","エラー: スレッドが選択されていません");
define("_MD_ERRORCONNECT","エラー: フォーラムデータベースにアクセスすることができませんでした。");
define("_MD_ERROREXIST","エラー: 選択されたフォーラムは見つかりませんでした。もう一度やり直してください。");
define("_MD_ERROROCCURED","エラーが発生しました。");
define("_MD_COULDNOTQUERY","フォーラムデータベースに問い合わせすることができませんでした。");
define("_MD_FORUMNOEXIST","エラー：選択されたフォーラム／スレッドが見つかりませんでした。もう一度やり直してください。");
define("_MD_USERNOEXIST","検索されたメンバーは見つかりませんでした。");
define("_MD_COULDNOTREMOVE","エラー：データベースから投稿文を削除することができませんでした。");
define("_MD_COULDNOTREMOVETXT","エラー：投稿文を削除することができませんでした。");

//reply.php
define("_MD_ON","投稿日時："); //Posted on
define("_MD_USERWROTE","%sさんは書きました："); // %s is username

//post.php
define("_MD_EDITNOTALLOWED","投稿文を編集することはできません。");
define("_MD_EDITEDBY","編集ログ：");
define("_MD_ANONNOTALLOWED","ゲスト訪問者の方による投稿は許可されていません。<br />投稿をご希望の方はメンバー登録をして下さい。");
define("_MD_THANKSSUBMIT","投稿ありがとうございました。");
define("_MD_REPLYPOSTED","返信が投稿されました。");
define("_MD_HELLO","こんにちは %s さん、");
define("_MD_URRECEIVING","%s フォーラムへ投稿したメッセージに対し返信がありましたのでお知らせします。"); // %s はあなたのサイト名
//＊　上記の和訳文はmailで使用する為、文字化け対策をしていない場合は文字化けします。
define("_MD_CLICKBELOW","投稿を見るには下記リンクをクリックしてください。");

//forumform.inc
define("_MD_YOURNAME","ユーザ名:");
define("_MD_LOGOUT","ログアウト");
define("_MD_REGISTER","登録");
define("_MD_SUBJECTC","題名：");
define("_MD_MESSAGEICON","メッセージアイコン:");
define("_MD_MESSAGEC","メッセージ:");
define("_MD_ALLOWEDHTML","使用可能なHTMLタグ :");
define("_MD_OPTIONS","オプション:");
define("_MD_POSTANONLY","匿名で投稿する");
define("_MD_DISABLESMILEY","顔アイコンを無効にする");
define("_MD_DISABLEHTML","HTMLタグを無効にする");
define("_MD_NEWPOSTNOTIFY", "このスレッドにおいて新規投稿があった場合に通知する");
define("_MD_ATTACHSIG","署名を付ける");
define("_MD_POST","投稿する");
define("_MD_SUBMIT","確定");
define("_MD_CANCELPOST","投稿中止");

// forumuserpost.php
define("_MD_ADD","追加");
define("_MD_REPLY","この投稿に返信する");

// topicmanager.php
define("_MD_YANTMOTFTYCPTF","この機能を使用できるのはモデレータ／管理者のみです。");
define("_MD_TTHBRFTD","スレッドをデータベースから削除しました。");
define("_MD_RETURNTOTHEFORUM","フォーラムへ戻る");
define("_MD_RTTFI","フォーラムメインへ戻る");
define("_MD_EPGBATA","エラー ： もう一度やり直してください。");
define("_MD_TTHBM","スレッドを移動しました。");
define("_MD_VTUT","スレッドを見る");
define("_MD_TTHBL","スレッドをロックしました。");

define("_MD_VIEWTHETOPIC","スレッドを見る");
define("_MD_TTHBU","スレッドのロックを解除しました。");
define("_MD_OYPTDBATBOTFTTY","削除ボタンを押すと、選択したスレッドおよびそのスレッドに関連する投稿文を削除すます。");
define("_MD_OYPTMBATBOTFTTY","移動ボタンを押すと、選択したスレッドおよびそのスレッドに関連する投稿文を選択したフォーラムへ移動します。");
define("_MD_OYPTLBATBOTFTTY","ロックボタンを押すと、選択したスレッドをロックします（スレッド内での新規投稿を受け付けない）。スレッドのロックはいつでも解除することができます。");
define("_MD_OYPTUBATBOTFTTY","ロックボタンを押すと、選択したスレッドのロックを解除します。");
define("_MD_MOVETOPICTO","移動するスレッド:");
define("_MD_NOFORUMINDB","データベースにフォーラムはありません");
define("_MD_DATABASEERROR","データベースエラー");
define("_MD_DELTOPIC","スレッドを削除する");
define("_MD_TOPICSTICKY","このスレッドは固定されています");
define("_MD_STICKYTOPIC","このスレッドを固定する");
define("_MD_UNSTICKYTOPIC","このスレッドの固定を解除する");
define("_MD_TTHBS","スレッドを固定しました");
define("_MD_TTHBUS","スレッドの固定を解除しました");
define("_MD_OYPTSBATBOTFTTY","スレッド固定ボタンを押すと、選択したスレッドを固定します（常にフォーラム最上部に表示）。スレッドの固定はいつでも解除することができます。");
define("_MD_OYPTTBATBOTFTTY","スレッド固定ボタンを押すと、選択したスレッドの固定を解除します。スレッドはいつでも再度固定することができます。");

// delete.php
define("_MD_DELNOTALLOWED","この投稿を削除する権限がありません。");
define("_MD_AREUSUREDEL","この投稿およびこの投稿に対する返信を全て削除してもいいですか？");
define("_MD_POSTSDELETED","選択した投稿を削除しました。");

// definitions moved from global.
define("_MD_THREAD","スレッド");
define("_MD_FROM","居住地");
define("_MD_JOINED","登録日");
define("_MD_ONLINE","オンライン");
define("_MD_BOTTOM","下へ");

?>