<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>PHP | Tulin</title>
</head>
<body style="background-image: url('background.jpg');">
    
    <header class = "header">
        <h1>Tulin</h1>
    </header>
    
    <div class="maincontainer">
        <h1>
            <br>Welcome to Canteen! <span class = 'user'><?php echo $_SESSION['username'];?></span>
        </h1>
        <h2>
            <br>Menu
        </h2>
        <form action="get.php" method="GET">
            <div class = "foodlist">
                <div class = "container">
                    <div class = "foodname">
                        <p>Fishball</p>
                    </div>
                    <div class = "price">
                        <p>30 Pesos</p>
                    </div>
                </div>

                <div class = "container">
                    <div class = "foodname">
                        <p>Kikiam</p>
                    </div>
                    <div class = "price">
                        <p>40 Pesos</p>
                    </div>
                </div>

                <div class = "container">
                    <div class = "foodname">
                        <p>Corndog</p>
                    </div>
                    <div class = "price">
                        <p>50 Pesos</p>
                    </div>
                </div>
            </div>
            
            <div class="text_field">
                <label>Choose your food: </label>
                <select name = "food" id = "food" class = "food_list">
                    <option value = "fishball">Fishball</option>
                    <option value = "kikiam">Kikiam</option>
                    <option value = "corndog">Corndog</option>
                </select>
            </div>

            <div class="quantity_field">   
                <label>Quantity:</label>    
                <p><input type="text" placeholder="How many?" class="fields" name="quantity"></p>
            </div>

			<div class="cash_field">   
                <label>Cash:</label>    
                <p><input type="text" placeholder="How much is your money?" class="fields" name="cash"></p>
            </div>

            <div class = "button_field">
                <p><br><input type="submit" value="Submit" name="submitName"></p>
            </div>

            <div class = "logout">
                <a href="logout.php">Logout</a>
            </div>
        </form>

    </div>
</body>
</html>