<?php

use Core\Router;
use Core\Session;

session_start();

const BASE_PATH = __DIR__ . '../../';
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . 'Core/functions.php';


$router = new Router;

require base_path('routes.php');

$uri = request_url();

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);


Session::unflash();