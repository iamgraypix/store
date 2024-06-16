<?php 

namespace App\Services;

use App\Interfaces\StockRepositoryInterface;
use Core\App;

class StockService {

    private $stockRepo;

    public function __construct() {
        $this->stockRepo = App::resolve(StockRepositoryInterface::class);
    }

    public static function stocks() {
        return (new static)->stockRepo->get();
    }

}