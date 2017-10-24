<?php

class Db
{
	public $db;
	function __construct()
	{
		$this->db = new mysqli(
			"localhost", 
			"root",
			"",
			"php_class"
			);

		if (!$this->db) {
			exit('Cannot connect to the database.');
		}
	}
}