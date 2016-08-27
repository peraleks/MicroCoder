<?php
// require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/Autoloader.php';
$loader = new Autoloader;

$loader->space('app', '/app')								->strict()
	   ->space('MicroMir', '/vendor/zdorovo/micro/Micro')	->strict()
	   ->globalClass('/vendor/zdorovo/micro/Micro/Debug/d')	->strict()
;
