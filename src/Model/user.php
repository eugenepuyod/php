<?php

//namespace exam\src\Model;

//require_once($_SERVER['DOCUMENT_ROOT']."/exam/includes/Db.php");

class User extends Db {
	protected function getAllUsers(){
		$sql = "SELECT * FROM items";
		//$sql .= " WHERE id = 3";
		$result = $this->connect()->query($sql);

		//$test = $this->connect()->query($sql)->fetch_assoc();


		$numrows = $result->num_rows;

		if($numrows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$data[] = $row;

			}
			return $data;
		}
	}

}