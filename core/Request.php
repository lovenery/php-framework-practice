<?php
class Request
{
    public static function uri()
    {
        // var_dump(trim($_SERVER['REQUEST_URI'], '/'));
        // trim 移除字串兩側的字元
        // parse_url 移除參數
        // http://php.net/manual/en/function.parse-url.php
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD']; // GET, POST ...
    }
}
