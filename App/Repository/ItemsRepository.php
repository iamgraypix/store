<?php

namespace App\Repository;

use Core\App;
use Core\Database;
use App\Interfaces\ItemsRepositoryInterface;

class ItemsRepository implements ItemsRepositoryInterface
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function get()
    {
        return $this->db->query("SELECT * FROM items")->get();
    }

    public function find(int $id)
    {
        return $this->db->query("SELECT * FROM items WHERE id = :id", [
            'id' => $id
        ])->find();
    }

    public function create(array $fields)
    {
        $this->db->query("INSERT INTO items (name, listing, retail) VALUES (:name, :listing, :retail)", [
            "name" => $fields['name'],
            "listing" => $fields['listing'],
            "retail" => $fields['retail']
        ]);

        $this->db->query("INSERT INTO stocks (item_id) VALUES (:id)", ['id' => $this->db->lastId()]);
    }

    public function update(int $id, array $fields)
    {
        $this->db->query("UPDATE items SET name = :name, listing = :listing, retail = :retail WHERE id = :id", [
            "name" => $fields['name'],
            "listing" => $fields['listing'],
            "retail" => $fields['retail'],
            "id" => $id,
        ]);
    }

    public function delete(int $id)
    {
        
    }
}
