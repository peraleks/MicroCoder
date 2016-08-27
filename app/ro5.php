<?php
$Router
->notSafe()

->group('55555555')

	  ->route('/list/{id}', 'BlogController')
	   ->post('post')
	    ->get('post')

	  ->route('/list/articles', 'BlogController')
	   ->post('post')
	    ->get('action')
    
->groupEnd()

;
