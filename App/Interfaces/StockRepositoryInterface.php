<?php 

namespace App\Interfaces;

interface StockRepositoryInterface {

    public function get();

    public function available();

}