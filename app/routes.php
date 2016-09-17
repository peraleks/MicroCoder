<?php
$Router
->notSafe()
->nameSpace('111111')


->End_nameSpace()
->nameSpace('222222')
	->node('/blog')

->route('/', 'MicroModules')->get('action')					->name('micro')
  	 						->put('putAction')
  	 					 ->delete('deleteAction')

		->includeFile(__DIR__.'/modules/Example/routes.php')



	->End_node()#blog
->End_nameSpace()
	
->list('/microroutes')


;# $Router
// \d::p($this);