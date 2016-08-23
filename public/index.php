<?php
require __DIR__.'/../vendor/zdorovo/micro/Micro/Debug/Error/ErrorHandler.php';
new ErrorHandler;

require __DIR__.'/../app/autoload.php';

d::m();

new app\AppRoot;

d::m();
