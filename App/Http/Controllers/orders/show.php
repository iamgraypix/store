<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$order = $db->query("SELECT items.name, order_details.* FROM order_details JOIN items 
ON order_details.item_id = items.id WHERE order_id = :id", [
    "id" => $_GET['id']
])->get();


$amount = $db->query("SELECT amount FROM orders WHERE id = :id", ["id" => $_GET['id']])->find();
$date = $db->query("SELECT created_at FROM orders WHERE id = :id", ["id" => $_GET['id']])->find();


view("orders/show.view.php", [
    "order" => $order,
    "amount" => $amount['amount'],
    "date" => $date['created_at']
]);