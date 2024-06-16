<?php


use App\Services\ItemService;


$items = ItemService::get_all_item();


view('items/index.view.php', [
    'items' => $items
]);
