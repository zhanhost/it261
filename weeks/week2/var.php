<?php

//variables
//a variable is merely a container for data

$name = "Zhan"; //this is a string
$name = 'Felipe'; //this is another string

echo $name; //because you can only assign one value to a single variable, $name will hold the value of the last one declared. instead of Zhan displaying, Felipe will appear in the web browser

$body_temp = 98; //this is an integer
$body_temp_new = 98.6; //this is not an integer, it is afloat because it has a decimal

echo "<br>";
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;

echo "<br>";
echo "<br>";
echo "My name is $name!"; //double quotes will search the string for variables and replace variable with its value automatically, so you do not have to concatenate it

echo "<br>";
echo "<br>";
echo 'My name is $name!'; //single quotes preferred; it is generally faster, but you do need to concatenate the variable if you want it to display its value and not the name. single quotes display variables as strings literally

echo "<br>";
echo "<br>";
echo 'My name is ' . $name . ' !'; //concatenates the strings and variable

echo "<br>";
echo "<br>";
echo 'The normal body temperature for a human being is ' .$body_temp_new. ' degrees';

echo "<br>";
echo "<br>";
$name = 'Sharon';
echo $name; //displays the variable's new value

echo "<br>";
echo "<br>";
$x = 20;
$y = 5;

//you can do arithmetic

$z = $x + $y; //i am using the term "assigned" vs equals
echo $z;

echo "<br>";
echo "<br>";

$z = $x * $y;
echo $z; //replaces the previous declaration of $z

echo "<br>";
echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";
echo "<br>";
$first_name = 'Zhan';
$last_name = 'Hostetler';
echo $first_name .''. $last_name; //concatonates the two variables

echo "<br>";
echo "<br>";
echo $first_name .' '. $last_name; //we added a space between the variables

echo "<br>";
echo "<br>";
echo "My full name is $first_name $last_name"; //we can do this in double quotes without concatenating it because we used double strings, which will search the string before displaying for variables to replace automatically

echo "<br>";
echo "<br>";
echo 'My full name is ' .$first_name .' '. $last_name.'';