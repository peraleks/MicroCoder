<?php

if (!(defined('MICRO_DEVELOPMENT') && MICRO_DEVELOPMENT === true)) {

	header($_SERVER['SERVER_PROTOCOL'].' 503 Service Unavailable');

	$statusCode = '503';
	$message[] 	= "Сайт закрыт на обслуживание";
	$message[] 	= "Site is down for maintenance";

	include MICRO_ERROR_PAGE;

	die();
}