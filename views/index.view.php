<?php require('partials/head.php'); ?>

<h1>Name: <?= $name ?></h1>
<?php
    foreach ($tasks as $task) {
       echo $task->description;
    }
?>

<?php require('partials/footer.php'); ?>
