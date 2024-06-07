<?php

use Core\Session;
use Core\Validation;

$name = $_POST['name'];
$listing_price = $_POST['listing-price'];
$retail_price = $_POST['retail-price'];

// Validation
$errors = [];

// Fields is not empty
if (! Validation::required($name)) {
    $errors['name'] = 'Name is required';
}

if (!Validation::required($listing_price)) {
    $errors['listing-price'] = 'Listing price is required';
}

if (!Validation::required($retail_price)) {
    $errors['retail-price'] = 'Retail price is required';
}

// prices is a number
if (!is_numeric($retail_price)) {
    $errors['retail-price'] = 'Retail price must be a number';
}

if (!is_numeric($listing_price)) {
    $errors['listing-price'] = 'Listing price must be a number';
}

// retail price is not less than or equal to listing
if ($retail_price <= $listing_price) {
    $errors['retail-price'] = 'Retail price must be greater than listing price';
}

if (count($errors)) {
    Session::flash('errors', $errors);
    Session::flash('old', [
        'name' => $name,
        'retail-price' => $retail_price,
        'listing-price' => $listing_price
    ]);

    redirect('/items/create');
}



// Save

// Redirect
