<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<ul>
<?php
    foreach ($users as $user) {
       echo "<li>{$user->name}</li>";
    }
?>
</ul>

<?php require('partials/footer.php'); ?>
