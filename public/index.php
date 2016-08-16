<?php

$loader = require __DIR__.'/../app/autoload.php';

d::m();
d::p($_SERVER);

echo '<pre>';
print_r(spl_autoload_functions());
echo '</pre>';

d::m();

$kernel = new AppKernel;

