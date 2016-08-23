<?php
$Router->safeMode()

->group('/blog')
	->route('/{id}', 'BlogController')->post('add')

	->route('/гоша/хороший/', 'BlogController')->post('dell')->name('Тридцатый')
->groupEnd()
	
	->route('/blog/articles/{id}/blog/{category}/{id}', 'BlogController@index')->name('Главная')

->group('/shop')
	->route('/', 'BlogController')->name('Главная')
->groupEnd()
				
->route('/30', 'BlogController')->name('Тридцатый')
	->get('action')
	->post('postAction')
;
