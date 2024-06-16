<?php

use Core\App;
use Core\Database;
use App\Http\Forms\RegisterItemForm;

$name = $_POST['name'];
$listing_price = $_POST['listing-price'];
$retail_price = $_POST['retail-price'];

// Validation
$form = RegisterItemForm::validation([
    'name' => $name,
    'listing-price' => $listing_price,
    'retail-price' => $retail_price
]);


$db = App::resolve(Database::class);

$db->query("INSERT INTO items (name, listing, retail) VALUES (:name, :listing, :retail)", [
    'name' => $name,
    'listing' => $listing_price,
    'retail' => $retail_price
]);

$db->query("INSERT INTO stocks (item_id) VALUES (:id)", ['id' => $db->lastId()]);


// Redirect
redirect('/items');
