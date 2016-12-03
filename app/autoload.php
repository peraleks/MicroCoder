<?php
// require MICRO_DIR.'/vendor/autoload.php';

require MICRO_DIR.'/vendor/zdorovo/micro/Micro/Autoload/Autoloader.php';

(new Autoloader(MICRO_DIR)) #--------------------------------------------------

	->psr4( 'MicroMir'     		   , '/vendor/zdorovo/micro/Micro')
	->psr4( 'MicroModules\Example' , '/app/modules/Example')
	->psr4( 'MicroServices'		   , '/app/services')

    ->globalClass('/vendor/zdorovo/micro/Micro/Debug/d.php', ['d'])

//	 ->psr4( '', '/vendor/zdorovo/micro/Micro/Debug')->next()


	->psr4( 'Psr\Http\Message'	, '/vendor/psr/http-message/src')
	->psr4( 'Zend\Diactoros'	, '/vendor/zendframework/zend-diactoros/src')



;# Autoloader .................................................................
