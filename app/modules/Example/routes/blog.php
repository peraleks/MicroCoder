<?php
$Router
->notSafe()
->controllerSpace('MicroModules\Zdorovo\Example\Controllers')
	  ->nameSpace('333333')

->node('/article')

					->controller('BadController')

	  ->route('/list2/{id}')					->name('list2')
	   ->post('post')
	    ->get('post')


	  ->route('/list/{?id}', 'Blog')			->name('list')
	   ->post('post')
	    ->get('post')
	  ->regex(['id' => '[asd]'])

				->End_controller()#BadController

->End_node()#article

	  ->route('/name', 'BlogController')->overflow('/list/{id}')
	   ->post('post1')
	    ->get('action')

	  ->End_nameSpace()#333333
;#Router 
