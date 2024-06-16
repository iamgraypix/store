<?php

use App\Services\OrderService;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$order = OrderService::find_order($_GET['id']);


view("orders/show.view.php", [
    "items" => $order['items'],
    "amount" => $order['amount'],
    "date" => $order['created_at']
]);