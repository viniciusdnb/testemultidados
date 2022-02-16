<?php

namespace src\Route;

abstract class RouteController
{
	public $data = [];

	
	function render($view)
	{
		$data = $this->getData();

		require_once "src/Views/layout/head.php";
		require_once "src/Views/layout/header.php";
		require_once "src/Views/layout/container.php";
		require_once "src/Views/layout/sidebar.php";		
		require_once "src/Views/layout/content.php";
		require_once "src/Views/" . $view . ".php";
		require_once "src/Views/layout/footer.php";

	}

	function redirect($view)
	{
		header('Location' . $view);
	}

	function setData($name, $data)
	{
		 $this->data[$name] = $data;
	}

	function getData()
	{
		return $this->data;
	}
}

?>