<?php
use MicroMir\{
				Root\Root,
				Routing\Router,
				Routing\RouterController,
				Routing\RouterHelper

};
use MicroServices\{
				ServerService


};

($R = Root::instance()) #------------- Корневой реестр ----------------------------

->link('Router', 			Router::instance())
->link('RouterController', 	new RouterController($R))
->link('RouterHelper',		function($R){ return  new RouterHelper($R); })

->link('Server',			function(){ return new ServerService; })


->func('nameToUrl', 'RouterHelper', 'getUrl')

;#.................................................................................
$errorHandler->setRoot($R);#.......................................................

							# Главный контроллер #





$R->Router->init([MICRO_DIR.'/app/routes.php'], 'notSafe');

$R->RouterController->match();

// \d::p($R);
