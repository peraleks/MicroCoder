<?php
(function(){

require __DIR__.'/../vendor/zdorovo/micro/Micro/Debug/Error/ErrorHandler.php';
MicroMir\Debug\Error\ErrorHandler::instance();

require __DIR__.'/../app/config/GLOBALS.php';

$mgs['WEB_DIR']  = __DIR__;
$mgs['BASE_DIR'] = dirname($mgs['WEB_DIR']);


require $mgs['BASE_DIR'].'/app/autoload.php';

// d::p($GLOBALS);

d::m();

new app\AppRoot;

d::m();

})();
