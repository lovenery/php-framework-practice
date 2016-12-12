<?php

// die and dump
function dd($value)
{
    //var_dump($value);
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

function view($name, $data = [])
{
    extract($data); // ['nmae' => 'A', 'age' => 24] ==> $name='A'; $age=24;
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
