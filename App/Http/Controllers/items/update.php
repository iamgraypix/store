<?php

use Core\App;
use Core\Database;
use App\Http\Forms\RegisterItemForm;
use App\Interfaces\ItemsRepositoryInterface;

$db = App::resolve(Database::class);
$item_repo = App::resolve(ItemsRepositoryInterface::class);

$form = RegisterItemForm::validation([
    'name' => $_POST['name'],
    'listing-price' => $_POST['listing-price'],
    'retail-price' => $_POST['retail-price']
]);


// Check if the id exists
$item = $item_repo->find($_POST['id']);

if (!$item) {
    $form->error('name', 'Item does not exists')->throw();
}

// Update the item
$item_repo->update($_POST['id'], [
    'name' => $_POST['name'],
    'listing' => $_POST['listing-price'],
    'retail' => $_POST['retail-price']
]);

redirect("/items");
