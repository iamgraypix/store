<?php 

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$items = $db->query("SELECT * FROM items")->get();


view('items/index.view.php', [
    'items' => $items
]);