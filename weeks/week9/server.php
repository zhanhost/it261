<?php 
    // our server.php file - this is where our session will start!
    // our session is a way to store information

    session_start();
    include('config.php');
    include('./includes/header.php');

    // this server.php page will be communicating to our database

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    // regiser the user using if isset reg_user

    if(isset($_POST['reg_user'])) {
        $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
        $email = mysqli_real_escape_string($iConn, $_POST['email']);
        $username = mysqli_real_escape_string($iConn, $_POST['username']);
        $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
        $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

        // we want to make sure that all the input fields have been filled out
        // if empty, you are going to use a new function which is called array_push()

        if(empty($first_name)) {
            array_push($errors, 'First name is required.');
        }

        if(empty($last_name)) {
            array_push($errors, 'Last name is required.');
        }

        if(empty($email)) {
            array_push($errors, 'Email is required.');
        }

        if(empty($username)) {
            array_push($errors, 'Username is required.');
        }

        if(empty($password1)) {
            array_push($errors, 'Password is required.');
        }

        // our logic: is password1 == to password2?

        if($password1 !== $password2) {
            array_push($errors, 'Passwords do not match.');
        }

        // we are checking the username and password AND selecting it from the table

        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

        $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        $rows = mysqli_fetch_assoc($result);

        // we are going to have an if statement and we will nest two additional if statements inside our main if statement
        // we cannot have duplicate usernames or duplicate emails

        if($rows) {
            if($rows['username'] == $username) {
                array_push($errors, 'Username already exists');
            } // end if $rows['username']
            if($rows['email'] == $email) {
                array_push($errors, 'Email already exists');
            } // end if $rows['email']
        } // end if $rows
        // do we have any errors? ideally, no errors

        if(count($errors) == 0) {
            $password = md5($password_1);
            // inside the information into our table
            $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('first_name', 'last_name', 'email', 'username', 'password')";

            mysqli_query($iConn, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            // if we are successful, then we will be directed to our login page

            header('Location:login.php');
        } // end if(count($errors))

    } // end if isset reg_user

    // NOW we must communicate with our login page - we will ask the same question

    if(isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($iConn, $_POST['username']);
        $password = mysqli_real_escape_string($iConn, $_POST['password']);

        if(empty($username)) {
            array_push($errors, 'Username is required.');
        } // end if username is empty

        if(empty($password)) {
            array_push($errors, 'Password is required.');
        } // end if password is empty

        // we will be counting our errors and hope we have zero errors
        if(count($errors) == 0) {
            $password = md5($password);

            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            
            // below you have a new variable "$results" not "$result"
            $results = mysqli_query(iConn, $query);

            if(mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = $success;
                // if the above is successful, the user will be directed to the home page, which will be index.php
                header('Location:index.php');
            } // closet if
            else {
                array_push($errors, 'Wrong username/password combination.');
            } // close else
        } // end count errors

    } // end if(isset($_POST['login_user']))