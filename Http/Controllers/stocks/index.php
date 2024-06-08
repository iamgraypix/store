<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$stocks = $db->query("SELECT items.name, stocks.* FROM stocks JOIN items ON stocks.item_id = items.id")->get();


view('stocks/index.view.php', [
    'stocks' => $stocks
]);