<?php
// Function to roll a dice

  $rand =  rand(1, 6); // Generates a random number between 1 and 6


// Rolling the dice
//$diceRoll = $rand;

// Set the image path
$imagePath = "dise_" . $rand . ".jpg";
$msg="";
if($rand == 6){
    $msg = "Hurray..... 🌟";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        img {
            width: 100px; /* Adjust size as needed */
            height: 100px; /* Adjust size as needed */
        }
    </style>
</head>
<body>

<h1>You rolled a <?php echo $rand; ?>!</h1>
<img src="<?php echo $imagePath; ?>" alt="Dice showing <?php echo $rand; ?>">

<h2><?php echo $msg;?></h2>
<form method="post">
    <button type="submit">Roll Again</button>
</form>

</body>
</html>
