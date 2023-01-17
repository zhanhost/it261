<?php

//concatenation
//operators - assignment operators
//preset functions
//arrays

$name = 'Zhan'; //the equal sign is an assignment operator
$first_name = 'Zhan';
$last_name = 'Hostetler';

echo '<br>';
$name = 'Zhan';
$name .= ' Hostetler'; //adds a concatenation to the $name variable
echo $name;

echo '<br>';
echo '<br>';
$color = 'yellow';
echo $color;

echo '<br>';
echo '<br>';
echo 'Zhan\'s favorite color is ' .$color. ''; //add a backwards slash so the program won't read part of the text as syntax

echo '<br>';
echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
echo '<br>';
$x = 20; //20 is assigned to $x
$x += 5; //adds 5 to 20
echo $x;

echo '<br>';
echo '<br>';
$x = 100;
$x *= 10; //multiplies the value of the $x variable with 10
echo $x;

echo '<br>';
echo '<br>';
$x = 100;
$x /= 10; //divides the value of the $x variable with 10
echo $x;

echo '<br>';
echo '<br>';
echo '<h3>Our products, quantitiy, and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.10;
echo $total;

echo '<br>';
echo '<br>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;

echo '<h3>We would like our amount to reflect 2 decimal places - we are thinking about floats and a new function - number_format()</h3>';
$product = 120; 
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2); //places variables into that function
echo 'We have a total of <b>$' .$total_friendly. '</b> dollars';

echo '<br>';
echo '<br>';
$product = 120; //this is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
$total_friendly = number_format($total, 2); //places variables into that function
echo 'We have a total of <b>$' .number_format($total, 2). '</b> dollars'; //you can either set it to another variable like above or do it in the echo string like here

echo '<br>';
echo '<br>';
echo '<h3>Our second preset function is our date function</h3>';
echo date('Y'); //this displays the current year automatically

echo '<br>';
echo '<br>';
echo date('l'); //this displays the current day of the week automatically

echo '<br>';
echo '<br>';
echo date("l jS \of F Y h:i:s A"); //displays the current day of the week, day of the month, month, year, and exact time of the day - BUT it might not be on your timezone

echo '<br>';
echo '<br>';
echo date("l jS \of F Y h:i A"); //we just removed seconds from the date function

echo '<br>';
echo '<br>';
date_default_timezone_set('America/Los_Angeles'); //this function sets the time zone
echo date("l jS \of F Y h:i A");

echo '<br>';
echo '<br>';
echo '<h3>Time for an array</h3>';
echo '<h4>Below is an indexed array</h4>';
$fruit[] = 'bananas'; //0
$fruit[] = 'cherries'; //1
$fruit[] = 'melon'; //2
$fruit[] = 'kiwi';
$fruit[] = 'oranges';
$fruit[] = 'apples'; //"And life is good"
// echo $fruit;

echo '<br>';
echo '<br>';
//we cannot echo our fruit array, the program will get angry at you
//an echo of an array to string can't be done
//BUT we can echo one of our fruit options
echo $fruit[2]; //this will display 'melon' because numbering in PHP starts at zero

//different ways to declare arrays 

$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);

$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
];

echo '<br>';
echo '<br>';
print_r($fruit); //displays the array

echo '<br>';
echo '<br>';
var_dump($fruit); //also displays the array

//the above are all indexed arrays by the way

//the following are associative arrays which are different
echo '<br>';
echo '<br>';
echo '<h3>Now we have an associative array</h3>';
$nav = array(
    'index.php' => 'Home', //index is the key and home is the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>';
var_dump($nav);
echo '</pre>';