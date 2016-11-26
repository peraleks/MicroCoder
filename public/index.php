<?php
define('MICRO_MEMORY', memory_get_usage());
// ob_start();
(function(){
define('MICRO_DIR', dirname(__DIR__));
define('WEB_DIR', __DIR__);

require MICRO_DIR.'/vendor/zdorovo/micro/Micro/Error/ErrorHandler.php';
$errorHandler = MicroMir\Error\ErrorHandler::instance();
require MICRO_DIR.'/app/config/error.php';

require MICRO_DIR.'/app/config/main.php';

	// режим обслуживания | maintenance mode
// require MICRO_DIR.'/app/maintenance.php';

require MICRO_DIR.'/app/autoload.php';

require MICRO_DIR.'/app/root.php';

d::m();
// d::p($_SERVER);
// d::p($R->RouterHost);
})();
