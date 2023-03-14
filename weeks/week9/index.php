<?php

    // our index page must show the session_start() function

    session_start();

    include('config.php');

    // did the user log in correctly, and if not, the user will receive a message and will be directed back to the login page

    if(!isset($_SESSION['username'])) {
        $_SESSION['msg'] = 'You must login first';
        header('Location:login.php');
    } // end if isset session

    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('Location:login.php');
    }

    include('./includes/header.php');
?>

<header>

<?php
    if(isset($_SESSION['success'])):
?>
<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
            unset($_SESSION['success']); ?>
    </h3>
</div> <!-- end div class success -->

<?php endif; ?>

<?php 
    if(isset($_SESSION['username'])): ?>

<div class="welcome-logout">
        <h3>Welcome,
            <?= $_SESSION['username'] ?>
        </h3>
        <p><a href="index.php?logout='1'">Logout</a></p>
</div> <!-- end div class welcome-logout -->

<?php endif; ?>

</header>

<div id="wrapper">
    <h1>Welcome to our Home Page!</h1>
</div> <!-- end div wrapper -->

<?php include('./includes/footer.php');