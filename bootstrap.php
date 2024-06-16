<?php

use App\Interfaces\ItemsRepositoryInterface;
use App\Repository\ItemsRepository;
use Core\App;
use Core\Container;
use Core\Database;

$container = new Container;

$container->bind(Database::class, function () {
    $config = require base_path('config.php');
    return new Database($config['database'], "root", "admin123");
});

$container->bind(ItemsRepositoryInterface::class, function(){
    return new ItemsRepository(App::resolve(Database::class));
});


App::setContainer($container);