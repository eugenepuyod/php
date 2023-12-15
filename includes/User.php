<?php
require "Db/Db.php";
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

	public function update(int $id, array $setValue){
		$newSetvalue = [];
		foreach($setValue as $key => $value){
			$newSetvalue[] .= $key."='$value'";
		}
		$newSetvalue = implode(", ",$newSetvalue);
		$sql = "UPDATE user SET $newSetvalue WHERE id = $id";
		$query = $this->connect()->query($sql);
		if($query){
			return "Item successfull added to database";
		}else{
			return "Item not saved";
		}
	}
	
	public function insert(array $item, array $value){
        $con = new mysqli("localhost", "root", "", "crud");
        $values = [];
        $items = implode(", ", $item);
        for($i = 0; $i<count($value); $i++){
            $values[] .= "'".$value[$i]."'";
        }
		$values = implode(", ",$values);
        if(count($item) === count($value)){
            $sql = "INSERT INTO user($items) VALUES($values)";
            $query = $con->query($sql);
            if($query){
                return $con->insert_id;
            }else{
                return "No item added to database";
            }
        }else{
            return "Item is not equal to the value";
        }
        
    }

}
