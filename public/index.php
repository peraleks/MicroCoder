<?php
(function(){
$microDir = dirname(__DIR__);

require $microDir.'/vendor/zdorovo/micro/Micro/Debug/Error/ErrorHandler.php';
$errorHandler = MicroMir\Debug\Error\ErrorHandler::instance();
require $microDir.'/app/errorHandlerSettings.php';

require $microDir.'/app/config/GLOBAL.php';

$mgs['WEB_DIR']  = __DIR__;
$mgs['BASE_DIR'] = $microDir;


require $mgs['BASE_DIR'].'/app/autoload.php';

// d::p($GLOBALS);

d::m();

new app\AppRoot;

d::m();

})();
