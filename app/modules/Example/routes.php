<?php
$Router
->notSafe()
->controllerSpace('MicroModules\Example\Controllers')
->nameSpace('888888')    

->node('/example')

				->controller('ShopController')

	->route('/привет')					->name('hello')
	  ->GET('show')

	->route('/12345/{name}')			->name('12345')
	 ->POST('delete')
	  ->GET('show')

	->route('/')						->name('main')
	 ->POST('put')
	  ->GET('show')


			->End_controller()#ShopController

->nodeEnd()#example
	->node('/cms')

	->route('/{?id}/{id1}/{id2}/{id3}', 'ShopController')		->name('adfa')
	 ->POST('add', 'GoController')
	  ->GET('show')
	  ->PUT('show')
	->regex([
				'id'  => '\d',
				'id1' => '\d{3}',
				'id2' => '\d',
				'id3' => '\d',
			])

->nodeEnd()#cms
	->node('/comment')

							->controller('ByController')

		->route('/list/{id}/sdfslkjsdfasl/asdf/asdf')				->name('ro5')
		 ->POST('post')
		  ->GET('post', 'BlogController')

		->route('/list/articles', 'BlogController')->overflow()
		 ->POST('post')
		  ->GET('action')

						->End_controller()#ByController
    
->nodeEnd()#comment
->End_nameSpace()
	->node('/shop')

		->includeFile(__DIR__.'/routes/blog.php')

->nodeEnd()#shop
      
->nameSpace('222222')
	->route('/10', 'Last')						->name('10')
	 ->POST('put', 'PUTController')
	  ->GET('show')

->End_nameSpace()
;# Router -----------------------------------------------------------------------------

// \d::p($Router);