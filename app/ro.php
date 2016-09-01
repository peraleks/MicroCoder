<?php
$Router
->notSafe()
->namePrefix('r0r0r0r_')
->group('/article')

	  ->route('/list2/{id}', 'BlogController')->name('list')
	   ->post('post')
	    ->get('post')

->includeFile(__DIR__.'/ro5.php')

	  ->route('/list/{?id}', 'Blog')->regex(['id' => '[asd]'])
	   ->post('post')
	    ->get('post')

->groupEnd()
	  ->route('/name', 'BlogController')->overflow('/list/{id}')
	   ->post('post1')
	    ->get('action')

 ;
