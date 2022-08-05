<?php

// https://www.w3resource.com/php-exercises/php-array-exercises.php

// strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
// stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
// strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)


// Getter and Setter



// class A{
// 	public static $parentid = 23432;
// }

// class Users extends A{
// 	private $user;
// 	private $email;
// 	public static $parentName = "Parent";

// 	public static $newuser = 516313221;

// 	function __construct($user, $email)
// 	{
// 		$this->user = $user;
// 		$this->email = $email;
// 	}

// 	public function getEmail(){
// 		if(strpos($this->email, '@')){
// 			return $this->email;
// 		}else{
// 			return "Invalid email address: $this->email.";
// 		}
// 	}

// 	public static function getuser(){
// 		return parent::$parentid;
// 	}

// }


// $getUsers = new Users('brandon', 'brandon@gmail.com');
// echo $getUsers->getEmail();
// echo "<br>";
// $myUsers = Users::getuser();
// echo $myUsers;





// class A{
// 	public $var = array();

// 	// function __set($name, $value)
// 	// {
// 	// 	$this->var[$name] = $value;
// 	// }

// 	// function __get($name)
// 	// {
// 	// 	return $this->var;
// 	// }
// }

// $getA = new A();
// $getA->var = "Hello";
// $getA->name = "Brandon";
// $getA->id = 237927389742;
// echo $getA->id;





// class Animal{
// 	private $aname;
// 	public function displayName(){
// 		return $this->aname;
// 	}

// }

// class Dog extends Animal{
// 	// public function __set($name, $value)
// 	// {
// 	// 	$this->aname = $value;
// 	// }
// 	// public function __get($name)
// 	// {
// 	// 	return $name;
// 	// }
// 	public function getname(){
// 		return $this->aname;
// 	}
// }

// $closure = function(){
// 	$this->aname = "Brands Johnson";
// 	echo $this->getname();
// };




// $getName = $closure->bindTo(new Dog, 'Dog');
// $getName();





// $colors = array(
// 	0 => 'Red',
// 	1 => 'Green',
// 	2 => 'White',
// 	3 => 'Black',
// 	4 => 'Red'
// );

// $newcolors = array_keys(array_flip($colors));

// echo "<pre>";
// print_r($newcolors);
// echo "</pre>";


// Write a PHP program to remove duplicate values from an array which contains only strings or only integers.
// $colors = array( 
// 	0 => 'Red', 
// 	1 => 'Green', 
// 	2 => 'White', 
// 	3 => 'Black', 
// 	4 => 'Red', 
//   ); 
  
//   $numbers = array( 
// 	0 => 100, 
// 	1 => 200, 
// 	2 => 100, 
// 	3 => -10, 
// 	4 => -10, 
// 	5 => 0, 
//   ); 
//   $uniq_colors = array_keys(array_flip($colors)); 
//   $uniq_numbers = array_keys(array_flip($numbers)); 
//   print_r($uniq_colors);
//   print_r($uniq_numbers);



// PHP function to floor decimal numbers with precision
// function floorDec($number, $precision, $separator)
// {
// 	$number_part=explode($separator, $number);


// 	$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);

	
// 	if($number_part[0]>=0)
// 		{$number_part[1]=floor($number_part[1]);}
// 	else
// 		{$number_part[1]=ceil($number_part[1]);}

// 	$ceil_number= array($number_part[0],$number_part[1]);
// 	return implode($separator,$ceil_number);
// }
// print_r(floorDec(1.155, 2, ".")."<br>");
// print_r(floorDec(-2.9636, 3, ".")."<br>");
// print_r(floorDec(100.25781, 4, ".")."<br>");



// function min_values_not_zero(Array $values) 
// {
// //echo  min(array_diff(array_map('intval', $values), array(0)));
// //echo min($values);
// }
// $arraynum = array(1, 2, 7, '-400', -300, 200);
// min_values_not_zero($arraynum);




// function getEvenNum(int $ints){
// 	$divcount = 0;
// 	for($i = 1; $i < $ints; $i++){
// 		if($i % 2 == 0){
// 			if($divcount < 10){
// 				echo $i . ", ";
// 			}
// 			$divcount++;
// 		}
// 	}
// }
// getEvenNum(50);



// function getEvenNum(int $ints){
// 	$divcount = 0;
// 	for($i = 1; $i < $ints; $i++){
// 		if($i % 2 == 0){
// 			if($divcount <= 5){
// 				echo $i . ", ";
// 			}
// 			$divcount++;
// 		}
// 	}
// }
// getEvenNum(50);




// // for loop with limit
// function getEvenNumber(int $ints){
// 	$even = array();
// 	for($i = 1; $i < $ints; $i++){
// 		// ($i % 2 == 0) = even
// 		// ($i % 2 != 0) = odd
// 		if($i % 2 == 0){
// 			$even[$i] = $i;
// 		}
// 	}
// 	// $arrayspliceEven is the splice $even[] return from 0 - 10;
// 	// still looping the array even[] untill it reach to loop 50
// 	$arrayspliceEven = array_slice($even, 0, 10);
	
// 	for($i = 0; $i < count($arrayspliceEven); $i++){
// 		echo $arrayspliceEven[$i] . ", ";
// 	}
// }
// getEvenNumber(50);


// closures

// class Classclosure{
// 	private $name = "Venice Puyod";
// 	public function getName(){
// 		return $this->name;
// 	}
// }
// $newname = "Brandon";
// $closure = function() use ($newname){
// 	echo $this->getName() . " and " .$newname;
// };

// $newclosure = function(){

// };

// $getClosure = $closure->bindTo(new Classclosure, 'Classclosure');
// $getClosure();
// echo "<br>";
// echo get_class($newclosure);





// class A{
// 	public $hi = "Hello";
// }

// $closure = function(){
// 	return $this->hi;
// };

// $getHi = $closure->bindTo(new A, 'A');
// echo $getHi();



// $hello = "Hello";

// $getHello = function($arg) use ($hello){
// 	echo $hello . $arg;
// };

// $getHello(" World");



// function getPrimeNumber($ints){
// 	$count = 0;
// 	$num = 2;
// 	while($count < 5){
// 		$divcount = 0;
// 		for($i = 1; $i < $ints; $i++){
// 			if($num % $i == 0){
// 				$divcount++;
// 			}
// 		}
// 		//$modulo = $divcount % $num;
// 		echo $divcount." - " .$num. ", <br>";
// 		//echo $divcount . ", ";
				
// 		if($divcount < 3){
// 			//echo $num . ", ";	
// 			//echo $divcount . ' - ' .$num. "<br>";
// 			$count++;
// 		}
		
// 		$num++;
// 	}
// }

// getPrimeNumber(50);



// function makeClosure(...$funcs){
// 	return function($test) use ($funcs){
// 		echo "<pre>";
// 		//$funcs = $test;
// 		//print_r($funcs);
// 		foreach($funcs as $func){
// 			print_r($func);
// 		}
// 		echo "<br>";
// 		print_r($test);
// 		echo "</pre>";
// 	};
// }

// $newMakeClosure = makeClosure(function($x){
// 								return $x + 5;
// 							});
// $newMakeClosure(3);



// function make_pipeline(...$funcs)
// {
//     return function($arg) use ($funcs)
//     {
		
// 		echo "<pre>";
// 		print_r($funcs);
// 		echo "</pre>";
// 		return -1;
//     };
// }

// $fun = make_pipeline( function($x) { return $x * 3; },
//                       function($x) { return $x + 1; },
//                       function($x) { return $x / 2; });
// echo $fun(3); # should print 5




// $var = function(){
// 	return "I am a " . func_get_arg(0);
// };
// print_r($var('programmer'));





// class Pipeline
// {
//     private $number;
//     public function __construct($say)
//     {
//         $this->number = $say;
//     }

//     function process(Closure $closure)
//     {
//         $next = function () use ($closure) {
//             foreach ($this->number as $say) {

//                 yield $closure($say);
//             }
//         };
//         return new self($next());
//     }

//     function result()
//     {
//         foreach ($this->number as $i) {

//             echo $i . "\n";
//         }
//     }
// }
// $pipe = new Pipeline([1, 2, 3]);

// $pipe->process(function ($no) {
//     return $no * 2;
// })->process(function ($no) {
//     return $no + 2;
// })->process(function ($no){
// 	return $no + 1;
// })->result();





// class TextInput
// {
// 	public $getNumber;
// 	public function add(string $text)
// 	{
// 		return $this->getNumber .= $text;
// 	}
// 	public function getValue(){
// 		return $this->getNumber;
// 	}
// }

// class NumericInput extends TextInput
// {
// 	public function add($ints)
// 	{
// 		if(is_numeric($ints))
// 		{
// 			return $this->getNumber .= $ints;
// 		}
// 	}
// }

// $input = new NumericInput();
// $input->add('1');
// $input->add('a');
// $input->add('0');
// $input->add('1');

// echo $input->getValue();





// function unique_names(array $array1, array $array2) : array
// {
//     $arrayMerge = array_merge($array1, $array2);
// 	$arrayUnique = array_unique($arrayMerge);

// 	return $arrayUnique;
// }

// $names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
// echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia





// echo "<pre>";
// var_dump(unique_names($arrayName));
// echo "</pre>";

// function groupByOwners(array $files)
// {
//     asort($files);
//     $fileArray = array();
//     $fileName = "";
//     $index = 0;

//     foreach($files as $key => $file){
//       if($file == $fileName){
//         $index++;
//         $fileArray[$file][$index] = $key;
//       }else{
//         $fileArray[$file] = array($key);
//       }

//       $fileName = $file;
//     }

//     return $fileArray;
// }

// $files = array
// (
//     "Input.txt" => "Randy",
//     "Code.py" => "Stan",
//     "Output.txt" => "Randy"
// );
// var_dump(groupByOwners($files));




// class LotoShupple {
// 	public function getLoto($arrayTemp){
// 	//$arrayTemp = array('7','42','27','37','8','22','33','3','2','18','21','30','32');
// 	//shuffle($arrayTemp);
// 	//asort($arrayTemp);
// 	$index = 0;
// 	$inputCombinations = "";
// 	for($i = 0; $i < count($arrayTemp); $i++){
// 		$inputCombinations .= $arrayTemp[$i] . ", ";
// 	}

// 	for($a = 0; $a < count($arrayTemp)-5; $a++)
// 		for($b = $a+1; $b < count($arrayTemp)-4; $b++)
// 			for($c = $b+1; $c < count($arrayTemp)-3; $c++)
// 				for($d = $c+1; $d < count($arrayTemp)-2; $d++)
// 					for($e = $d+1; $e < count($arrayTemp)-1; $e++)
// 						for($f = $e+1; $f < count($arrayTemp); $f++){
// 							$index++;
// 							echo "$arrayTemp[$a]-$arrayTemp[$b]-$arrayTemp[$c]-$arrayTemp[$d]-$arrayTemp[$e]-$arrayTemp[$f]<br>";
// 						}
// 	$totalAmount = 	$index * 20;
// 	echo "<hr>";
// 	echo "Combinations: $index<br>";
// 	echo "Price: 20.00<br>";
// 	echo "Total Amount: $totalAmount.00<br>";
// 	echo "Input Numbers: $inputCombinations";
// 	}
// }


// $loto = new LotoShupple();
// $loto->getLoto(array('7','42','27','37','8','22','50'));




// for($a=1; $a<50-3; $a++)
//     for($b=$a+1; $b<50-2; $b++)
//         for($c=$b+1; $c<50-1; $c++)
//             for($d=$c+1; $d<50; $d++)
//                 echo "$a $b $c $d<br>";



// function getFileExtention($file){
// 	$temp = "";
// 	$explodeFile = explode('.', $file);
// 	//$temp = end($explodeFile);
// 	$temp = current($explodeFile);
// 	return $temp;

// }
// $file = "test.txt";
// echo getFileExtention($file);

// // Get prime number

// function getEvenAndOdd($inst){
// 	$primeNum = "";
// 	$even = "";
// 	$odd = "";
// 	$count = 0;
// 	$num = 2;
// 	// Get Prime Numbers
// 	while($count < 15){
// 		$divCount = 0;
// 		for($i = 1; $i < $inst; $i++){
// 			if($num % $i == 0){
// 				$divCount++;
// 			}
// 		}
// 		if($divCount < 3){
// 			$primeNum .= $num . ", ";
// 			$count++;
// 		}
// 		$num++;
// 	}
// 	// Get Even and Odd Numbers
// 	for($i = 1; $i < $inst; $i++){
// 		if($i % 2 == 0){
// 			$even .= $i . ", ";
// 		}else{
// 			$odd .= $i . ", ";
// 		}
// 	}
// 	//echo "<pre>";
// 	echo "Even Numbers: " . $even;
// 	echo "<br>";
// 	echo "Odd Numbers: " . $odd;
// 	echo "<br>";
// 	echo "Prim Numbers: " . $primeNum;

// 	//echo "</pre>";
// }
// getEvenAndOdd(50);


// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");

// function array_merge_index($x, $y){
// 	$temp = array();
// 	$temp[] = $x;

// 	if(is_scalar($y)){
// 		$temp = $y;
// 	}else{
// 		foreach($y as $key => $z){
// 			$temp[] = $z;
// 		}
// 	}

// 	return $temp;
// }
// echo "<pre>";
// print_r(array_map('array_merge_index', $array2, $array1));
// echo "</pre>";

// OOP CRUD Start
// require_once("./includes/Db.php");
// use exam\includes\Db;

// class Db {
// 	private $servername;
// 	private $username;
// 	private $password;
// 	private $dbname;

// 	protected function connect()
// 	{
// 		$this->servername = "localhost";
// 		$this->username = "root";
// 		$this->password = "";
// 		$this->dbname = "test123";

// 		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
// 		return $conn;
// 	}

// }

// class Users extends Db {
// 	public function getAllUsers(){
// 		$sql = 'Select * from user';
// 		$result = $this->connect()->query($sql);
// 		$numrows = $result->num_rows;
// 		if($numrows > 0){
// 			while($row = $result->fetch_assoc()){
// 				$data[] = $row;
// 			}
// 			return $data;
// 		}
// 	}
// 	public function getSingleUser($id){
// 		$sql = 'Select * from user where id = ' . $id . '';
// 		$result = $this->connect()->query($sql);
// 		$numrows = $result->num_rows;
// 		if($numrows > 0)
// 		{
// 			$data = $result->fetch_assoc();
// 		}else{
// 			$data = "Item not found.";
// 		}
// 		return $data;
// 	}
// 	public function store(){
// 		$fname = $_POST['fname'];
// 		$lname = $_POST['lname'];
// 		$address = $_POST['address'];

// 		$sql = 'INSERT INTO user (fname, lname, address)';
// 		$sql .= 'VALUES ("'.$fname.'", "'.$lname.'", "'.$address.'")';
// 		$result = $this->connect()->query($sql);

// 		if($result){
// 			echo '<script>window.location.href="index.php"</script>';
// 		}
// 	}

// 	public function destroy($id){
// 		if($id){
// 			$sql = 'DELETE FROM user ';
// 			$sql .= ' WHERE id = '.$id;
// 			$result = $this->connect()->query($sql);
// 			if($result){
// 				echo '<script>window.location.href="index.php"</script>';
// 			}
// 		}
// 	}
// 	public function edit($id){
// 		$sql = 'Select * from user where id = ' . $id . '';
// 		$result = $this->connect()->query($sql);
// 		$numrows = $result->num_rows;
// 		if($numrows > 0)
// 		{
// 			$data = $result->fetch_assoc();
// 		}else{
// 			return false;
// 		}
// 		return $data;
// 	}

// 	public function update($id){
// 		$postid = $_POST['id'];
// 		$fname = $_POST['fname'];
// 		$lname = $_POST['lname'];
// 		$address = $_POST['address'];

// 		$sql = 'UPDATE user';
// 		$sql .= ' SET fname = "'.$fname.'", lname= "'.$lname.'", address="'.$address.'"';
// 		$sql .= ' WHERE id = '. $postid;

// 		$result = $this->connect()->query($sql);
// 		if($result){
// 			echo '<script>window.location.href="index.php"</script>';
// 		}
// 	}

// }

// class Listing extends Users {
// 	public function listAllUsers(){
// 		if($this->getAllUsers()){
// 			$getallusers = $this->getAllUsers();

// 				usort($getallusers, function ($a, $b){
// 					return $a['fname'] <=> $b['fname'];
// 				});


// 			$data = '';
// 			foreach($getallusers as $getalluser){
// 				$data .= '<div>';
// 					$data .= '<ul>';
// 						$data .= '<li>';
// 						$data .= '<a href="index.php?id='.$getalluser['id'].'">';
// 						$data .= 'Name: '. $getalluser['fname'] . '<br>';
// 						$data .= '</a>';
// 						$data .= 'Last Name: '. $getalluser['lname'] . '<br>';
// 						$data .= 'Address: '. $getalluser['address'] . '<br>';
// 						$data .= '</li>';
// 					$data .= '</ul>';

// 				$data .= '</div>';
// 			}
// 			return $data;
// 		}
// 	}


// 	public function listSingleUser($id){

// 		$data = '';
// 		$getSingleUser = $this->getSingleUser($id);

// 		if(count($getSingleUser) > 0){
// 			$data .= '<div>';
// 				$data .= '<ul>';
// 					$data .= '<li>';
// 					$data .= 'Name: '. $getSingleUser['fname'] . '<br>';
// 					$data .= 'Last Name: '. $getSingleUser['lname'] . '<br>';
// 					$data .= 'Address: '. $getSingleUser['address'] . '<br><br>';
// 					$data .= '<a href="index.php?updateid='.$id.'">Update</a> | <a href="index.php?deleteid='.$id.'">Delete</a>';
// 					$data .= '</li>';
// 				$data .= '</ul>';
// 			$data .= '</div>';

// 		}

// 		return $data;
// 	}

// 	public function addUser(){

// 		$display = 'block';
// 		$fnameValidation = '<span></span>';
// 		$lnameValidation = '<span></span>';
// 		$AddressValidation = '<span></span>';
// 		$fname = '';
// 		$lname = '';
// 		$address = '';



// 		// Add items
// 		if(isset($_POST['Add'])){

// 			$fname = $_POST['fname'];
// 			$lname = $_POST['lname'];
// 			$address = $_POST['address'];

// 			if(empty($fname)){
// 				$fnameValidation = '<span style="color:red">Name field not be empty!</span>';
// 			}
// 			if(empty($lname)){
// 				$lnameValidation = '<span style="color:red">Last Name field not be empty!</span>';
// 			}
// 			if(empty($address)){
// 				$AddressValidation = '<span style="color:red">Last Name field not be empty!</span>';
// 			}


// 			if(!empty($fname) && !empty($lname) && !empty($address)){
// 				self::store();
// 			}

// 		}

// 		// Update items
// 		$idonupdate = 0;
// 		if(isset($_POST['Update'])){
// 			$idonupdate = $_POST['id'];
// 			$fname = $_POST['fname'];
// 			$lname = $_POST['lname'];
// 			$address = $_POST['address'];

// 			if(empty($fname)){
// 				$fnameValidation = '<span style="color:red">Name field not be empty!</span>';
// 			}
// 			if(empty($lname)){
// 				$lnameValidation = '<span style="color:red">Last Name field not be empty!</span>';
// 			}
// 			if(empty($address)){
// 				$AddressValidation = '<span style="color:red">Last Name field not be empty!</span>';
// 			}


// 			if(!empty($fname) && !empty($lname) && !empty($address)){
// 				Listing::update($idonupdate);
// 			}

// 		}

// 		// Check submit button values
// 		$submitButton = '';
// 		if(isset($_GET['updateid'])){
// 			$display = 'block';
// 			$idonupdate = $_GET['updateid'];
// 			$updateUsers = Users::edit($_GET['updateid']);
// 			if($updateUsers){
// 				$fname = $updateUsers['fname'];
// 				$lname = $updateUsers['lname'];
// 				$address = $updateUsers['address'];
// 			}
// 			$submitButton = 'Update';
// 		}else{
// 			$submitButton = 'Add';
// 		}
// 		if(isset($_GET['id'])){
// 			$display = 'none';
// 		}


// 		$data = '<div style="display:'.$display.';">';
// 		$data .= '<form action="" method="POST">';
// 		$data .= '<ul>';
// 			$data .= '<li>';
// 			$data .= '<input type="hidden" name="id" value="'.$idonupdate.'">';
// 			$data .= 'Name: <input type="text" name="fname" value="'.$fname.'"><br>';
// 			$data .= $fnameValidation . "<br>";
// 			$data .= 'Last Name: <input type="text" name="lname" value="'.$lname.'"><br>';
// 			$data .= $lnameValidation . "<br>";
// 			$data .= 'Address: <input type="text" name="address" value="'.$address.'"><br>';
// 			$data .= $AddressValidation . "<br>";
// 			$data .= '</li>';
// 		$data .= '</ul>';
// 		$data .= '<ul>';
// 			$data .= '<li>';
// 			$data .= '<input type="submit" name="'.$submitButton.'"/>';
// 			$data .= '</li>';
// 		$data .= '</ul>';
// 		$data .= '</form>';
// 		$data .= '<hr>';
// 		$data .= '</div>';

// 		return $data;
// 	}
// }

// // instance
// $listing = new Listing();


// // List View
// echo $listing->addUser();

// if(isset($_GET['id'])){
// 	echo $listing->listSingleUser($_GET['id']);
// }elseif(isset($_GET['deleteid'])){
// 	echo $listing->listSingleUser($_GET['deleteid']);
// }elseif(isset($_GET['updateid'])){
// 	// Empty script
// }else{
// 	echo $listing->listAllUsers();
// }

// // Routes
// // Delete items
//  if(isset($_GET['deleteid'])){
// 	$deletename = $listing->getSingleUser($_GET['deleteid']);
// 	$confirm = '<script>var confirm = confirm("Are you sure you want to delete '. $deletename['fname'] .'?");';
// 	$confirm .=' if(confirm){ window.location.href="index.php?deleteconfirm='.$_GET['deleteid'].'"}else{ window.location.href="index.php?id='.$_GET['deleteid'].'"}';
// 	$confirm .= ' </script>';
// 	echo $confirm;
//  }
// // Delete confirm
//  if(isset($_GET['deleteconfirm'])){
// 	$listing->destroy($_GET['deleteconfirm']);
//  }
// OOP CRUD End






// $num = 0;
// updateNum($num);
// echo $num;

// function updateNum(&$number){
// 	$number++;
// }


// function getStrlen(string $string){
// 	$preg_split = preg_split('/(.)(?!\1|$)\K/', $string);
// 	$stringVal = "";
// 	foreach($preg_split as $preg){
// 		$strlen = strlen($preg);
// 		$substr = substr($preg, -1, 1);

// 		$stringVal .= $substr ."". $strlen . " ";
// 	}



// 	echo $stringVal;

// }
// getStrlen('aaabbcddefghhh');



// function getEvenOrOdd(int $int){
// 	for($i = 1; $i < $int; $i++){
// 		if($i % 2 == 0){
// 			echo "Even: " . $i . ", <br>";
// 		}else{
// 			echo "Odd: " . $i . ", <br>";
// 		}
// 	}
// }
// getEvenOrOdd(50);



// function getprimenumber($ints)
// {
// 	$num = 2;
// 	$count = 0;
// 	while($count < 15){
// 		$divcount = 0;
// 		for($i = 1; $i < $ints; $i++){
// 			if($num % $i == 0){
// 				$divcount++;
// 			}
// 		}

// 		if($divcount < 3){
// 			echo $num . ", ";
// 			$count++;
// 		}
// 		$num++;
// 	}
// }

// getprimenumber(50);




// function getLowestInt(Array $numbers):int
// {
// 	for($i = 0; $i < count($numbers); $i++)
// 	{
// 		if(!(is_numeric($numbers[$i])))
// 		{
// 			unset($numbers[$i]);
// 		}
// 	}

// 	asort($numbers);
// 	$index = array_key_first($numbers);
// 	return intval($numbers[$index]);

// }
// echo getLowestInt(array(1,3,4,-12,0,99,'-100s'));

// //Write a PHP script to get the largest key in an array.

// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
// "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
// "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
// "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
// "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;

// $longestLen = "";
// foreach($ceu as $key => $ce)
// {
// 	$strlenCurrent = strlen($longestLen);
// 	$strlenSearch = strlen($key);

// 	if($strlenSearch > $strlenCurrent)
// 	{
// 		$longestLen = $key;
// 	}
// 	elseif($strlenSearch == $strlenCurrent)
// 	{
// 		$longestLen = $key;
// 	}
// }

// print_r($longestLen);



// //Write a PHP script to get the largest key in an array.

// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
// "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
// "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
// "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
// "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
// $max_key = max( array_keys( $ceu) );

// echo $max_key."\n";

// //  Write a PHP script to generate unique random numbers within a range
// $numbers = range(11, 20);
// shuffle($numbers);

// for($x = 0; $x < 3; $x++)
// {
// 	echo $numbers[$x] . " ";
// }




// $files = array
// (
    // "Input.txt" => "Randy",
    // "Code.py" => "Stan",
    // "Output.txt" => "Randy",
	// "Inputs.txt" => "Randy",

// );
// asort($files);

// echo "<pre>";
// print_r($files);
// echo "</pre>";

// $currentName = "";
// $newFiles = array();
// $index = 0;
// foreach($files as $key => $file){

// 	if(!empty($file))
// 	{

// 		if($file == $currentName)
// 		{
// 			$index++;
// 			$newFiles[$file][$index] = $key;
// 		}
// 		else{
// 			$newFiles[$file] = array($key);
// 		}

// 		$currentName = $file;

// 	}

// }

// echo "<pre>";
// print_r($newFiles);
// echo "</pre>";





// // Write a PHP script to get the shortest/longest string length from an array
// $my_array = array("abcd","abc","de","hjjj","g","wer");
// $new_array = array_map('strlen', $my_array);

// $min = min($new_array);
// $max = max($new_array);

// echo "<pre>";
// print_r(($max));
// echo "</pre>";
// // Show maximum and minimum string length using max() function and min() function
// // echo "The shortest array length is " . min($new_array) .
// // ". The longest array length is " . max($new_array).'.';





// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
//echo implode(",",range(200,250,5))."<br>";
//echo implode(",",range(200,250,4));


// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// $newColor = array();
// foreach($Color as $key => $col)
// {
// 	$newColor[$key] = strtolower($col);
// }

// echo "<pre>";
// print_r($newColor);
// echo "</pre>";

// foreach($Color as $key => $col)
// {
// 	$newColor[$key] = strtoupper($col);
// }

// echo "<pre>";
// print_r($newColor);
// echo "</pre>";



// Short Methods
// $arrayGiven = "5,3,1,3,8,7,4,1,1,3";
// $arrayGiExplode = explode(',', $arrayGiven);

// arsort($arrayGiExplode);

// echo "<pre>";
// print_r($arrayGiExplode);
// echo "</pre>";

// Long Methods
// function columns($uarr)
// {
// $n=$uarr;
// if (count($n) == 0)
// return array();
// else if (count($n) == 1)
// return array_chunk($n[0], 1);

// array_unshift($uarr, NULL);

// $transpose = call_user_func_array('array_map', $uarr);
// return array_map('array_filter', $transpose);
// }

// function bead_sort($uarr)
// {
// foreach ($uarr as $e)
// $poles []= array_fill(0, $e, 1);
// return array_map('count', columns(columns($poles)));
// }


// echo 'Original Array : '.'<br>
// ';
// print_r(array(5,3,1,3,8,7,4,1,1,3));
// echo '
// '.'<br> After Bead sort : '.'<br>
// ';
// print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));




// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");

// function array_merge_by_idex($x, $y){
// 	$temp = array();
// 	$temp[] = $x;

// 	if(is_scalar($y))
// 	{
// 		$temp[] = $y;
// 	}
// 	else
// 	{
// 		foreach($y as $k => $v)
// 		{
// 			$temp[] = $v;
// 		}
// 	}
// 	return $temp;
// }

//  $mergeArray = array_map('array_merge_by_idex', $array2,$array1);

// echo "<pre>";
// print_r($mergeArray);
// echo "</pre>";




// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");
// function merge_arrays_by_index($x, $y)
// {
// $temp = array(); $temp[] = $x; if(is_scalar($y))
// {
// $temp[] = $y;
// }
// else
// {
// foreach($y as $k => $v)
// {
// $temp[] = $v;
// }
// }
// return $temp;
// }
// echo '<pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));



// $totalvalue = 0;
// //$arrayNumber = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
// $arrayNumber = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// $explodeNumber = explode(', ', $arrayNumber);
// sort($explodeNumber);
// foreach($explodeNumber as $arrayNum){
// 	$totalvalue += $arrayNum;
// }

// $arrayCount = count($explodeNumber);
// $average = $totalvalue/$arrayCount;
// // Averate Temperatures:
// echo "Average is: " . $average."<br>";

// // Lowest Temperatures:
// $lowestTemp = "";
// for($i = 0; $i < 5; $i++){
// 	$lowestTemp .= $explodeNumber[$i] . ", ";
// }

// echo "List of seven lowest temperatures: ". $lowestTemp. "<br>";

// // Highest Temperatures:
// $HighestTemp = "";
// for($i = ($arrayCount-5); $i < $arrayCount; $i++){
// 	$HighestTemp .= $explodeNumber[$i] . ", ";
// }

// echo "List of seven highest temperatures: ". $HighestTemp;




// $arrayItems = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

// echo "a) ascending order sort by value";
// asort($arrayItems);
// echo "<pre>";
// print_r($arrayItems);
// echo "</pre>";
// echo "b) ascending order sort by Key";
// ksort($arrayItems);
// echo "<pre>";
// print_r($arrayItems);
// echo "</pre>";
// echo "c) descending order sorting by Value";
// arsort($arrayItems);
// echo "<pre>";
// print_r($arrayItems);
// echo "</pre>";
// echo "d) descending order sorting by Key";
// krsort($arrayItems);
// echo "<pre>";
// print_r($arrayItems);
// echo "</pre>";



// $arrayNumber = array(1, 2, 3, 4, 5 );

// $inserted = "$";
// array_splice($arrayNumber, 3, 0, $inserted);
// //unset($arrayNumber[4]);

// foreach($arrayNumber as $num)
// echo $num ." ";




// function myfunction($a, $b){
// 	echo $b ." : ". $a ."<br>";
// }

// $jsonReturn = '{"Title": "The Cuckoos Calling",
// 	"Author": "Robert Galbraith",
// 	"Detail": {
// 	"Publisher": "Little Brown"
// 	}
// }';

// $jsondecode = json_decode($jsonReturn, true);

// array_walk_recursive($jsondecode, 'myfunction');



// function getjson($key, $value){
// 	echo $value ." : ". $key ."<br>";
// }

// $a = '{
// 		"Title": "The Cuckoos Calling",
// 		"Author": "Robert Galbraith",
// 		"Detail":
// 		{
// 			"Publisher": "Little Brown"
// 		}
// 	}';

// $jsonvalue = json_decode($a, true);
// array_walk_recursive($jsonvalue, 'getjson');


// function w3rfunction($value,$key)
// {
// 	echo "$key : $value"."<br>";
// }

// $a = '{
// 	"Title": "The Cuckoos Calling",
// 	"Author": "Robert Galbraith",
// 	"Detail":
// 	{
// 		"Publisher": "Little Brown"
// 	}
// }';
// $j1 = json_decode($a,true);

// array_walk_recursive($j1,"w3rfunction");




// $original = array( '1','2','3','4','5' );

// foreach($original as $orig)
// echo $orig . ", ";

// $inserted = '$';

// array_splice($original, 3, 0, $inserted);
// unset($original[4]);


// foreach($original as $orig)
// echo $orig . ", ";






// $original = array( '1','2','3','4','5' );
// echo 'Original array : '."\n";
// foreach ($original as $x)
// {echo "$x ";}

// $inserted = '$';
// array_splice( $original, 3, 0, $inserted );
// echo " \n After inserting '$' the array is : "."\n";

// foreach ($original as $x)
// {echo "$x ";}
// echo "\n"



// function getprimenumber($ints)
// {
// 	$count = 0;
// 	$num = 2;

// 	while($count < 15)
// 	{
// 		$divcount = 0;


// 		for($i = 1; $i < $ints; $i++)
// 		{
// 			if(($num % $i) ==  0)
// 			{
// 				$divcount++;

// 			}
// 		}

// 		if($divcount < 3)
// 		{
// 			echo "<div style='color:red'>" . $divcount . "</div>";
// 			echo $num . ", ";
// 			$count = $count+1;


// 		}

// 		$num = $num+1;
// 	}
// }

// getprimenumber(50);



// function getindex($ints)
// {

// 	$num = 2;
// 	$count = 0;
// 	while($count < 15){
// 		$divcount = 0;
// 		for($i=1; $i<$ints; $i++)
// 		{
// 			if(($num % $i) == 0)
// 			{
// 				$divcount++;
// 			}
// 		}

// 		if($divcount < 3)
// 		{
// 			echo $num . ", ";
// 			$count = $count+1;
// 		}

// 		$num = $num+1;
// 	}

// }

//print(getindex(50));



// $divc = 0;
// if((8 % 3) == 0)
// {
// 	echo "not modulus";
// 	$divc++;
// }


// echo $divc;


// function getindexar()
// {
// 	$array = array(
// 		array(3,2,3,5,7,6),
// 		array(5,1,5,7,8,5),
// 		array(2,6,4,2,6,7),
// 		array(9,4,5,2,4,5)
// 	);

// 	usort($array, function($a,$b){
// 		return $a[1] <=> $b[1];
// 	});


// 	echo "<pre>";
// 	print_r($array);
// 	echo "</pre>";


// }

//getindexar();

// function isthisprime($ints)
// {
// 	$num = 3;
// 	$count = 0;

// 	while($count < 1000)
// 	{
// 		$divcount = 0;
// 		for($i = 1; $i < $ints; $i++)
// 		{
// 			if(($num % $i) == 0)
// 			{
// 				$divcount++;
// 			}
// 		}
// 		if($divcount < 3)
// 		{
// 			echo $num . ", ";
// 			$count = $count+1;
// 		}

// 		$num = $num+1;
// 	}

// }
// isthisprime(1000);


// function getNearestZero(array $nearest)
// {
// 	$nzero = 0;
// 	if(empty($nearest))
// 	{
// 		return 0;
// 	}
// 	for($i = 0; $i < count($nearest); $i++)
// 	{
// 		if($nzero === 0)
// 		{
// 			$nzero = $nearest[$i];
// 		}
// 		else if($nearest[$i] > 0 && $nearest[$i] <= abs($nzero))
// 		{
// 			$nzero = $nearest[$i];
// 		}
// 		else if($nearest[$i] < 0 && -$nearest[$i] < abs($nzero))
// 		{
// 			$nzero = $nearest[$i];
// 		}
// 	}
// 	echo $nzero;
// }
//getNearestZero(array(3,2,5,7,5,2,-1,5,6,8,4,2));

// function getNumberOfIndex($string)
// {
// 	$pregsplit = preg_split('/(.)(?!\1|$)\K/', $string);
// 	$newstring = "";
// 	foreach($pregsplit as $split)
// 	{
// 		$substr = substr($split, -1, 1);
// 		$strlen = strlen($split);

// 		$newstring .= $strlen .''. $substr;
// 	}

// 	echo $newstring;
// }
//getNumberOfIndex('aaaabbacccc');


/*
function funA(){
	echo "funA";
}
function funB(){
	echo "funA";
}
funA();
funB();
funa();
*/

// $a = array(
//   array(
//     'id' => 5698,
//     'first_name' => 'Peter',
//     'last_name' => 'Griffin',
//   ),
//   array(
//     'id' => 4767,
//     'first_name' => 'Ben',
//     'last_name' => 'Smith',
//   ),
//   array(
//     'id' => 3809,
//     'first_name' => 'Joe',
//     'last_name' => 'Doe',
//   )
// );

// usort($a, function($a,$b){
// 	return $a <=> $b;
// });

// $last_names = array_column($a, 'id');



// echo '<pre>';
// //print_r($a);
// print_r($last_names);

// echo '</pre>';

// echo "<p>usort()</p>";

// $as = array(
// 	array(
// 	'id' => 5698,
// 	'first_name' => 'Peter',
// 	'last_name' => 'Griffin',
// 	),
// 	array(
// 	'id' => 4767,
// 	'first_name' => 'Ben',
// 	'last_name' => 'Smith',
// 	),
// 	array(
// 	'id' => 3809,
// 	'first_name' => 'Joe',
// 	'last_name' => 'Doe',
// 	)
// );


// usort($as, function($as, $b){
// 	return $as['id'] <=> $b['last_name'];
// });


// foreach($as as $key =>  $a){
// 	echo $a['first_name']. "<br>";
// }

// echo "<pre>";
// print_r($as);
// echo "</pre>";


// example: 'aaabbcccddddeff'
// answer: '3a 2b 3c 4d 1e 2f'

// function getstring($string) {
// 	$preg_split = preg_split('/(.)(?!\1|$)\K/', $string);


// 	foreach($preg_split as $preg){
// 		$strlen = strlen($preg);
// 		echo "<pre>";
// 		print_r($strlen);
// 		echo "</pre>";

// 	}

// }

// getstring('aaabbcccddddeffab');



// interface Level {
// 	public function level();
// }


// abstract class Person implements Level {
// 	public $ability = [];
// 	public $level;
// 	public $height;
// 	public $comflection;

// 	public function level()
// 	{
// 		return $this->level;
// 	}
// }

// trait Capable{
// 	public $analizingcodes;
// }


// Class Eugene extends Person {
// 	use Capable;

// 	public $name;
// 	public $pass;
// 	public $email;

// 	private $type;
// 	protected $attitude;

// 	public $ability = ['solving','coding', 'sharp mind'];

// 	public function __toString()
// 	{
// 		$tring = "My name is: " . $this->name . "\n";
// 		$tring .= "My password: " . $this->pass . "\n";
// 		return $tring;
// 	}

// 	public function getNam()
// 	{
// 		return $this->name;
// 	}


// }


// $will = new Eugene;
// $will->name = "Eugene";
// $will->pass = "asdfasdf";

// echo "<pre>";
// echo $will;
// echo "</pre>";






// namespace

// require 'src/Model/Customer.php';
// use Exam\Model\Customer;
// use Exam\Model\User;

// $customer = new Customer('bob');
// $user = new User('Eugene');
// echo $customer->getName()."\n";
// echo $user->getName()."\n";




// class Book {
// 	public $bookname;
// 	public $bookauthor;

// 	const BR = '<br />';

// 	public function __construct($name, $author)
// 	{
// 		$this->bookname = $name;
// 		$this->bookauthor = $author;
// 	}

// 	public function getNameAuthor()
// 	{
// 		return $this->bookname . ' - ' . $this->bookauthor . self::BR;
// 	}
// }

// trait getrait {
// 	public function getname(){
// 		return $this->bookname . ' - ' . $this->bookauthor . self::BR;
// 	}
// }

// class BookFactory extends Book {
// 	use getrait;

// 	public sta ticfunction create($name, $author)
// 	{
// 		return new Book($name, $author);
// 	}
// }

// $bookfactorydetail = new BookFactory("Human History", "Eugene Puyod");
// $book1 = BookFactory::create('The Human Effect', 'Jonathan Golden');


// echo "<pre>";
// echo $book1->getNameAuthor();
// echo $bookfactorydetail->getname();
// echo "</pre>";







// require("includes/Db.php");
// require("src/Model/user.php");
// require("src/Controller/userController.php");



// $user = new UserController();
// $user->viewAllUser();








?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
</head>
<body>

<script type="text/javascript">
jQuery(document).ready(function(){
/*
function consfuncs()
{
var funcs = [];
for(var i = 0; i < 10; i++)

	funcs = function ()
	{
		console.log(i);
		return i;
	}
	//console.log(funcs);
	return funcs;

}

var funcs = consfuncs();
funcs[5]();
*/
/*
function constfuncs() {
 	var funcs = [];
 	for (var i = 0; i < 10; i++)
     	funcs = function(){ return i; };
 	return funcs;
}

/*
var funcs = constfuncs();
funcs[5]();


var funcs = constfuncs();

funcs[1]();

*/

/*
function makeFunc() {
  var name = 'Mozilla';
  function displayName() {
    alert(name);
  }
  return displayName;
}

var myFunc = makeFunc();
myFunc();



*/

})

// -----------   Prototypal Inheritance  --------------
// Contructor
function Bear(type)
{
	this.type = type;
}

Bear.prototype.growl = function(){
	console.log('The ' + this.type + ' bear say grrr');
}

function Grizzly(type) {
	Bear.call(this, type);
}
// difference between classical and prototypal bellow
Grizzly.prototype = Object.create(Bear.prototype);
//Grizzly.prototype.growl = function(){
//	console.log("on the grizzly.prototype");
//}

// Intances
//var grizzly = new Bear('grizzly');
var grizzly = new Grizzly('grizzly');
var polar = new Bear('polar');


//console.log(grizzly.growl(), polar.growl());
//grizzly.growl = function(){ console.log("Overide this");}
console.log(grizzly.growl());

// -----------   Prototypal Inheritance  --------------









/*
// ------------- Classical Inheritance --------------
function inherits(ctor, superCtor){
	ctor.super_ = superCtor;
	ctor.prototype = Object.create(superCtor.prototype, {
		constructor: {
			value: ctor,
			enumerable:false,
			writable: true,
			configurable: true
		}
	});
}


// Constructor
var Person = function(name){
	this.name = name.toLowerCase();
}


Person.prototype.sayName = function(){
	console.log("Hi my name is "+ this.name + "!");
}

// Intancess
var john = new Person("john");
var bobby = new Person("bobby");

john.sayName();


var Musician = function(name, instrument){
	//this.name = name;
	//Person.call(this, name);
	Musician.super_.call(this, name);
	this.instrument = instrument;
}

inherits(Musician, Person);

Musician.prototype.getInstrument = function(){
	console.log(this.instrument);
}


Musician.prototype.shoutName = function(){
	console.log("My name is "+ this.name + "!!!!");
}

var julia = new Musician("JuliA", "Trumbo");

julia.sayName();
julia.getInstrument();
julia.shoutName();

delete Musician.prototype.shoutName;
// ------------- Classical Inheritance --------------
*/
/*
function makeFunction()
{
	var name = "Eugene";

	function getName()
	{
		alert(name);
	}
	return getName();
}

var myFunction = makeFunction();
myFunction();
*/
/*
class Randomclass {
	#privateField;

	constructor()
	{
		this.#privateField = 101;
	}

	getPrivate()
	{
		return this.#privateField;
	}
}

const classInstance = new Randomclass();
alert(classInstance.getPrivate());
console.log(classInstance.#privateField);
*/

/*
function constfuncs()
{
	var funcs = [];
	for(var i = 0; i < 10; i++)

		funcs = function() {
			return i;
		}

	return funcs;

}

var funcs = constfuncs();
funcs[3]()
*/


</script>

</body>
</html>
