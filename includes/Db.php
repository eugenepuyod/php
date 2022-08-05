<?php
//namespace exam\includes;

class Db {
	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function connect()
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		//$this->dbname = "crudvue2";
		$this->dbname = "test123";
		

		$conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname);
		return $conn;
	}

}


