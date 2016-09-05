<?php
$Router
->notSafe()


->group('/blog')
	->includeFile(__DIR__.'/modules/Example/routes.php')
->groupEnd()


->list('/microroutes')
;
