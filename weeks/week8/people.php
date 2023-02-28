<?php
    include('config.php');
    include('./includes/header.php');

    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';

    function random_images($photos) {
        $my_return = '';
        $i = rand(0,4);
        $selected_image = ''.$photos[$i]. '.jpg';
        $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
        return $my_return;
    }
?>

<div id="wrapper">
    <main>
        <h1>Welcome to our People Database Class Exercise</h1>
    <?php
        $sql = 'SELECT * FROM people';
        // now we have to connect to our database

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
        //and if that's not working, blow up the website
        // die
        
        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // we are asking if the number of rows is greater than zero

        if(mysqli_num_rows($result) > 0) {
            // we will be reading those rows with a while-loop
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                    <h2>Information about: '.$row['first_name'].'</h2>
                    <ul>
                        <li><b>First Name:</b> '.$row['first_name'].'</li>
                        <li><b>Last Name:</b> '.$row['last_name'].'</li>
                        <li><b>Birthdate:</b> '.$row['birthdate'].'</li>
                    </ul>
                    <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a></p>
                ';
            } //end while
        } //end if number of row is greater than zero
        else {
            echo 'Nobody is home!';
        }

        //release web server resources
        @mysqli_free_result($result);

        //close connection to mysql
        @mysqli_close($iConn);
    ?>
    </main>
    <aside>
        <h3>I will display my random images here</h3>
        <?php echo random_images($photos); ?>
    </aside>
</div> <!-- end div id wrapper -->

<?php
    include('./includes/footer.php');