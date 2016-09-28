<?php
namespace MicroModules\Example\Controllers;


class ShopController
{

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
		\d::p($R::nameToUrl('222222/888888/ro5'))
		// $R->Server->printServer();

		// $cook = ob_get_contents();
		// 		ob_end_clean();

		// setcookie('micro', 123456789);
		// echo $cook;
		// space();
	}
}