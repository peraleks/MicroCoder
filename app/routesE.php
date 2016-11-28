<?php
$Router
    ->notSafe()


    ->includeFile(__DIR__ . '/modules/Example/routes.php')

    ->includeFile(__DIR__ . '/modules/Example/routes/blog.php')

    ->includeFile(__DIR__ . '/modules/Example/routes/shop.php')

    ->nodeEnd()#blog
    ->End_nameSpace()
    // ->page404('/404.html')


    ->list('/microroutes');# $Router ....................................................................
// \d::p($this);