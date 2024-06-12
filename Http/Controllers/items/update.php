<?php

use Core\App;
use Core\Database;
use Http\Forms\RegisterItemForm;

$db = App::resolve(Database::class);

$form = RegisterItemForm::validation([
    'name' => $_POST['name'],
    'listing-price' => $_POST['listing-price'],
    'retail-price' => $_POST['retail-price']
]);


// Check if the id exists
$item = $db->query("SELECT * FROM items WHERE id = :id", [
    "id" => $_POST['id']
])->find();

if (! $item){
    $form->error('name', 'Item does not exists')->throw();
}

// Update the item
$db->query("UPDATE items SET name = :name, 
listing = :listing, retail = :retail WHERE id = :id", [
    "name" => $_POST['name'],
    "listing" => $_POST['listing-price'],
    "retail" => $_POST['retail-price'],
    "id" => $_POST['id']
]);

redirect("/items");