<?php
/* 
https://www.w3schools.com/php/php_looping_for.asp
    The for loop is used when you know in advance how many times the script should run.

SYNTAX
    for (init counter; test counter; increment counter) {
      code to be executed for each iteration;
    } 

PARAMETERS
    init counter: Initialize the loop counter value
    test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
    increment counter: Increases the loop counter value
*/

//celcius and fahrenheit
// $far = ($cel * 9/5) + 32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Celcius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            border-sizing: border-box;
        }
        
        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }

        td, th {
            border-collapse: collapse;
            border: 1px solid lightblue;
            padding: 5px;
        }

        h1, h2 {
            text-align: center;
            margin: 10px 0;
            color: green;

        }
    </style>
</head>
<body>
    <h1>My Celcius / Fahrenheit Table (increment 5)</h1>  
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
            for ($cel = 0; $cel <= 100; $cel +=5) {
                $far = ($cel * 9/5) + 32;
                echo '<tr>';
                    echo '<td> '.$cel.' degrees</td>';
                    echo '<td> '.$far.' degrees</td>';
                echo '</tr>';
            }; //end for loop
        ?>
    </table>

    <h1>My Celcius / Fahrenheit Table (increment 2)</h1> 
    <h2>I used the round() function</h2> 
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
            for ($cel = 0; $cel <= 100; $cel +=2) {
                $far = ($cel * 9/5) + 32;
                echo '<tr>';
                    echo '<td> '.round($cel).' degrees</td>';
                    echo '<td> '.round($far).' degrees</td>';
                echo '</tr>';
            }; //end for loop
        ?>
    </table>

    <h2>You will now complete a kilometer/milage table on your own!</h2>
    <!-- kilometers to Miles -->
    <!-- 1 kilometer =  0.621371 miles -->


    <h1>My Kilometer / Miles Table</h1>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <?php
            for ($kil = 0; $kil <= 100; $kil +=5 ) {
                $mil = $kil * 0.621371;
                echo '<tr>';
                    echo '<td> '.$kil.' kilometers</td>';
                    echo '<td> '.number_format($mil, 2).' miles</td>';
                echo '</tr>';
            }; //end for loop
        ?>
    </table>
</body>
</html>