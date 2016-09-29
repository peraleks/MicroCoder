<?php
// require MICRO_DIR.'/vendor/autoload.php';

require MICRO_DIR.'/vendor/zdorovo/micro/Micro/Autoload/Autoloader.php';

$loader = new Autoloader(MICRO_DIR);
$loader
 #--------------------------------------------------
// (new Autoloader(MICRO_DIR)) #--------------------------------------------------

	->space( 'MicroMir'     		, '/vendor/zdorovo/micro/Micro')
	->space( 'MicroModules\Example' , '/app/modules/Example')
	->space( 'MicroServices'		, '/app/services')

	// ->space( '', '/vendor/zdorovo/micro/Micro/Debug')->next()

->globalClass('/vendor/zdorovo/micro/Micro/Debug/d.php', ['d'])



	->space( 'Psr\Http\Message'	, '/vendor/psr/http-message/src')
	->space( 'Zend\Diactoros'	, '/vendor/zendframework/zend-diactoros/src')



;# Autoloader .................................................................
// \d::p($loader);