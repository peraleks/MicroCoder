<?php
use MicroMir\Root\{
    Root
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
if (!function_exists('c')) { function c() { return Root::instance(); } }

($c = Root::instance()) #-------------------- Контейнер --------------------------------

->link('Emitter'		, SapiEmitter::class)
->link('Request'		, ServerRequest::class, RequestServiceProvaider::class)
->link('ResponseFactory', ResponseFactory::class)
->link('Route'			, Route::class)
->link('RouterHelper'	, RouterHelper::class)
->link('RouterHost'		, RouterHost::class)
->link('StageController', StageController::class)
->link('Verbs'			, Verbs::class)


//    ->func('nameToUrl', 'RouterHelper', 'getUrl')



;# Root .................................................................................
$errorHandler->setRoot($c); # зависимость для обнаружения инверсии func() ...............

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
//d::d($R);