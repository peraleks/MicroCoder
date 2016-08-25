<?php
$Router
// ->safeMode(false)

->group('/blog1')


		->route('/{id}', 'BlogController')->name('regex')
		 ->post('add')
		 ->get('action')


->groupEnd()

->group('/blog4')
	->includeFile(__DIR__.'/ro.php')
->groupEnd()

		->route('/гоша/хороший/', 'BlogController')
		->name('Тридцатый')
		 ->post('dell')
		 ->get('action')
;

// \d::p($this);