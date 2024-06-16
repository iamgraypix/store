<?php

use App\Interfaces\ItemsRepositoryInterface;
use Core\App;


$item_repo = App::resolve(ItemsRepositoryInterface::class);

$item = $item_repo->find($_GET['id']);


view("items/edit.view.php", [
    "item" => $item
]);