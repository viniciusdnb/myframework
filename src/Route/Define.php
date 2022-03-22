<?php

	namespace src\Route;

	use src\Route\Tratament;

	/*
		classe que define 
		os nomes do controlador
		os nomes das acoes
		e parametros 
		atravez da url
	*/

	class Define
	{
		private $url;
		private $arrayUrl;
		private $controlName;
		private $actionName;
		private $params;

		function __construct()
		{
			$this->url = new Tratament;
			$this->explodeUrl();
		}

		function explodeUrl()
		{
			if($this->url->getUrl())
			{
				//pega a url e transforma em um array de 3 posicoes
				$this->arrayUrl = explode("/", $this->url->getUrl());

				$this->sets();
			}
			else
			{
				$this->controlName = "home";
			}	
							
		}

		function sets()
		{
			//seta os nomes nas variaveis
			$this->controlName 	= $this->verifyArray($this->getArrayUrl(),0);
			$this->actionName 	= $this->verifyArray($this->getArrayUrl(),1);
			$this->params 			= $this->verifyArray($this->getArrayUrl(),2);			
		}

		function getArrayUrl()
		{
			return $this->arrayUrl;
		}

		function verifyArray(array $array, int $key)
		{
			//verifica se a alguma string em uma determinada posição
			if(isset($array[$key]) && !empty($array[$key]))
			{
				return $array[$key];
			}else
			{
				return null;
			}
		}

		function getControlName()
		{
			
			return $this->controlName;
		}

		function getActionName()
		{
			return $this->actionName;
		}

		function getParams()
		{
			return $this->params;
		}

	}




?>