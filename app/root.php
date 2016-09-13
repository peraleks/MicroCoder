<?php
use MicroMir\{
				Root\Root,
				Routing\Router,
				Routing\RouterController

};
use MicroServices\{
				ServerService


};
($R = Root::instance()) /*----------Корневой-реестр--------------------------*/
						
->link('Router', Router::instance())
->link('Server', function(){ return new ServerService; })




;/*($R = Root::instance()) -------------------------------------------------*/

							# Главный контроллер #

							 	  		$R->Router->init([$microDir.'/app/routes.php'], 'notSafe');
(new RouterController($R, $mgs))->match($R->Router);

