<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Registeration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '$password', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form' style='color:white;'>
<h3>You have successfully registered.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
    <main class="container">
        <h2>Register</h2>
        <form action="" method="post">
            <div class="input-field">
                <input type="text" name="username" id="username"
                    placeholder="Example">
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="email" name="email" id="email"
                    placeholder="example@example.com">
                <div class="underline"></div>
            </div>            

            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Enter Your Password">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Continue">
        </form>

        <!-- <div class="footer">
            <span>Or Connect With Social Media</span>
            <div class="social-fields">
                <div class="social-field twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        Sign in with Twitter
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Sign in with Facebook
                    </a>
                </div>
            </div> -->
        </div>
    </main>
    <?php } ?>
</body>
</html>