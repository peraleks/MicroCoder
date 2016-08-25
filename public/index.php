<?php
define("MICROCODER_LOCALE", "en");

require __DIR__.'/../vendor/zdorovo/micro/Micro/Debug/Error/ErrorHandler.php';
Micro\Debug\Error\ErrorHandler::instance();

require __DIR__.'/../app/autoload.php';

d::m();

new app\AppRoot;

d::m();
