<?php
namespace MicroModules\Example\Controllers;

class ShopController
{

    function __construct()
    {
    }

    public function current($R, $PS)
    {
//        ob_start();
//        dump($R->RouterHost);
//        \d::d($R);
//        \d::d($R);
        \d::d($R->Route);
//        \d::p($R->Route);
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
