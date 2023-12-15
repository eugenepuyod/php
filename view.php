<?php
require "Model/User.php";
$user = new User;

$item = ['name','email','pass'];
$value = ['Chelsey','chelsey@test.com','test123'];
$insertId = $user->insert($item, $value);
var_dump($insertId);

$setNames = array(
    'name' => 'Jocelyn',
    'email' => 'new@test.com'
);
var_dump($user->update(7, $setNames));

?>
