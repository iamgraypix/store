<?php

use Core\App;
use Core\Database;

$items = $_POST['item_details'];
$total_pay = $_POST['totalPay'];

$db = App::resolve(Database::class);

$db->query("INSERT INTO orders (amount) VALUES (:amount)", [
    'amount' => $total_pay
]);

$orderId = $db->lastId();


for ($i = 0; $i < sizeof($items); $i++) { 
    $db->query("INSERT INTO order_details (order_id, item_id, qty, unit_price) VALUES (:order, :item, :qty, :price)", [
        "order" => $orderId,
        "item" => $items[$i]['id'],
        "qty" => $items[$i]['qty'],
        "price" => $items[$i]['price'],
    ]);

    // Update the stocks
    $db->query("UPDATE stocks SET sold = sold + :qty, available = ABS(available - :qty) WHERE item_id = :item", [
        "qty" => $items[$i]['qty'],
        "item" => $items[$i]['id']
    ]);
}

redirect("/orders");


