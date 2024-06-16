<?php 

namespace App\Services;

use App\Interfaces\OrderRepositoryInterface;
use Core\App;

class OrderService {

    private $orderRepo;

    public function __construct()
    {
        $this->orderRepo = App::resolve(OrderRepositoryInterface::class);
    }

    public static function get_all_orders()
    {
        return (new static)->orderRepo->get();
    }

    public static function find_order($id)
    {
        $instance = new static;

        $order = $instance->orderRepo->find($id);
        $order['items'] = $instance->orderRepo->details($id);

        return $order;
    }

    public static function create_order($amount, $items) 
    {
        (new static)->orderRepo->create($amount, $items);
    }

}