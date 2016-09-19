<?php
$Router
->notSafe()
->controllerSpace('MicroModules\Example\Controllers')
->nameSpace('111111')


->End_nameSpace()
->nameSpace('222222')
	->node('/blog')

->route('/', 'ShopController')->get('show')					->name('micro')
  	 						->put('putAction')
  	 					 ->delete('deleteAction')

		->includeFile(__DIR__.'/modules/Example/routes.php')



	->End_node()#blog
->End_nameSpace()
	
->list('/microroutes')


;# $Router
// \d::p($this);