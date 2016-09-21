<?php
namespace MicroModules\Example\Controllers;


class ShopController
{

	public function show($R, $PS) {
		// $var[];
		// ob_start();
		// echo $R->RouterHelpe->getUr().'<br>';
		// echo $PS['id4'].'<br>';
		echo $PS['id1'].'<br>';
		echo $PS['id2'].'<br>';
		echo $PS['id3'].'<br>';


		\d::p($R->RouterHelper->getUrl('222222/888888/ro5'));
		\d::p($R::nameToUrl('222222/888888/ro5'));

		// $cook = ob_get_contents();
		// 		ob_end_clean();

		// setcookie('micro', 123456789);
		// echo $cook;
		// space();
	}
}