<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$item = $db->query("SELECT * FROM items WHERE id = :id", [
    "id" => $_GET['id'] ?? null
])->find();


view("items/edit.view.php", [
    "item" => $item
]);