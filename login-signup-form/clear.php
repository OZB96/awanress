<?php

$user = 'user';
$pass = 'userpass';
$mydatabase = 'accounts';
$host = 'db';
$conn = new mysqli($host, $user, $pass, $mydatabase);

mysqli_query($conn,'TRUNCATE TABLE users;');
header("Location: attacker.php");
?>