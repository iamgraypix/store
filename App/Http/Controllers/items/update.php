<?php


use App\Http\Forms\RegisterItemForm;
use App\Services\ItemService;


$form = RegisterItemForm::validation([
    'name' => $_POST['name'],
    'listing-price' => $_POST['listing-price'],
    'retail-price' => $_POST['retail-price']
]);


// Check if the id exists
$item = ItemService::find_item($_POST['id']);

if (!$item) {
    $form->error('name', 'Item does not exists')->throw();
}

// Update the item
ItemService::update_item($_POST['id'], [
    'name' => $_POST['name'],
    'listing' => $_POST['listing-price'],
    'retail' => $_POST['retail-price']
]);


redirect("/items");
