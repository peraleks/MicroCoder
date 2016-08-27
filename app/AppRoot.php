<?php
namespace app;

use MicroMir\Root\Root;

class AppRoot extends Root
{
	public function __construct () {
		parent::__construct();
		$this->router->init([__DIR__.'/routes.php'], 'notSafe');
		// \d::p($this->router);
	}
}