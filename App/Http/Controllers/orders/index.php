<?php

use App\Services\OrderService;
use App\Services\StockService;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$stocks = StockService::available_stocks();

$orders = OrderService::get_all_orders();


view('orders/index.view.php', [
    'stocks' => $stocks,
    'orders' => $orders
]);