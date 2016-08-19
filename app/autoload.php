<?php

// require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/Autoloader.php';
$loader = new Autoloader;

$loader->space('app', '/app')->strict()

	   ->space('Micro', [
		    '/vendor/zdorovo/micro',
		    '/vendor/zdorovo',
		   	'/vendor/zdorovo/micro/Micro',
		    ])

	   ->class([
	   		'/vendor/m',
	   		'/vendor/zdorovo/k',
	   		'/vendor/zdorovo/micro/l',
	   		'/vendor/zdorovo/micro/Micro/Debug/d',
	   		])->strict()

	   ->space('', '/app')->strict();
