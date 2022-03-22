<?php

	namespace src\Route;

	use Exception;
	use src\Route\Define;

	//classe que starta os objetos controller

	class Start
	{
		private $objDefine;
		private $objController;		
		private $action;
		private $params;
		private $nameController;

		function __construct()
		{
			$this->objDefine = new Define;
			$this->nameController = $this->objDefine->getControlName();
			$this->action = $this->objDefine->getActionName();
			$this->params = $this->objDefine->getParams();
			$this->start();			
		}

		function start()
		{
			if(isset($this->nameController))
			{
				//inicia objeto controller
				$this->startObjController($this->nameController);
				//inicia a acao do controller
				$this->starActionController($this->action);
			}
			else
			{
				throw new Exception("Erro desconhecido", 500);
			}
			
		}

		function startObjController($nameController)
		{
			$nameClassControl = ucfirst($nameController). "Controller";
			$controllerFile = $nameClassControl . ".php";
			
			//verifica se o arquivo existe
			if(!file_exists("src/Controller/" . $controllerFile))
			{
				throw new Exception("Pagina nao encontrada Erro:. Desculpe o Arquivo não Existe", 404);	
				
			}
			else
			{
				//verifica se a classe existe passando o caminho do arquivo
				if(!class_exists("\\src\Controller\\" . $nameClassControl))
				{
					throw new Exception("Pagina não encontrada Erro.: Desculpe a Classe nao foi implementada", 501);
				}
				else
				{
					$nameClassControl = "\\src\Controller\\" . $nameClassControl;
					$this->objController = new $nameClassControl;
				}
			}
		}

		function starActionController()
		{
			if(isset($this->action ) && method_exists($this->getObjController(), $this->action))
			{			
				$this->getObjController()->{$this->action}($this->params);
				return;
			}
			elseif(method_exists($this->objController, "index"))
			{
				$this->getObjController()->index();
				return;
					
			}else
			{
				throw new Exception("Pagina não encontrada Erro.: Desculpe a Acao nao implementada", 406);
			}
		}
		function getObjController()
		{
			return $this->objController;
		}
	
	}
?>