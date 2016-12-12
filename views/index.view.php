<?php require('partials/head.php'); ?>

<h1>Name: <?= $name ?></h1>
<?php
    foreach ($tasks as $task) {
       echo $task->description;
    }
?>

<hr>

<form action="/names" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php
    foreach ($users as $user) {
       echo $user->name;
    }
?>

<?php require('partials/footer.php'); ?>
