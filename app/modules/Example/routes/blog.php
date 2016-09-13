<?php
$Router
->notSafe()
	 ->namePrefix()
->controllerSpace('MicroModules\Zdorovo\Example\Controllers')

->group('/article')

					->controller('BadController')

	  ->route('/list2/{id}')					->name('list2')
	   ->post('post')
	    ->get('post')


	  ->route('/list/{?id}', 'Blog')			->name('list')
	   ->post('post')
	    ->get('post')
	  ->regex(['id' => '[asd]'])

				->End_controller()#BadController

->End_group()#article

	  ->route('/name', 'BlogController')->overflow('/list/{id}')
	   ->post('post1')
	    ->get('action')

;#Router 
