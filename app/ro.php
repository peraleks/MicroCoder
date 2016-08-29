<?php
$Router
->notSafe()

->group('/222222')

	  ->route('/list2/{id}', 'BlogController')
	   ->post('post')
	    ->get('post')

	  ->route('/list/{?id}', 'Blog')->regex(['id' => '[asd]'])
	   ->post('post')
	    ->get('post')

	  ->route('/list/articles', 'BlogController')->overflow('/list/{id}')
	   ->post('post1')
	    ->get('action')

->groupEnd()
 ;
