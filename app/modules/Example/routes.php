<?php
$Router
->notSafe()
->controllerSpace('MicroModules\Example\Controllers')
->nameSpace('888888')    

->node('/example')

				->controller('ShopController')

	->route('/привет')					->name('hello')
	  ->get('show')

	->route('/12345/{name}')			->name('12345')
	 ->post('delete')
	  ->get('show')

	->route('/')						->name('main')
	 ->post('put')
	  ->get('show')


			->End_controller()#ShopController

->End_node()#example
	->node('/cms')

	->route('/{?id}/{id1}/{id2}/{id3}', 'ShopController')		->name('adfa')
	 ->post('add', 'GoController')
	  ->get('show')
	->regex([
				'id'  => '\d',
				'id1' => '\d{3}',
				'id2' => '\d',
				'id3' => '\d',
			])

->End_node()#cms
	->node('/comment')

							->controller('ByController')

		->route('/list/{id}/sdfslkjsdfasl/asdf/asdf')				->name('ro5')
		 ->post('post')
		  ->get('post', 'BlogController')

		->route('/list/articles', 'BlogController')->overflow()
		 ->post('post')
		  ->get('action')

						->End_controller()#ByController
    
->End_node()#comment
->End_nameSpace()
	->node('/shop')

		->includeFile(__DIR__.'/routes/blog.php')

->End_node()#shop
      
->nameSpace('222222')
	->route('/10', 'Last')						->name('10')
	 ->post('put', 'PUTController')
	  ->get('show')

->End_nameSpace()
;# Router -----------------------------------------------------------------------------

// \d::p($Router);