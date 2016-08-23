<?php
namespace app;

use Micro\Root\Root;

class AppRoot extends Root
{
	public function __construct () {
		parent::__construct();
		$this->router->init([__DIR__.'/routes.php']);
		// \d::p($this->router);
		// $this->request->match($this->router);
	}
}