<?php

define('MICRO_ERROR_LOG', true);

define('MICRO_ERROR_LOG_FILE', '/storage/logs/errors.log');

define('MICRO_ERROR_LOG_TRACE', 1); 	// 1 - log full trace, 0 - only inversion

define('MICRO_ERROR_TRACE_COLLAPSE', false);

$errorHandler #----------------------------------------------------------------

->setHeaderMessage
([
	'dir' 	 => MICRO_DIR.'/app/modules',
	'space'	 => 'MicroModules',
	'header' => '500 Internal Server Error',
	'ru' 	 =>	'Ошибка на странице',
	'en' 	 => 'Page Error',
])

;# $errorHandler ..............................................................