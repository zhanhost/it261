<?php
    include('config.php');
    include('./includes/header.php');

    $images[0] = 'image1';
    $images[1] = 'image2';
    $images[2] = 'image3';
    $images[3] = 'image4';
    $images[4] = 'image5';
    $images[5] = 'image6';
    $images[6] = 'image7';
    $images[7] = 'image8';
    $images[8] = 'image9';
    $images[9] = 'image10';

    function random_images($images) {
        $my_return = '';
        $i = rand(0,4);
        $selected_image = ''.$images[$i]. '.jpg';
        $my_return = '<img src="images/'.$selected_image.'" alt="'.$images[$i].'">';
        return $my_return;
    }

?>

<div id="wrapper">
    <main>
        <h1>Percy Jackson and the Olympians Characters</h1>
        <p>by Rick Riordan</p>
        <?php
        $sql = 'SELECT * FROM project';
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
        
        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                    <h2>'.$row['name'].' Information</h2>
                    <ul>
                        <li><b>Age:</b> '.$row['age'].'</li>
                        <li><b>Patron:</b> '.$row['patron'].'</li>
                        <li><b>Description:</b> '.$row['description'].'</li>
                    </ul>
                    <p>For more information about '.$row['name'].', click <a href="project-view.php?id='.$row['char_id'].'">here</a></p>
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
        <h3>Random Character Images</h3>
        <?php echo random_images($images); ?>
    </aside>
</div> <!-- end of wrapper -->

<?php include('./includes/footer.php');