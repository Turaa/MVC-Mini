<?php
//
// PHASE: BOOTSTRAP
//
define('MINI_INSTALL_PATH', dirname(__FILE__));
define('MINI_SITE_PATH', MINI_INSTALL_PATH . '/site');

<<<<<<< HEAD
require(MINI_INSTALL_PATH.'/src/CMini/bootstrap.php');
=======
require(MINI_INSTALL_PATH.'/src/bootstrap.php');
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5

$mi = CMini::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$mi->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
<<<<<<< HEAD
$mi->ThemeEngineRender();
=======
$mi->ThemeEngineRender();
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
