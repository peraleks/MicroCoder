<?php
$Router->notSafe()
->controllerSpace('MicroModules\Example\Controllers')

    ->controller('UserHelpController')
    ->post('/user/confirm-phone'			   , 'confirmPhone'      )
    ->post('/user/confirm-code'                , 'confirmCode'       )
    ->post('/user/reset-password/confirm-phone', 'resetPasswordPhone')
    ->post('/user/reset-password/confirm-code' , 'resetPasswordCode' )

    ->post('/user/reset-password', 'resetPassword', 'UserResourceController')

//    ->controller('UserAuthController')
    ->controller('ShopController')
    ->post('/user/login'  , 'login'  )->name('userLogin')
    ->post('/user/logout' , 'logout' )
    ->get('/user/current' , 'current')

    ->controller('BillingController')
    ->get('/user/group-operations', 'operations')
    ->get('/user/group-balance'   , 'balance'   )

    ->controller('UserController')
    ->get('/user/games'        , 'selfGames'    )
    ->get('/user/{id}/games'   , 'userGames'    )
    ->get('/user/notifications', 'notifications')
    ->get('/user/counters'	   , 'counters'     )

    ->controller('SettingsController')
    ->get('/user/settings' , 'index')
    ->post('/user/settings', 'store')

//    ->resource('/users', 'UserResourceController')
//    ->resource('/user' , 'UserResourceController')

    ->get('/user/{id}/sports', 'get' , 'PreferenceActivityController')
    ->put('/user/{id}/sports', 'post', 'PreferenceActivityController')


    ->includeFile(__DIR__ . '/blog.php')

;