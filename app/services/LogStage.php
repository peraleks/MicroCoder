<?php
namespace MicroServices;

class LogStage
{
	public function __construct($R)
	{
		$this->R = $R;
	}

	public function executeStage()
	{
		echo 'LogStage';
	}
}