<?php
use MicroMir\{
				Root\Root,
				Root\RootController,
				Routing\Router,
				Routing\RouterHelper

};
use MicroServices\{
				ServerService


};
use Zend\Diactoros\{
				ServerRequest
};

($R = Root::instance()) #------------- Корневой реестр ----------------------------

->link('Router', 			Router::instance())
->link('RootController', 	new RootController($R))
->link('RouterHelper',		function($R){ return  new RouterHelper($R); })

->link('Server',			function(){ return new ServerService; })

->link('ServerRequest',		function(){ return new ServerRequest($_SERVER, $_FILES); })


->func('nameToUrl', 'RouterHelper', 'getUrl')

;#.................................................................................
// $errorHandler->setRoot($R);#.......................................................

							# Главный контроллер #





$R->Router->init([MICRO_DIR.'/app/routes.php'], 'notSafe');

$R->RootController->matchUrl();

// \d::p($R);
