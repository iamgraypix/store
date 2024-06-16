<?php

use App\Interfaces\ItemsRepositoryInterface;
use Core\App;

$item_repo = App::resolve(ItemsRepositoryInterface::class);

$items = $item_repo->get();


view('items/index.view.php', [
    'items' => $items
]);
