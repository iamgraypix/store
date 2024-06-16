<?php


use App\Services\ItemService;


$item = ItemService::find_item($_GET['id']);


view("items/edit.view.php", [
    "item" => $item
]);