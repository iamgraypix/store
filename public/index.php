<?php

use Core\ExceptionValidation;
use Core\Router;
use Core\Session;

session_start();

const BASE_PATH = __DIR__ . '../../';
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . 'Core/functions.php';


require base_path('bootstrap.php');

$router = new Router;
require base_path('routes.php');

$uri = request_url();
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


try {
    $router->route($uri, $method);
} catch (ExceptionValidation $exception)
{
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->fields);
    $router->previousUrl();
}



Session::unflash();