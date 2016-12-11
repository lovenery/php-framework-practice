<?php

// die and dump
function dd($value)
{
    //var_dump($value);
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
