<?php
$Router
->notSafe()


->group('/blog')
	->includeFile(__DIR__.'/modules/Example/routes.php')
->End_group()


// ->list('/microroutes')
;
