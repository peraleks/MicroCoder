<?php
namespace MicroModules\Example\Controllers;

class ShopController
{

	function __construct() {
	}

	public function show($R, $PS) {

		echo $PS['id'].'<br>';
		// echo $PS['id1'].'<br>';
		// echo $PS['id2'].'<br>';
		// echo $PS['id3'].'<br>';


		// \d::p($R->RouterHelper->getUrl('222222/888888/ro5'));
		// \d::p($R::nameToUrl());


	}
}
