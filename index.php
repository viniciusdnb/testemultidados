<?php

	require_once __DIR__ . "/vendor/autoload.php";

	use src\Route\Start;
	
	try
	{
		$s = new Start;
		
	}
	catch(\Exception $ex)
	{
		
		echo $ex->getMessage() . " codigo: " . $ex->getCode();
	}

	
		
?>