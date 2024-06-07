<?php

use Core\Session;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path)
{
    return require base_path("views/{$path}");
}

function request_url()
{
    return parse_url($_SERVER['REQUEST_URI'])["path"];
}

function redirect($path)
{
    header("location: {$path}");
    die();
}

function isUrl($url)
{
    return $url === request_url();
}

function old($field, $default = null)
{
    return Session::get('old')[$field] ?? $default;
}

function errors($field, $default = null)
{
    return Session::get('errors')[$field] ?? $default;
}
