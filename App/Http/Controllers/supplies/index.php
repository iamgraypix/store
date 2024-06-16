<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "SELECT 
items.name, supplies.*
FROM supplies JOIN items ON 
supplies.item_id = items.id";

$supplies = $db->query($query)->get();


view('supplies/index.view.php', [
    'supplies' => $supplies
]);