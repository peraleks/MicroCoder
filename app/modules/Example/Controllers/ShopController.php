<?php
namespace MicroModules\Example\Controllers;

use MicroMir\Root\Root;
use MicroMir\Routing\Route;
use Zend\Diactoros\Response\SapiEmitter;

class ShopController
{

    function __construct()
    {
    }

    public function current(Route $Route, $Emitter, array $a = null)
    {
        \d::p($Route);
//        ob_start();
//        dump($R->RouterHost);
//        \d::d($R);
//        \d::d($R);
//        \d::d($R->Route);
//        \d::d($_SERVER);
//        $refl = new \ReflectionClass(ShopController::class);
//        \d::d($refl->getMethod('current'));
//        $refl->
//        echo $PS['id'] . '<br>';
//        echo $PS['id1'] . '<br>';
//        echo $PS['id2'] . '<br>';
//        echo $PS['id3'] . '<br>';
//        echo ob_get_clean();
        // \d::p($R->RouterHelper->getUrl('222222/888888/ro5'));
        // \d::p($R::nameToUrl('ro5'));

//        $response = $R->ResponseFactory->get(
//            ob_get_clean(),
//            200,
//            'html',
//            ['Content-length' => ''
//		         		//  'Accept-Ranges' => 'bytes',
//            ]
//        );
//		 $R->Emitter->emit($response);



	}
}
