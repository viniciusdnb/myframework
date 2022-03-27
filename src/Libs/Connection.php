<?php

namespace src\Libs;

use PDO;
use PDOException;
use src\Libs\ReadConfig;


class Connection
{
	private static $connection;	
	
	public static function getConnection()
	{
		$Config = new ReadConfig;
		$dbConfig = $Config->getDBConfig();
		
		$dsn = $dbConfig->dbDriver . ":dbname=" . $dbConfig->dbName . ";host=" . $dbConfig->dbHost;
		
		try
		{
			if(!isset($connection))
			{
				$connection = new PDO($dsn, $dbConfig->dbUser, $dbConfig->dbPass);
				$connection->setAttribute(PDO::ATTR_ERRMODE, 						PDO::ERRMODE_EXCEPTION);
				$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$connection->setAttribute(PDO::ATTR_PERSISTENT, 				true);
				$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, 	false);

				return $connection;		
			}
		}
		catch(PDOException $ex)
		{
			echo "menssagem: " . $ex->getMessage() . " codigo: " . $ex->getCode();
		}

	}
}



?>