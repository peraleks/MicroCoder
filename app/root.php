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
use MicroMir\Stage\{
				StageController,
				FillRoute,
				ExecuteRoute

};
use MicroServices\{
				ServerService


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


->link('s_FillRoute'	, function($R){ return new FillRoute($R); })
->link('s_ExecuteRoute'	, function($R){ return new ExecuteRoute($R); })


;# Root .......................................................................
$errorHandler->setRoot($R); # зависимость для обнаружения инверсии func() .....

$R->StageController #----------------------------------------------------------

->add('s_FillRoute')
->add('s_ExecuteRoute')

// ->afterEech()
->run();# StageController .....................................................



// \d::p($_SERVER);
