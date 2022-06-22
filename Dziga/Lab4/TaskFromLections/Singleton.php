<?php

class Singleton
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function show()
    {
        var_dump($this);
    }

    private function __clone() {}
}