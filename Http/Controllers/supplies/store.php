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

if(!$item){
    $form->error('item', 'Item does not exists')->throw();
}

$db->query("INSERT INTO supplies (item_id, qty) VALUES (:item, :qty)", [
    'item' => $item_id,
    'qty' => $qty
]);

redirect('/supplies');


