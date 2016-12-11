<?php
// php -S localhost:8888
require 'function.php';
// $fuck = ["123","213"];
// dd($fuck);

require 'bootstrap.php';
require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

foreach ($tasks as $task) {
   echo $task->description;
}

?>
