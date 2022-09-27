<?php

$user = 'user';
$pass = 'userpass';
$mydatabase = 'store';
$host = 'db1';
$conn = new mysqli($host, $user, $pass, $mydatabase);

mysqli_query($conn,'TRUNCATE TABLE ShippingAddress;');
mysqli_query($conn,'TRUNCATE TABLE Cards;');

header("Location: attacker.php");
?>