<?php

namespace src\Route;

abstract class RouterController
{
	public $data = [];

	
	function render($view)
	{
		$data = $this->getData();

		require_once "src/Views/layout/head.php";		
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