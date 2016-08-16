<?php

$Router->add('/{id}/blog', 'BlogController@index')
	->method('POST | GET');

$Router->add('/гоша/жопа/{id}', 'BlogController@index')
	->method('POST | GET');

$Router->add('/blog/articles/{id}/blog/{category}/{id}', 'BlogController@index');

$Router->add('/', 'BlogController@index')
	->method('GET');
