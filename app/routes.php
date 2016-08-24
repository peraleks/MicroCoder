<?php
$Router->safeMode()

->group('/blog')

	->route('/{id}', 'BlogController')
	 ->post('add')

	->route('/гоша/хороший/', 'BlogController')->name('Тридцатый')
	 ->post('dell')	

->groupEnd()

->group('/shop')

	->route('/', 'BlogController')->name('Главная')

->groupEnd()
				
->route('/30', 'BlogController')->name('Тридцатый1')
  ->get('action')
 ->post('postAction')

->route('/blog/articles/{id}/blog/{category}/{id}', 'BlogController')
 ->post('post')
;
