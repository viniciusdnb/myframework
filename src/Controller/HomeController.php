<?php

namespace src\Controller;

use src\Route\RouterController;


class HomeController extends RouterController
{
	public function index()
	{
		
		$this->render("home/index");
		
		
	}
}

?>