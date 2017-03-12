<?php
require 'User.php';
$user = unserialize(file_get_contents('user'));
$userInfo = $user->getData();

var_dump($userInfo);
?>