<?php
// Users
class User extends Db {
	public function all(){
		$sql = "SELECT * FROM user";
		$query = $this->connect()->query($sql);
		$numrows = $query->num_rows;
		$data = array();
		if($numrows > 0){
			while($row = $query->fetch_assoc()){
				$data[] = $row;
			}
		}else{
			$data = "Item not found";
		}
		return $data;
	}
	public function get(int $id){
		$sql = "SELECT * FROM user WHERE id = " .$id;
		$query = $this->connect()->query($sql);
		$numrows = $query->num_rows;
		$data = array();
		if($numrows > 0){
			$data =  $query->fetch_assoc();
		}else{
			$data = "Item not found";
		}
		return $data;
	}
}