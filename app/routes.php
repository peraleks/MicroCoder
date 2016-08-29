<?php
$Router
->notSafe()

->group('/blog1')->controller('66666666666')

		->route('/234')->name('asdfa')->overflow('/list/{id}')
				->post('sdfasf')
				->get('action')

 
		->group()->controller('7777777777777777')

				->route('/{?id}/{id1}/{?id2}/{id3}')->name('regex')
						->post('add')
						->get('action')
						->regex([
									'id1' => '\d',
									'id'  => '\d',
									'id2' => '\d',
									'id3' => '\d',
								])
		->groupEnd()
				 
		->route('/гоша/хороший/', 'BlogController')->name('Тридцатый')
				->post('dell')
				->get('action')
->groupEnd()

->group('/blog4')

		->includeFile(__DIR__.'/ro.php')

->groupEnd()

->includeFile(__DIR__.'/ro5.php')
;
