<?php
    include('./includes/header.php');

    $noodle['Chi_cken'] = 'cupchi_The original..';
    $noodle['Be_ef'] = 'cupbee_With beef!..';
    $noodle['Shr_imp'] = 'cupshr_Now shrimp!..';
    $noodle['Sea_food'] = 'cupsea_A global flavor!..';
    $noodle['Cur_ry'] = 'cupcur_Curry dish!..';

    // variable key          value
    // $cup                  image
?>


<div id="wrapper">
    <main id="gallery">
        <table>
            <?php foreach($noodle as $cup => $image): ?>
            <tr>
                <td><img src="images/<?php echo substr($image, 0, 6); ?>.png" alt="<?php echo str_replace('_', '', $cup); ?>"></td>
                <td><?php echo str_replace('_', '', $cup); ?></td>
                <td><?php echo substr($image, 7, -2); ?></td>
                <td><img src="images/<?php echo substr($image, 3, 3); ?>.png" alt="<?php echo str_replace('_', '', $cup); ?>"></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
</div> <!-- end of wrapper -->

<?php include('./includes/footer.php');