<?php

include_once __DIR__ . "/vendor/autoload.php";

use src\Libs\Connection;

use src\Route\Start;
echo "<pre>";
try
{
	$start = new Start;
	

}
catch(\Exception $ex)
{
	echo "erro: " . $ex->getMessage() . " codigo: " . $ex->getCode(); 
}