<?php

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
