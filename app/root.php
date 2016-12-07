<?php
use MicroMir\Container\{
    Container
};

use MicroMir\Routing\{
    RouterHost,
    RouterHelper,
    Route
};

use MicroMir\Http\{
    Verbs
};

use MicroMir\Providers\{
    ResponseFactory,
    RequestServiceProvaider
};

use MicroMir\Stages\{
    StageController,
    MethodNotImplemented501,
    FillRoute,
    RouteStages,
    FollowRoute200,
    NotFound404,
    NotAllowed405
};

use MicroServices\{
    LogStage
};

use Zend\Diactoros\{
    ServerRequest,
    ServerRequestFactory,
    Response,
    Response\SapiEmitter
};
if (!function_exists('c')) { function c() { return Container::getInstance(); } }

($c = Container::getInstance()) #-------------------- Контейнер --------------------------------

->bind('Emitter'		, SapiEmitter::class)
->bind('Request'		, ServerRequest::class  , RequestServiceProvaider::class)
->bind('ResponseFactory', ResponseFactory::class)
->bind('Route'			, Route::class)
->bind('RouterHelper'	, RouterHelper::class)
->bind('RouterHost'		, RouterHost::class)
->bind('StageController', StageController::class)
->bind('Verbs'			, Verbs::class)


//    ->func('nameToUrl', 'RouterHelper', 'getUrl')



;# Root .................................................................................
//$errorHandler->setRoot($c); # зависимость для обнаружения инверсии func() ...............

$c->StageController #--------------------------------------------------------------------

->stages([
    MethodNotImplemented501::class,
    FillRoute::class,
    RouteStages::class,
    FollowRoute200::class,
    NotFound404::class,
    NotAllowed405::class,
])

->afterResponse([
    LogStage::class,
])

->nextStage();# StageController .........................................................
//d::d($c);