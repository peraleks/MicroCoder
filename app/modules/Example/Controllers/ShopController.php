<?php
namespace MicroModules\Example\Controllers;

use Zend\Diactoros\ServerRequestFactory;


class ShopController
{
	function __construct() {
	}

	public function show($R, $PS) {
		 // \d::p(stream_get_wrappers());
		 // \d::p($_SERVER);
		// $var[];
		// ob_start();
		// echo $R->RouterHelpe->getUr().'<br>';
		// echo $PS['id4'].'<br>';
		
		echo $PS['id1'].'<br>';
		echo $PS['id2'].'<br>';
		echo $PS['id3'].'<br>';


		\d::p($R->RouterHelper->Router->matchUrl('222222/888888/ro5', 'GET'));
		\d::p($R::nameToUrl('222222/888888/ro5'));
		// \d::p($R->ServerRequest->getServerParams());
		// \d::p($R->ServerRequest->getAttributes());
		// $R->Server->printServer();
		$request = ServerRequestFactory::fromGlobals(
		    $_SERVER,
		    $_GET,
		    $_POST,
		    $_COOKIE,
		    $_FILES
		);

		\d::p($request);


		// $cook = ob_get_contents();
		// 		ob_end_clean();

		// setcookie('micro', 123456789);
		// echo $cook;
		// space();
	}
}