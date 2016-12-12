<?php
// php -S localhost:8888
require 'function.php';
// php --interactive == php -a
////////////////////////

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// require Router::load('routes.php')->direct(Request::uri(), Request::method());
// 之前是require一個controller的php檔, 現在在裡面有直接new一個controller
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
