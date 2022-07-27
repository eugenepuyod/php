<?php

//require($_SERVER['DOCUMENT_ROOT']."/exam/src/Model/User.php");
//require_once($_SERVER['DOCUMENT_ROOT']."/exam/src/Model/User.php");

//namespace exam\src\Controller;
//use src\Model\User;


class UserController extends User {
	public function viewAllUser()
	{
		$datas = $this->getAllUsers();
		echo "<pre>";
		var_dump($datas);
		echo "</pre>";
	}
}