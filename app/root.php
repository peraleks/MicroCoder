<?php
use MicroMir\{
				Root\Root,
				Routing\RouterHost,
				Routing\RouterHelper,
				Routing\Route

};
use MicroMir\Providers\{
				ResponseFactory
};
use MicroMir\Stages\{
				StageController,
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

->link('StageController', function($R){ return new StageController($R); })
->link('Request'		, function(){ return ServerRequestFactory::fromGlobals(); })
->link('Emitter'		, function(){ return new SapiEmitter; })
->link('ResponseFactory', function(){ return new ResponseFactory; })
->link('RouterHost'		, function(){ return RouterHost::instance(); })
->link('Route'			, function(){ return new Route; })
->link('RouterHelper'	, function($R){ return new RouterHelper($R); })


->func('nameToUrl', 'RouterHelper', 'getUrl')



;# Root .......................................................................
$errorHandler->setRoot($R); # зависимость для обнаружения инверсии func() .....

$R->StageController #----------------------------------------------------------

->stages([
		   FillRoute::class,
		   NotFound404::class,
		   RouteStages::class,
		   FollowRoute::class,
		 ])


->afterResponse([
				  LogStage::class,
				])

->nextStage();# StageController ...............................................