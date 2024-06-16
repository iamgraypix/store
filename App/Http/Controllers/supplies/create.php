<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$items = $db->query("SELECT * FROM items")->get();


view('supplies/create.view.php', [
    'items' => $items
]);