<?php

if(isset($_GET['submitName'])){
  $quantity = $_GET['quantity'];
  $cash = $_GET['cash'];
  $selectedvalue = $_GET['food'];
  $cost;
  $change;

  if ($selectedvalue == 'fishball'){
    $cost = $quantity * 30;
    $change = $cash - $cost;
  }
  elseif ($selectedvalue == 'kikiam'){
    $cost = $quantity * 40;
    $change = $cash - $cost;
  }
  elseif ($selectedvalue == 'corndog'){
    $cost = $quantity * 50;
    $change = $cash - $cost;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>PHP | Tulin</title>
</head>
<body style="background-image: url('background.jpg');">
    <header class = "header">
        <h1>Tulin</h1>
    </header>
    
    <div class="maincontainer">
        <p>Details:</p>
        <h1>
          The total cost is <?php echo $cost; ?>
        </h1>
        <h1>
          Your change is <?php echo $change; ?>
        </h1>
        <h1>
          Thanks for the order
        </h1>

        <div class = "logout">
          <div class = "back_btn">
            <a href="index.php">Back</a>
          </div>
          
          <div class = "logout_btn">
            <a href="logout.php">Logout</a>
          </div>
        </div>
    </div>
</body>
</html>