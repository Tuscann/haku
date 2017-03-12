<?php
require 'User.php';
$user = unserialize($_SESSION['user']);
$userInfo = $user->getData();
var_dump($userInfo);
?>