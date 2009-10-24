<?php 
// $Id: cp_header.php,v 1.2 2005/03/18 12:51:55 onokazu Exp $
/**
 * module files can include this file for admin authorization
 * the file that will include this file must be located under xoops_url/modules/module_directory_name/admin_directory_name/
 */
 
include_once '../../../mainfile.php';
include_once XOOPS_ROOT_PATH . "/include/cp_functions.php";
$moduleperm_handler = & xoops_gethandler( 'groupperm' );
if ( $xoopsUser ) {
    $url_arr = explode('/',strstr($xoopsRequestUri,'/modules/'));
    $module_handler =& xoops_gethandler('module');
    $xoopsModule =& $module_handler->getByDirname($url_arr[2]);
    unset($url_arr);
    
    if ( !$moduleperm_handler->checkRight( 'module_admin', $xoopsModule->getVar( 'mid' ), $xoopsUser->getGroups() ) ) {
        redirect_header( XOOPS_URL . "/user.php", 1, _NOPERM );
        exit();
    } 
} else {
    redirect_header( XOOPS_URL . "/user.php", 1, _NOPERM );
    exit();
}
// set config values for this module
if ( $xoopsModule->getVar( 'hasconfig' ) == 1 || $xoopsModule->getVar( 'hascomments' ) == 1 ) {
    $config_handler = & xoops_gethandler( 'config' );
    $xoopsModuleConfig = & $config_handler->getConfigsByCat( 0, $xoopsModule->getVar( 'mid' ) );
}

// include the default language file for the admin interface
if ( file_exists( "../language/" . $xoopsConfig['language'] . "/admin.php" ) ) {
    include "../language/" . $xoopsConfig['language'] . "/admin.php";
}
elseif ( file_exists( "../language/english/admin.php" ) ) {
    include "../language/english/admin.php";
}
?>