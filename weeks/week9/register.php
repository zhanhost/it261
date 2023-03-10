<?php
    include('server.php');
    include('./includes/header.php');
?>

<h1>Register Today</h1>
<form>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ?>">

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">

        <label>Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ?>">

        <label>Password</label>
        <input type="password" name="password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']) ?>">

        <label>Confirm your password</label>
        <input type="password" name="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']) ?>">

        <button type="submit" name="reg_user" class="btn">Register</button>
        <!-- USE THE reg_user NAME, DO NOT CHANGE -->

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($SERVER_['PHP_SELF']) ?>'">Reset</button>
    </fieldset>


</form>