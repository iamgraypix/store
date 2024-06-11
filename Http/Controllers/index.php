<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$count_products = $db->query("SELECT COUNT(*) as count FROM items")->find()['count'];

$sales = $db->query("SELECT SUM(amount) as sales FROM orders")->find()['sales'];

$stocks = $db->query("SELECT items.name, items.retail, stocks.* FROM stocks JOIN items ON stocks.item_id = items.id")->get();


view('index.view.php', [
    "sales" => $sales,
    "count_products" => $count_products,
    "stocks" => $stocks
]);