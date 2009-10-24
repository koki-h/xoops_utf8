<?php
if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

if (!function_exists('session_regenerate_id')) {
    if (!defined('XOOPS_SALT')) {
        define('XOOPS_SALT', substr(md5(XOOPS_DB_PREFIX . XOOPS_DB_USER . XOOPS_ROOT_PATH), 5, 8));
    }
    // session_regenerate_id compatible function for PHP Version< PHP4.3.2
    function session_regenerate_id() {
        srand(microtime() * 100000);
        $random = md5(XOOPS_SALT . uniqid(rand(), true));
        if (session_id($random)) {
           return true;
        } else {
           return false;
        }
    }
}

// Regenerate New Session ID & Delete OLD Session
function xoops_session_regenerate() {
    $old_sessid = session_id();
    session_regenerate_id();
    $new_sessid = session_id();
    session_id($old_sessid);
    session_destroy();
    $old_session = $_SESSION;
    session_id($new_sessid);
    $sess_handler =& xoops_gethandler('session');
    session_set_save_handler(array(&$sess_handler, 'open'), array(&$sess_handler, 'close'), array(&$sess_handler, 'read'), array(&$sess_handler, 'write'), array(&$sess_handler, 'destroy'), array(&$sess_handler, 'gc'));
    session_start();
    $_SESSION = array();
    foreach (array_keys($old_session) as $key) {
        $_SESSION[$key] = $old_session[$key];
    }
}
?>