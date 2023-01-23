<html>
<head>
<title>My Adder Assignment</title>
<style>
    p {
        color: red;
        text-align: center;
    }  
    h1 {
        color:green;
        text-align: center;
        margin-top: 21.5px;
    }
    h2 {
        font-size: 1.5em;
        text-align: center;
    }
    form {
        width: 350px;
        margin: 0 auto;
        border: 1px solid red;
        padding: 10px;
    }
</style>
</head>

<body>
<h1>Adder.php</h1>
<form action="" method="post">
        <label>Enter the first number:</label>
        <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!">
</form>
<?php
    //need to add logic uhh
    //if isset num1, num2 : yippy and skippy
    //nested if : if fields are empty, echo the error message: 'Please fill out your numbers'
    //else, execute the form

    if(isset($_POST['num1'], $_POST['num2'])){
        if(empty($_POST['num1'] && $_POST['num2'])) {
            echo '<p>Please fill out your numbers</p>';
        } //end nested if empty
        else {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $myTotal = intval($num1) + intval($num2);

            echo '<h2>You added ' .$num1. ' and ' .$num2. '</h2>';
            echo '<p style="color:red;">and the answer is <br>' .$myTotal .'!</p>';
            echo '<p><a href="">Reset page</a></p>';
        } //end nested else
    } //end if isset
?>
</body>
</html>

<!-- Added missing ?> php end tag -->
<!-- Moved PHP code from above the <html> tag to inside it, after form and before the ending </body> tag -->
<!-- Removed ';{?> at the bottom of the file -->
<!-- Added the num2 variable inside the PHP if isset statement -->
<!-- Removed extra - before the = when assigning $myTotal a value equation -->
<!-- When assigning $myTotal, changed $Num2 to $num2 as variables are case-sensitive -->
<!-- When assigning $myTotal, included the intval() function to both num1 and num2 to ensure that the input value returns an integer so that it can add the numbers. Also, I noticed that in the official repaired adder, it will display "and the answer is 0!" when the input values are alphabetical letters instead of numbers, like A and B -->
<!-- Changed " to ' at first echo, after <h2> tag -->
<!-- Changed " to ' at first echo after $num1 concatenation -->
<!-- Added ' at first echo between $num1 and $num2 concatenation -->
<!-- Removed extra " at first echo after $num2 concatenation -->
<!-- Added missing </h2> tag at the first echo -->
<!-- At second echo, moved style color red from after the break to inside the <p> tag -->
<!-- At second echo, added missing . concatenation period between <br> and $myTotal -->
<!-- At second echo, replaced double quotes to single quotes and deleted any extras -->
<!-- At second echo, moved ending single quote to after the </p> and before the semi-colon ; -->
<!-- At third echo, added missing </p> after the </a> -->
<!-- At third echo, added missing semi-colon at the end -->
<!-- Removed unnecessary forward slash \ in the beginning <form> tag -->
<!-- Added method="post" in the form tag -->
<!-- Added missing <label> tag inside the form -->
<!-- Inside the form, replaced Num1 with num2 as variables are case-sensitive -->
<!-- Inside the form, fixed the second label tag -->
<!-- Inside the form, added missing double quote " on the submit button line when assigning value -->
<!-- Created an if-empty statement to display an error message if fields were empty -->
<!-- Created an else statement to display the form if fields were filled -->
<!-- Moved $num1, $num2, $myTotal variable assignments and all echos to be inside the else-statement so that way they only execute if the input fields have content -->