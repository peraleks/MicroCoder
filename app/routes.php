<?php
$Router
// ->notSafe()

->group('/blog1')
		
		->route('/234', 'controller')						->name('asdfa')
		 ->post('sdfasf')

		->route('/{id}', 'BlogController')					->name('regex')
		 ->post('add')
		  ->get('action')

		->route('/гоша/хороший/', 'BlogController') 		->name('Тридцатый')
		 ->post('dell')
		  ->get('action')

->groupEnd()

->group('/blog4')

		->includeFile(__DIR__.'/ro.php')

->groupEnd()

->includeFile(__DIR__.'/ro5.php')
;
