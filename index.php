<?php
// php -S localhost:8888
require 'function.php';
// $fuck = ["123","213"];
// dd($fuck);

require 'Task.php';
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');
} catch (PDOException $e) {
    die($e->getMessage());
}
$statement = $pdo->prepare('select * from todos');
$statement->execute();
// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
var_dump($tasks);


foreach ($tasks as $task) {
   echo $task->description;
}

?>
