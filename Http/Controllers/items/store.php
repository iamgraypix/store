<?php

use Core\Database;
use Core\Session;
use Core\Validation;
use Http\Forms\RegisterItemForm;

$name = $_POST['name'];
$listing_price = $_POST['listing-price'];
$retail_price = $_POST['retail-price'];

// Validation
$form = RegisterItemForm::validation([
    'name' => $name,
    'listing-price' => $listing_price,
    'retail-price' => $retail_price
]); 


$config = require base_path('config.php');

$db = new Database($config['database']);
$db->query("INSERT INTO items (name, listing, retail) VALUES (:name, :listing, :retail)", [
    'name' => $name,
    'listing' => $listing_price,
    'retail' => $retail_price
]);


// Redirect
redirect('/items');
