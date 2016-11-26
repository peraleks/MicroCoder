<?php
$Router
->notSafe()
->controllerSpace('MicroModules\Zdorovo\Example\Controllers')
	  ->nameSpace('333333')

->node('/article')

					->controller('BadController')

	  ->route('/list2/{id}')					->name('list2')
	   ->POST('post')
	    ->GET('post')


	  ->route('/list/{?id}', 'Blog')			->name('list')
	   ->POST('post')
	    ->GET('post')
	  ->regex(['id' => '[asd]'])

				->End_controller()#BadController

->nodeEnd()#article

	  ->route('/name', 'BlogController')->overflow('/list/{id}')
	   ->POST('post1')
	    ->GET('action')

	  ->End_nameSpace()#333333
;#Router 
