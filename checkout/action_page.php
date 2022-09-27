<?php

$user = 'user';

//database user password
$pass = 'userpass';

// database name
$mydatabase = 'store';
// check the mysql connection status
$host = 'db1';

$conn = new mysqli($host, $user, $pass, $mydatabase);

// $sql = 'SELECT * FROM users';

if (isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['address'])){
    $stmt = $conn->prepare('INSERT INTO ShippingAddress (full_name, email, address, city, state, zip) VALUES(?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('ssssss', $_POST['firstname'], $_POST['email'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['zip']);
    $stmt->execute();  
    $stmt->close();


    // $sql = $conn->prepare('SELECT id FROM ShippingAddress WHERE email=?');
    // $sql->bind_param('s', $_POST['email']);
    // $sql->execute();  

    $sql = $conn->prepare('SELECT MAX(id) FROM ShippingAddress');
    $sql->execute();  

    $result = $sql->get_result();
    if($result->num_rows === 0) exit('No rows');
    $row = mysqli_fetch_row($result);
    $result1 = $row[0];
    // while($row = $result->fetch_assoc()) {
    // $result1 = $row['id'];
    // }
    $sql->close();

}




if(isset($_POST['cardname']) && isset($_POST['cardnumber']) && isset($_POST['expmonth']) &&isset($_POST['expyear']) && isset($_POST['cvv'])){
    $stmt1 = $conn->prepare('INSERT INTO Cards (user_id, cardname, cardnumber, expmonth, expyear, cvv) VALUES(?, ?, ?, ?, ?, ?)');
    $stmt1->bind_param('ssssss', $result1 , $_POST['cardname'], $_POST['cardnumber'], $_POST['expmonth'], $_POST['expyear'], $_POST['cvv']);
    $stmt1->execute();
    $stmt1->close();

}


$conn->close();
header("Location: success.html");
die();


// $result = $stmt->get_result();
// while ($row = $result->fetch_assoc()) {
//     // Do something with $row
// }



// $sqlShipping = 'INSERT INTO ShippingAddress (full_name, email, address, city, state, zip)'

// $sqlPayment = 'INSERT INTO Cards'

// INSERT INTO employees (first_name, last_name, department, email) 
// VALUES ('Lorenz', 'Vanthillo', 'IT', 'lvthillo@mail.com');

// if ($result = $conn->query($sql)) {
//     while ($data = $result->fetch_object()) {
//         $users[] = $data;
//     }
// }

// foreach ($users as $user) {
//     echo "<br>";
//     echo $user->username . " " . $user->password;
//     echo "<br>";
// echo $_POST['firstname']

?>