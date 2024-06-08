<?php

use Core\App;
use Core\Database;
use Http\Forms\SupplyForm;

$item_id = $_POST['item'];
$qty = $_POST['qty'];

$db = App::resolve(Database::class);

$form = SupplyForm::validation([
    'item' => $item_id,
    'qty' => $qty
]);

$item = $db->query("SELECT * FROM items WHERE id = :id", ['id' => $item_id])->find();

if (!$item) {
    $form->error('item', 'Item does not exists')->throw();
}

$total_retail = $item['retail'] * $qty;
$total_listing = $item['listing'] * $qty;

$db->query("INSERT INTO supplies (item_id, qty,retail,listing, total_retail, total_listing) 
VALUES (:item, :qty, :retail, :listing, :total_retail, :total_listing)", [
    'item' => $item_id,
    'qty' => $qty,
    'retail' => $item['retail'],
    'listing' => $item['listing'],
    'total_retail' => $total_retail,
    'total_listing' => $total_listing
]);

redirect('/supplies');
