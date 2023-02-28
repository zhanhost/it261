<?php
    // our str_replace and substr functions
    // substr(string,start,length)

    $statement = 'Presently, I am reading The Everything Box';
    echo '<br>';
    echo substr($statement, 0); //start at 0 to start at the beginning

    echo '<br>';
    echo substr($statement, 1); //starts at one character to the right, going down the string

    echo '<br>';
    echo substr($statement, 11); 

    echo '<br>';
    echo '<h2>Now I would like to display just the words: I am reading</h2>';
    echo '<br>';
    echo substr($statement, 11, 12);

    echo '<h2>What if I would like to display Everything?</h2>';
    // negative numbers make the count start from the right to the left, instead of left to right as normal
    echo substr($statement, -14);
    echo '<br>';
    echo substr($statement, -14, 10);

    echo '<br>';
    echo '<h2>Now for the str_replace function</h2>';

    $statement2 = 'The TV Tropes website does a good job at describing elements the book the Everything Box';
    echo $statement2;
    echo '<br>';
    echo str_replace('the', 'The', $statement2);