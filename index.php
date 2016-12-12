<?php
// php -S localhost:8888
require 'function.php';
// php --interactive == php -a
////////////////////////

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
