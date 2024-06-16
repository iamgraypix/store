<?php 

namespace App\Interfaces;

interface OrderRepositoryInterface {

    public function get();

    public function find();

    public function create();

}