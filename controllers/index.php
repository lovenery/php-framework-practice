<?php

require 'Task.php';

$tasks = $app['database']->selectAll('todos', 'Task');
$users = $app['database']->selectAll('users');
$name = 'Jane';

require 'views/index.view.php';
