<?php

namespace App\Repository;

use App\Interfaces\StockRepositoryInterface;
use Core\Database;

class StockRepository implements StockRepositoryInterface
{

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function get()
    {
        $query = "SELECT items.name, stocks.* FROM stocks JOIN items ON stocks.item_id = items.id";

        return $this->db->query($query)->get();
    }

    public function available()
    {
        $query = "SELECT items.id, items.name, items.retail, stocks.available  
            FROM stocks JOIN items ON stocks.item_id = items.id WHERE stocks.available > 0";
        
        return $this->db->query($query)->get();
    }
}
