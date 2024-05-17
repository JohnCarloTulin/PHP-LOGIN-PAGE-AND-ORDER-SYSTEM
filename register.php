<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body style="background-image: url('background.jpg');">
    
    <header class = "header">
        <h1>Tulin</h1>
    </header>

        
    <div class= "hook">
        <h1>Your world starts around here.</h1>
    </div>
    
    <div class="maincontainer">
        <h1><br>Registration</h1>
        <form action="handleForm.php" method="POST">
            <div class="text_field">
                <label>Type your new username</label>
                <input type="text" placeholder="Type your username here" class="fields" name="username">
            </div>

            <div class="pass_field">   
                <label>Type your new password</label>    
                <p><input type="password" placeholder="Type your password here" class="fields" name="password"></p>
            </div>

            <div class = "button_field">
                <p><br><input type="submit" value="Register" id="submitBtn" name="regBtn"></p>
            </div>

            <div class = "registration">
                Already registered? <a href="login.php">Login Page</a>
            </div>
            
        </form>

    </div>
</body>
</html>