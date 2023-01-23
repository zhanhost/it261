<?php
//first form
//using $_GET global varible

//logic - name and email form
//if it is set, yippy skippy
//if not, show form

if(isset($_GET['name'],
$_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
} //end if
else {
    echo '
        <form action ="" method ="get">
            <label>NAME</label>
            <input type="text" name="name">
            <label>EMAIL</label>
            <input type="email" name="email">
            <input type="submit" value="Confirm">
        </form>
    ';
} //end else