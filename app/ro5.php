<?php
$Router
->notSafe()
->namePrefix()
->group('/comment')

	  ->route('/list/{id}/sdfslkjsdfasl/asdf/asdf', 'BlogController')->name('ro5')
	   ->post('post')
	    ->get('post')

	  ->route('/list/articles', 'BlogController')->overflow()
	   ->post('post')
	    ->get('action')
    
->groupEnd()

;
// \d::p($this->groups);
// die();