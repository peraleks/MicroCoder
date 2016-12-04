<?php
// IP адреса, для которых отображаются сообщения об ошибках
// и дампы \d::d($var), \d::p($var), \d::m()
$DevelopmentIp = [
    '127.0.0.1'    => '',
    '192.168.56.1' => '',
];
isset($DevelopmentIp[$_SERVER['REMOTE_ADDR']])
    ? define('MICRO_DEVELOPMENT', true)
    : define('MICRO_DEVELOPMENT', false);


define('MICRO_LOCALE', 'ru');

define('MICRO_HOSTS_SETTINGS', MICRO_DIR.'/app/config/hosts.php');
define('MICRO_VERBS_SETTINGS', MICRO_DIR.'/app/config/verbs.php');