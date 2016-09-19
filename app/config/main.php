<?php

define('MICRO_LOCALE', 'ru');


$Allow_Development_IP = true;

	  $Development_IP =	[
						  '127.0.0.1' 	 => '',
						  '192.168.56.1' => '',
						];


define('MICRO_ERROR_LOG_FILE', '/storage/logs/errors.log');



	
if ($Allow_Development_IP && array_key_exists($_SERVER['REMOTE_ADDR'], $Development_IP))
	 { define('MICRO_DEVELOPMENT', true);  } 
else { define('MICRO_DEVELOPMENT', false); }
