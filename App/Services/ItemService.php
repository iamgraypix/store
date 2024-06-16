<?php

namespace App\Services;

use App\Interfaces\ItemsRepositoryInterface;
use App\Repository\ItemsRepository;
use Core\App;

class ItemService
{

    private $itemRepo;

    public function __construct()
    {
        $this->itemRepo = App::resolve(ItemsRepositoryInterface::class);
    }

    public static function get_all_item()
    {
        return (new static)->itemRepo->get();
    }

    public static function find_item(int $id)
    {
        return (new static)->itemRepo->find($id);
    }

    public static function create_item(array $fields)
    {
        (new static)->itemRepo->create($fields);
    }

    public static function update_item(int $id, array $fields)
    {
        (new static)->itemRepo->update($id, $fields);
    }
}
