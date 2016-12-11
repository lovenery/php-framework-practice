<?php

require 'Task.php';

$tasks = $app['database']->selectAll('todos', 'Task');
$name = 'Jane';

require 'views/index.view.php';
