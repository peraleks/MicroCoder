<?php
$Router
    ->notSafe()
    ->controllerSpace('MicroModules\Zdorovo\Example\Controllers')
    ->nameSpace('333333')

    ->delete('/user/{id}/sports', 'post', 'PreferenceActivityController')

//        ->node('/article')
//            ->controller('BadController')
//            ->r('/list2/{id}')->name('list2')->POST('post')->GET('post')
//            ->r('/list/{?id}', 'Blog')->name('list')->POST('post')->GET('post')
//                ->regex(['id' => '[asd]'])
//        ->nodeEnd()
//
//        ->r('/name', 'BlogController')->overflow('/list/{id}')
//            ->POST('post1')
//            ->GET('action')
    ->End_nameSpace()#333333
;#Router 
