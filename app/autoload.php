<?php
// require $mgs['BASE_DIR'].'/vendor/autoload.php';

require $mgs['BASE_DIR'].'/vendor/zdorovo/micro/Micro/Autoload/Autoloader.php';

(new Autoloader($mgs['BASE_DIR']))

	  ->space('app', '/app')								->strict()
	  ->space('MicroMir', '/vendor/zdorovo/micro/Micro')	->strict()
	  ->space('MicroModules', '/app/modules')				->strict()
	  ->space('MicroServices', '/app/services')				->strict()

->globalClass('/vendor/zdorovo/micro/Micro/Debug/d')	    ->strict()

;