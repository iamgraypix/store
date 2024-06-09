<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$stocks = $db->query("SELECT items.id, items.name, items.retail, stocks.available  FROM stocks JOIN items ON stocks.item_id = items.id")->get();


view('orders/index.view.php', [
    'stocks' => $stocks
]);