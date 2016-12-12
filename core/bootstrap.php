<?php

use App\Core\App;

// $app = [];
// $app['config'] = require 'config.php';
//
// // using composer to autoload
// // require 'core/Router.php';
// // require 'core/Request.php';
// // require 'core/database/Connection.php';
// // require 'core/database/QueryBuilder.php';
//
// $pdo = Connection::make($app['config']['database_config']);
// $app['database'] = new QueryBuilder($pdo);


App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database_config'])
));

// helper
function view($name, $data = [])
{
    extract($data); // ['nmae' => 'A', 'age' => 24] ==> $name='A'; $age=24;
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
