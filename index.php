<?php

include_once __DIR__ . "/vendor/autoload.php";


use src\Route\Start;

try
{
	$start = new Start;
}
catch(\Exception $ex)
{
	echo "erro: " . $ex->getMessage() . " codigo: " . $ex->getCode(); 
}