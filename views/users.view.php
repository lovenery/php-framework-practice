<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php
    foreach ($users as $user) {
       echo $user->name . ',';
    }
?>

<?php require('partials/footer.php'); ?>
