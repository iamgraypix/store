<?php

namespace Core;

class App
{
    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function get()
    {
        return static::$container;
    }

    public static function resolve($key)
    {
        return static::get()->resolve($key);
    }

    public static function bind($key, $resolver)
    {
        static::get()->bind($key, $resolver);
    }

}
