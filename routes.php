<?php

$router->get('', 'PagesController@home');

$router->get('users', 'UserController@index');
$router->post('users', 'UserController@store');
