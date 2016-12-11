<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index</title>
    </head>
    <body>
        <h1>Name: <?= $name ?></h1>
        <?php
            foreach ($tasks as $task) {
               echo $task->description;
            }
        ?>
    </body>
</html>
