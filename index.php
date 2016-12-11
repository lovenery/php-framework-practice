<?php
// php -S localhost:8888
require 'function.php';
////////////////////////

require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());
