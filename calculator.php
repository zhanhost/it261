<?php 
/////////////////////////////////////////////////////////////
    // our currency calculator
    // objective: create a basic form displaying milage
    // test it first try
    // if it works, save as calculator2.php
    // add error messages
    // add stickiness
    // test it second try
    // if it works, save as calculator3.php

    // form must have the following:
        // name
        // total miles
        // speed
        // hours per day
        // price of gas
        // fuel efficiency
    // input types include:
        // text
        // number
        // radio
        // select
/////////////////////////////////////////////////////////////

    $name = '';
    $miles = '';
    $speed = '';
    $hours = '';
    $gas = '';

    $name_err = '';
    $miles_err = '';
    $speed_err = '';
    $hours_err = '';
    $gas_err = '';
    
    ob_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            $name_err = 'Please fill out your name';
        }
        else {
            $name = $_POST['name'];
        }

    } //end if($_SERVER['REQUEST_METHOD'] == 'POST')


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles_calculator.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Travel Calculator</h1>
    <form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name']))
                echo htmlspecialchars($_POST['name']); ?>">
            <span class="error"><?php echo $name_err; ?></span>

            <label>Total miles driving?</label>
            <input type="number" name="miles" value="">

            <label>How fast do you usually drive?</label>
            <input type="number" name="speed" value="">

            <label>How many hours per day do you plan on driving?</label>
            <input type="number" name="hours" value="">

            <label>Price of gas</label>
            <ul>
                <li><input type="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && ($_POST['gas'] == '3.00')) echo 'checked = "checked"';?>>$3.00</li>
                <li><input type="radio" name="gas" value="3.50" <?php if(isset($_POST['gas']) && ($_POST['gas'] == '3.50')) echo 'checked = "checked"';?>>$3.50</li>
                <li><input type="radio" name="gas" value="4.00" <?php if(isset($_POST['gas']) && ($_POST['gas'] == '4.00')) echo 'checked = "checked"';?>>$4.00</li>
            </ul>
            <span class="error"><?php echo $gas_err; ?></span>

            <label>Fuel efficiency</label>

            <input type="submit" value="Calculate">

            <p><a class="reset" href="">Reset</a></p>
        </fieldset>
    </form>

</body>
</html>