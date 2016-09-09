<?php
namespace MicroModules\Example\Controllers;

class ShopController
{
	public function show() {
		ob_start();
		\d::p($GLOBALS);

		$cook = ob_get_contents();
		ob_end_clean();
		setcookie('micro', 123456789);
		echo $cook;
		
	}
}