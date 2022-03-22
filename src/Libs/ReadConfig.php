<?php

namespace src\Libs;

class ReadConfig
{
	private $objConfig;

	function __construct()
	{
		$file = file_get_contents("src/config.json", true);
		$this->objConfig = json_decode($file);
	}

	public function getDBConfig()
	{
		return (object) $this->objConfig->DB;
	}

	public function getAppHost()
	{
		return (object) $this->objConfig->APPHOST;
	}
}