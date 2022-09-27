<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}

.outer {
  display: table;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.middle {
  display: table-cell;
  vertical-align: middle;
}

.inner {
  margin-left: auto;
  margin-right: auto;
  width: 400px;
  /* Whatever width you want */
}
</style>
</head>
<body>

<div class="outer">
    <div class="middle">
      <div class="inner" style='color:white;'>
        <h1>Welcome</h1>
        <h5>You have been logged in successfully</h5>
      </div>
    </div>
  </div>

<div class="footer">
<a href="/logout.php">Click here to logout</a>
</div>
</body>
</html>