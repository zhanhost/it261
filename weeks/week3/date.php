<?php
//date function and if statement

echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y h:i A');

echo '<br>';
echo '<br>';

$name = 'Zhan';
$our_time = date('H:i A');

echo '<br>';
echo $our_time;

//the logic
//if the time is less or equal to 11, then it is morning
//if the time is less or equal to 17, which equals 5, then it is the afternoon
//now we will have an else that means it's evening

if($our_time <= 11) {
    echo '<h2 style ="color:orange;">Good morning, ' .$name. '</h2>
    <img src="./images/sun.jpg" alt="sun">
    <p>It\'s time to get up!</p>
    ';
}
elseif($our_time <= 17) {
    echo '<h2 style ="color:green;">Good afternoon, ' .$name. '</h2>
    <img src="./images/grass.jpg" alt="grass">
    <p>Why are you still in bed!</p>
    ';
}
else {
    echo '<h2 style ="color:purple;">Good evening, ' .$name. '</h2>
    <img src="./images/evening.jpg" alt="and if airplanes in the night sky">
    <p>Go to sleep</p>
    ';
}

?>