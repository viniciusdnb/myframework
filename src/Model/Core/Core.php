<?php

	namespace src\Model\Core;

	use src\Libs\Connection;
	use PDOException;
	use Exception;

	abstract class Core
	{
		private $connection;

		function __construct()
		{
			$this->connection = Connection::getConnection();
		}

		public function abstractSelectQuery($sql)
		{
			if(!empty($sql))
			{	
				try
				{
					return $this->connection->query($sql);
				}
				catch(PDOException $ex)
				{
					throw new Exception("nao foi possivel fazer a consulta no banco de dados \n ERRO: mensagem "  . $ex->getMessage() .  " CODE: " . $ex->getCode(), 500);
				}
			}

			
		}

		public function abstractInsert(){}
		public function abstractDelete(){}
		public function abstractUpdate(){}
	}

?>