<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My form3.php</h1>
    <form action="" method="post">
        <fieldset>
        <label>First Name</label>
            <input type="text" name="first_name">
            <label>Last Name</label>
            <input type="text" name="last_name">
            <label>Email</label>
            <input type="email" name="email">
            <label>Comments</label>
            <textarea name="comments"></textarea>
            <input type="submit" value="Send it!">
            <p><a href="">Reset!</a></p>
        </fieldset>
    </form>
    <?php
        //logic - if isset first_name, last_name... good
        //nested if - if fields are empty, echo a message
        //else, echo form
    
        if (isset($_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['comments'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $comments = $_POST['comments'];

            if (empty($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['comments'])) {
                echo '<p class="error">Please fill out all fields.</p>';
            } //end nested if(empty) statement
            else {
                echo '
                    <div class="box">
                        <h2>Hello, ' .$first_name. ' ' .$last_name.'!</h2>
                        <p>We have received your <b>email as:</b> ' .$email. ' and will be reviewing your <b>comments:</b> ' .$comments. '</p>
                    </div>
                ';
            } //end else
        } //end if isset
    ?>
</body>
</html>