<?php




// function getSmallesNumber($string){
// 	$presplit = preg_split('/(.)(?!\1|$)\K/', $string);
// 	asort($presplit);
// 	//$presplit = array_keys(array_flip($presplit));
// 	//$presplit = array_keys(array_flip($presplit));
	


// 	$temp = array();
// 	$temp[] = "";
// 	$data = "";
		
// 	foreach($presplit as $key => $value){
// 		$getvalue = substr($value,-1,1);
// 		$gettemp = substr($temp[$key],-1,1);
// 		if($getvalue == $gettemp){
// 			//$presplit[$key-1] .= $value;
// 			//unset($presplit[$key]);	
// 		}
// 		$temp[] = $value;
		
// 	}
// 	echo "<pre>";print_r($presplit);
	
	
// 	foreach($presplit as $newkey => $newvalue){
// 		$getvalue = substr($newvalue,-1,1);
// 		$getsrlen = strlen($newvalue);
// 		$data .= $getsrlen.''.$getvalue.", ";
// 	}

// 	return $data;
// }


// echo getSmallesNumber("aaaabbcdeeeffaagagaaaiaa");


// $array1 = array(array(32, 45, 44), array(989, 223, 442));
// $array2 = array('Luis', 'Brandon');

// function get_index_merge($x, $y){
// 	$temp = array();
// 	$temp[] = $x;
// 	if(is_scalar($y)){
// 		$temp[] = $y;
// 	}else{
// 		foreach($y as $k => $v){
// 			$temp[] = $v;
// 		}
// 	}

// 	return $temp;
// }

// echo "<pre>"; print_r(array_map('get_index_merge', $array2, $array1));



// function primeNumber(int $arg){
	
// 	$count = 0;
// 	$num = 2;
// 	while($count < 15){
// 		$countdiv = 0;
// 		for($i = 1; $i < $arg; $i++){
// 			if($num % $i == 0){
// 				$countdiv++;
// 			}
// 		}
// 		if($countdiv < 3){
// 			echo $num.", ";
// 			$count++;
// 		}
// 		$num++;
// 	}

// }
// primeNumber(50);

// Closure

// $name = "Brandon";
// $getname = function($lname) use ($name){
// 	return "My name is ". $name ." ".$lname;
// };
// echo $getname("Puyod");




// class Person{
// 	public $name = "Brandon Johnson";
// 	public static $age = 2;
// 	public function getname(){
// 		return $this->name;
// 	}
// }

// $getYourName = function(){
// 	return $this->getname();
// };

// $newName = $getYourName->bindTo(new Person, 'Person');
// echo $newName() . " age of ". Person::$age;



// include('includes/Db.php');
// include('includes/User.php');

// $user = new User;
// $alls = $user->all();

// if(isset($_GET['id'])){
// 	$gets = $user->get($_GET['id']);
// 	echo "Name: <a href='tes.php?id=30'>". $gets['fname']."</a><br>";
// 	echo "Last Name: ". $gets['lname']."<br><br>";
// }else{
// 	foreach($alls as $all){
// 		echo "Name: <a href='tes.php?id=30'>". $all['fname']."</a><br>";
// 		echo "Last Name: ". $all['lname']."<br><br>";
// 	}
// }


?>

<script>

// class Person{
// 	name = "Brandon Johnson";
// 	getname = function(){
// 		return this.name;
// 	}
// }
// getYourName = function(){
// 	return this.getname();
// }

// newName = getYourName.bind(new Person, 'Person');
// console.log(newName());


// class A{
// 	name = "Brandon";
// 	getname = function(){
// 		return this.name;
// 	}
// }

// var getName = function(){
// 	return this.getname();
// }

// var newName = getName.bind(new A, 'A');
// console.log(newName());



// class User {
// 	constructor(email, name)
// 	{
// 		this.email = email;
// 		this.name = name;
// 	}
// }

// class Admin extends User {
// 	delete(user)
// 	{
// 		users = users.filter(u => {
// 			return u.email != user.email
// 		});
// 	}
// }

// var user1 = new User('test@test.com', 'test');
// var user2 = new User('test2@test.com', 'test2');
// var admin = new Admin('admin@test.com', 'admin');

// var users = [user1,user2,admin];

//cosole.log(users);




</script>