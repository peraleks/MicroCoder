<?php
define('MICRO_MEMORY', memory_get_usage());

(function(){
define('MICRO_DIR', dirname(__DIR__));
define('WEB_DIR', __DIR__);

require MICRO_DIR.'/vendor/zdorovo/micro/Micro/Debug/Error/ErrorHandler.php';
$errorHandler = MicroMir\Debug\Error\ErrorHandler::instance();
require MICRO_DIR.'/app/config/errorHandler.php';

require MICRO_DIR.'/app/autoload.php';

require MICRO_DIR.'/app/config/main.php';

require MICRO_DIR.'/app/root.php';

\d::m();
// \d::p($GLOBALS);

// echo '<pre>';
// print_r($GLOBALS);
// echo '</pre>';

})();
