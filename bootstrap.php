<?php

use App\Interfaces\ItemsRepositoryInterface;
use App\Interfaces\OrderRepositoryInterface;
use App\Interfaces\StockRepositoryInterface;
use App\Repository\ItemsRepository;
use App\Repository\OrderRepository;
use App\Repository\StockRepository;
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

$container->bind(OrderRepositoryInterface::class, function (){
    return new OrderRepository(App::resolve(Database::class));
});

$container->bind(StockRepositoryInterface::class, function (){
    return new StockRepository(App::resolve(Database::class));
});


App::setContainer($container);