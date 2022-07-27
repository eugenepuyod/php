<?php


?>

<script>
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
</script>