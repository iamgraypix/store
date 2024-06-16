<?php 

namespace App\Interfaces;

interface OrderRepositoryInterface {

    public function get();

    public function find(int $id);

    public function details($id);

    public function create($amount, $items);

}