<?php
$Router
->notSafe()


->route('/', 'MicroModules')->get('action')					->name('micro')
  	 						->put('putAction')
  	 					 ->delete('deleteAction')

->group('/blog')
	->includeFile(__DIR__.'/modules/Example/routes.php')
->End_group()/*blog*/


->list('/microroutes')


;// $Router