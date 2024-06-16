<?php

use App\Http\Forms\RegisterItemForm;
use App\Services\ItemService;


$name = $_POST['name'];
$listing_price = $_POST['listing-price'];
$retail_price = $_POST['retail-price'];

// Validation
$form = RegisterItemForm::validation([
    'name' => $name,
    'listing-price' => $listing_price,
    'retail-price' => $retail_price
]);

ItemService::create_item([
    'name' => $name,
    'listing' => $listing_price,
    'retail' => $retail_price
]);




// Redirect
redirect('/items');
