<?php require('partials/head.php'); ?>

<?php
    foreach ($tasks as $task) {
       echo $task->description;
    }
?>

<?php require('partials/footer.php'); ?>
