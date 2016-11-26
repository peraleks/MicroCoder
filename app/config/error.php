<?php

define('MICRO_ERROR_LOG', true);

define('MICRO_ERROR_LOG_FILE', MICRO_DIR.'/storage/logs/errors.log');

define('MICRO_ERROR_LOG_TRACE', 1);// 1 - log full trace, 0 - only inversion

define('MICRO_ERROR_TRACE_COLLAPSE', false);

define('MICRO_ERROR_PAGE', MICRO_DIR.'/vendor/zdorovo/micro/Micro/Error/500.php');

$errorHandler #----------------------------------------------------------------

->setHeaderMessage
([
	'marker'  => 1,
	'header'  => '500 Internal Server Error',
	'message' => [
					'Ошибка на странице',
					'Page Error',
				 ]
])

;# $errorHandler ..............................................................