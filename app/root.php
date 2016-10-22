<?php
use MicroMir\{
				Root\Root,
				Root\RootController,
				Routing\RouterHost,
				Routing\RouterHelper,
				Routing\Route

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
				ServerRequestFactory
};

($R = Root::instance()) #------------- Корневой реестр ------------------------

->link('StageController', new StageController($R))
->link('Request'		, function(){ return ServerRequestFactory::fromGlobals(); })
->link('RouterHost'		, function(){ return RouterHost::instance(); })
->link('Route'			, function(){ return new Route; })
->link('RouterHelper'	, function($R){ return new RouterHelper($R); })


->link('s_FillRoute'	, function($R){ return new FillRoute($R); })
->link('s_ExecuteRoute'	, function($R){ return new ExecuteRoute($R); })

->func('nameToUrl', 'RouterHelper', 'getUrl')

;# Root .......................................................................
$errorHandler->setRoot($R); # зависимость для обнаружения инверсии func() .....

$R->StageController #----------------------------------------------------------

->add('s_FillRoute')
->add('s_ExecuteRoute')


->run();# StageController .....................................................



// \d::p($_SERVER);
