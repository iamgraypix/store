<?php

use Core\App;
use Core\Database;
use App\Http\Forms\RegisterItemForm;
use App\Interfaces\ItemsRepositoryInterface;

$db = App::resolve(Database::class);
$repo = App::resolve(ItemsRepositoryInterface::class);

$name = $_POST['name'];
$listing_price = $_POST['listing-price'];
$retail_price = $_POST['retail-price'];

// Validation
$form = RegisterItemForm::validation([
    'name' => $name,
    'listing-price' => $listing_price,
    'retail-price' => $retail_price
]);


$new_item = $repo->create([
    'name' => $name,
    'listing' => $listing_price,
    'retail' => $retail_price
]);



// Redirect
redirect('/items');
