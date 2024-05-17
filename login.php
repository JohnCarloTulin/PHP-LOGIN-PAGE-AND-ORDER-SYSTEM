<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	echo $_SESSION['welcomeMessage'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>PHP | Tulin</title>
</head>

<body style="background-image: url('background.jpg');">
    
    <header class = "header">
        <h1>Tulin</h1>
    </header>

        
    <div class= "hook">
        <h1>Your world starts around here.</h1>
    </div>
    
    <div class="maincontainer">
        <h1><br>User login</h1>
        <form action="handleForm.php" method="POST">
            <div class="text_field">
                <label>Username</label>
                <input type="text" placeholder="Type your username here" class="fields" name="username">
            </div>

            <div class="pass_field">   
                <label>Password</label>    
                <p><input type="password" placeholder="Type your password here" class="fields" name="password"></p>
            </div>

            <div class = "button_field">
                <p><br><input type="submit" value="Login" id="loginBtn" name="loginBtn"></p>
            </div>

            <div class = "registration">
                Not registered? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>