<?php 

namespace App\Services;

use App\Interfaces\StockRepositoryInterface;
use Core\App;

class StockService {

    private StockRepositoryInterface $stockRepo;

    public function __construct() {
        $this->stockRepo = App::resolve(StockRepositoryInterface::class);
    }

    public static function stocks() {
        return (new static)->stockRepo->get();
    }

    public static function available_stocks() {
        return (new static)->stockRepo->available();
    }

}