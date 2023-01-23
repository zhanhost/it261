<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label>Enter your celcius value</label>
            <input type="number" name="cel">
            <input type="submit" value="Convert it!">
        </fieldset>
        <p><a href="">Reset</a></p>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['cel'])) {
                $cel = $_POST['cel'];
                $cel_int = intval($cel); //formula ensures our celcius value is an integer
                $far = ($cel_int * 9/5) + 32;

                if($cel == NULL) {
                    echo '<p class="error">Please fill out the Celcius Value!</p>';
                } //end if null
                elseif($far <= 32) {
                    echo '<p> '.$cel_int.' °C equals ' .$far. ' °F <br> and it is pretty cold out there!</p>';
                } //end elseif less than or equal to 32°F
                elseif($far <= 45) {
                    echo '<p> '.$cel_int.' °C equals ' .$far. ' °F <br> and it is getting warmer!</p>';
                } //end elseif less than or equal to 40°F
                elseif($far <= 60) {
                    echo '<p> '.$cel_int.' °C equals ' .$far. ' °F <br> and it is sweater weather!</p>';
                } //end elseif less than or equal to 50°F
                elseif($far <= 75) {
                    echo '<p> '.$cel_int.' °C equals ' .$far. ' °F <br> and we\'re going to the park!</p>';
                } //end elseif less than or equal to 75°F
                elseif($far <= 90) {
                    echo '<p> '.$cel_int.' °C equals ' .$far. ' °F <br> and we may be going to the beach!</p>';
                } //end elseif less than or equal to 90°F
                else {
                    echo '<p> '.$cel_int.' °C equals ' .$far. ' °F <br> and we are at the beach!</p>';
                } //end nested else

            } //end if isset
        } //end if server post

    ?>
</body>
</html>