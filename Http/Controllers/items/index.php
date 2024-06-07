<?php 

$db = new PDO("mysql:host=localhost;dbname=store;port=3306", 'root', '');

$items = $db->query("SELECT * FROM items")->fetchAll(PDO::FETCH_ASSOC);


view('items/index.view.php', [
    'items' => $items
]);