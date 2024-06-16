<?php 

namespace App\Repository;

use Core\Database;
use App\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface {

    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }
    public function get()
    {
        return $this->db->query("SELECT * FROM orders")->get();
    }

    public function find(int $id)
    {
        $query = "SELECT * FROM orders WHERE id = :id";
        return $this->db->query($query, ['id' => $id])->find();
    }

    public function details($id)
    {
        $query = "SELECT items.name, order_details.* FROM order_details JOIN items ON 
        order_details.item_id = items.id WHERE order_id = :id";

        return $this->db->query($query, ['id' => $id])->get();
    }

    public function create($amount, $items)
    {
        $query = "INSERT INTO orders (amount) VALUES (:amount)";

        $this->db->query($query, ['amount' => $amount]);

        $orderId = $this->db->lastId();

        for ($i = 0; $i < sizeof($items); $i++) { 
            $this->db->query("INSERT INTO order_details (order_id, item_id, qty, unit_price) VALUES (:order, :item, :qty, :price)", [
                "order" => $orderId,
                "item" => $items[$i]['id'],
                "qty" => $items[$i]['qty'],
                "price" => $items[$i]['price'],
            ]);
        
            // Update the stocks
            $this->db->query("UPDATE stocks SET sold = sold + :qty, available = ABS(available - :qty) WHERE item_id = :item", [
                "qty" => $items[$i]['qty'],
                "item" => $items[$i]['id']
            ]);
        }
    }

}