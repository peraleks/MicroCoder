<?php
define('MICRO_MEMORY', memory_get_usage());

(function(){
$microDir = dirname(__DIR__);

require $microDir.'/vendor/zdorovo/micro/Micro/Debug/Error/ErrorHandler.php';
$errorHandler = MicroMir\Debug\Error\ErrorHandler::instance();
require $microDir.'/app/config/errorHandler.php';

require $microDir.'/app/config/GLOBAL.php';

$mgs['WEB_DIR']  = __DIR__;
$mgs['BASE_DIR'] = $microDir;

require $mgs['BASE_DIR'].'/app/autoload.php';

require $mgs['BASE_DIR'].'/app/root.php';

d::m();

})();
