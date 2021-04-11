<?php


class post
{
    public static $instance;

    private function __construct()
    {
        echo 'Hello world! </br>';
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new post;
        }
        return self::$instance;
    }

    public function __get($name)
    {
        var_dump(isset($_GET[$name]));
        return $_GET[$name] ?? false;
    }
}

$test = post::getInstance();

$singleton = post::getInstance();
$page = $singleton->getInstance()->page;
