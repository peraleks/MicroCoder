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
				ResponseFactory
};
use MicroMir\Stages\{
				StageController,
				MethodNotImplemented501,
				FillRoute,
				NotFound404,
				RouteStages,
				FollowRoute
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

($R = Root::instance()) #------------- Корневой реестр ------------------------

->link('Emitter'		, function()  { return new SapiEmitter; 						})
->link('Request'		, function()  { return 	   ServerRequestFactory::fromGlobals(); })
->link('ResponseFactory', function()  { return new ResponseFactory; 					})
->link('Route'			, function()  { return new Route; 								})
->link('RouterHelper'	, function($R){ return new RouterHelper($R); 					})
->link('RouterHost'		, function($R){ return new RouterHost($R); 						})
->link('StageController', function($R){ return new StageController($R); 				})
->link('Verbs'			, function()  { return new Verbs; 								})


->func('nameToUrl', 'RouterHelper', 'getUrl')



;# Root .......................................................................
$errorHandler->setRoot($R); # зависимость для обнаружения инверсии func() .....

$R->StageController #----------------------------------------------------------

->stages([
		   MethodNotImplemented501::class,
		   FillRoute::class,
		   NotFound404::class,
		   RouteStages::class,
		   FollowRoute::class,
		 ])


->afterResponse([
				  LogStage::class,
				])

->nextStage();# StageController ...............................................
