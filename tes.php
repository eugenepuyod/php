<?php
include('includes/Db.php');
include('includes/User.php');

$user = new User;
$alls = $user->all();

if(isset($_GET['id'])){
	$gets = $user->get($_GET['id']);
	echo "Name: <a href='tes.php?id=30'>". $gets['fname']."</a><br>";
	echo "Last Name: ". $gets['lname']."<br><br>";
}else{
	foreach($alls as $all){
		echo "Name: <a href='tes.php?id=30'>". $all['fname']."</a><br>";
		echo "Last Name: ". $all['lname']."<br><br>";
	}
}


?>

<!-- <script>
class User {
	constructor(email, name)
	{
		this.email = email;
		this.name = name;
	}
}

class Admin extends User {
	delete(user)
	{
		users = users.filter(u => {
			return u.email != user.email
		});
	}
}

var user1 = new User('test@test.com', 'test');
var user2 = new User('test2@test.com', 'test2');
var admin = new Admin('admin@test.com', 'admin');

var users = [user1,user2,admin];

cosole.log(users);
</script> -->