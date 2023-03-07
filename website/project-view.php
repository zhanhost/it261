<?php
    include('config.php');

    if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];
    }
    else {
        header('Location:project.php');
    }

    $sql = 'SELECT * FROM project WHERE char_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $name = stripcslashes($row['name']);
        $age = stripcslashes($row['age']);
        $patron = stripcslashes($row['patron']);
        $description = stripcslashes($row['description']);
        $feedback = '';
    } //end while
} //end if statement
else {
    $feedback = 'Error with your code, Zhan!';
} //end else

include('./includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1>Project View Page</h1>
        <h2><?php echo $name;?>'s Page</h2>
        <ul>
            <?php
                echo '
                        <li><b>Name:</b> '.$name.'</li>
                        <li><b>Age:</b> '.$age.'</li>
                        <li><b>Patron:</b> '.$patron.'</li>
                        <li><b>Description:</b> '.$description.'</li>
                '; //end echo
            ?> <!-- //end ul php -->
        </ul>
        <p><a href="project.php">Return to the Project page</a></p>

    </main>
    <aside>
        <img src="./images/image<?php echo $id; ?>.jpg" alt="<?php echo $name; ?>">
    </aside>

    <?php
        //release web server resources
        @mysqli_free_result($result);

        //close connection to mysql
        @mysqli_close($iConn);
    ?>
</div>

<?php
    include('./includes/footer.php');