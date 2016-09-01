<?php
$Router
// ->notSafe()

			->namePrefix('dkkkjddf_')
			->route('/привет', 'dkdkdk')->get('alalala')

->group('/blog1')->controller('66666666666')

		->route('/234/{name}')->name('asdfa')
				->post('sdfasf')
				->get('action')

->group('/blog4')

		->includeFile(__DIR__.'/ro.php')

->groupEnd()
 
		->group()->controller('7777777777777777')

				->route('/{?id}/{id1}/{id2}/{id3}')->name('adfa')
						->post('add')
						->get('action')
						->regex([
									// 'id'  => '\d',
									'id1' => '\d{3}',
									'id2' => '\d',
									'id3' => '\d',
								])
		->groupEnd()
->groupEnd()
		->route('/', 'BlogController')->name('Тридцатый')
				->post('dell')
				->get('action')
->list()
;
