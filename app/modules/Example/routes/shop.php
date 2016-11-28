<?php
$Router
->controllerSpace('MicroModules\Example\Controllers')
    ->nameSpace('111111')
    ->End_nameSpace()
    ->nameSpace('222222')
    ->node('/blog')
    ->route('/', 'ShopController')
    ->GET('show')                 ->name('micro')
    ->PUT('putAction')
    ->DELETE('deleteAction')
    ->node('/cms2')
    ->route('/{?id}', 'ShopController')->name('adfa')
    ->GET('show')
    ->PUT('showput')
    ->regex([
        'id' => '\d',
    ])
    ->nodeEnd()#cms
    ->nodeEnd()#blog
    ->End_nameSpace()
;