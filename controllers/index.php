<?php

require 'Task.php';

// $users = $app['database']->selectAll('users');
$tasks = App::get('database')->selectAll('todos', 'Task');
$users = App::get('database')->selectAll('users');

$name = 'Jane';

require 'views/index.view.php';
