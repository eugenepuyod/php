<?php
class Db{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "crud";

    protected function connect(){
        $con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        return $con;
    }

}

