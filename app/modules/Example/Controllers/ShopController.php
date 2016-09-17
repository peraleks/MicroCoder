<?php
namespace MicroModules\Example\Controllers;


class ShopController
{
	public function show($R, $par) {
		// ob_start();

		echo $par['id'].'<br>';
		echo $par['id1'].'<br>';
		echo $par['id2'].'<br>';
		echo $par['id3'].'<br>';


		// \d::p($R->RouterHelper->getUrl('888888/hello'));

		// $cook = ob_get_contents();
		// 		ob_end_clean();

		// setcookie('micro', 123456789);
		// echo $cook;
		// space();
	}
}