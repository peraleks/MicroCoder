<?php
$Router
->notSafe()
->namePrefix('dkkkjddf_')

->route('/привет', 'dkdkdk')->get('alalala')


->group('/blog1')->controller('66666666666')

		->route('/234/{name}')->name('asdfa')
				->post('sdfasf')
				->get('action')

->group('/shop')

		->includeFile(__DIR__.'/routes/blog.php')

->groupEnd()
 
		->group()->controller('7777777777777777')

				->route('/{?id}/{id1}/{id2}/{id3}')->name('adfa')
						->post('add', '4444444444')
						->get('action')
						->regex([
									'id'  => '\d',
									'id1' => '\d{3}',
									'id2' => '\d',
									'id3' => '\d',
								])
		->groupEnd()

->groupEnd()

		->route('/', 'BlogController')->name('Тридцатый')
				->post('dell')
				->get('action')

		->route('/10', 'BlogController')->name('Тридцатый10')
				->post('dell')
				->get('action')

				
->group('/comment')

	  ->route('/list/{id}/sdfslkjsdfasl/asdf/asdf', 'BlogController')->name('ro5')
	   ->post('post')
	    ->get('post')

	  ->route('/list/articles', 'BlogController')->overflow()
	   ->post('post')
	    ->get('action')
    
->groupEnd()

;
