<?php 
    // errors where we will use a foreach loop
    // we will be counting errors
    // if we have more than 0 errors, not good
    // we need to echo our message

    if(count($errors) > 0):
?>
<div class="error">
    <?php foreach($errors as $error): ?>
        <p>
            <?= $error ?>
        </p>
    <?php endforeach; ?>
</div> <!-- end div class error -->

<?php endif; ?>