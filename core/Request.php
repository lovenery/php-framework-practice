<?php
class Request
{
    public static function uri()
    {
        // var_dump(trim($_SERVER['REQUEST_URI'], '/'));
        // trim 移除字串兩側的字元
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
