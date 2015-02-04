<?php
define('UP', '../');
define('ROOT', dirname(dirname(__FILE__)).'/');
define('CRLF', "\r\n");

$url = $_GET['url'];


try
{
	require_once(ROOT . 'library/bootstrap.php');
}
catch(Exception $e)
{
	echo 'Caught Exception: ' . $e->getMessage() . "\n";
}