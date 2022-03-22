<?php

	//classe de tratamento de url

	namespace src\Route;

	class Tratament
	{
		protected $url;

		function __construct()
		{
			if(isset($_GET["url"]))
			{
				$strUrl = rtrim($_GET["url"], "/");
				
				//aceita somente caracter alphanumerico
				
				$this->url = preg_replace("/[^a-zA-Z0-9\/]/", "", $strUrl);
			}
			else
			{
				return false;
			}
		}


		public function getUrl()
		{
			return $this->url;
		}
	}	

?>