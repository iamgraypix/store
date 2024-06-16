<?php

use App\Services\StockService;


$stocks = StockService::stocks();


view('stocks/index.view.php', [
    'stocks' => $stocks
]);