<?php

class Model extends Database
{
    protected $_model;
    protected $objDatabase = null;

    function __construct()
    {
    	if(!$this->objDatabase)
			$this->objDatabase = new Database();
    }

    function __destruct()
    {
		$this->objDatabase = null;
    }
}