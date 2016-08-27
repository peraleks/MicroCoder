<?php
$Router
->notSafe()

->group('/222222')

	  ->route('/list2/{id}', 'BlogController')
	   ->post('post')
	    ->get('post')

	  ->route('/list/{id}', 'Blog')
	   ->post('post')
	    ->get('post')

	  ->route('/list/articles', 'BlogController')
	   ->post('post1')
	    ->get('action')

->groupEnd()
 ;
