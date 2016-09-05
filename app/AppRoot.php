<?php
namespace app;

use MicroMir\Root\Root;

class AppRoot extends Root
{
	public function __construct () {
		parent::__construct();
		$this->router->init([__DIR__.'/routes.php'], 'notSafe');
		$this->request->match($this->router);
		// \d::p($this->router);
		// \d::p($_SERVER);
	}
}