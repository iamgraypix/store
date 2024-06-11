<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$capital = $db->query("SELECT SUM(total_listing) AS capital FROM supplies")->find()['capital'];

$sales = $db->query("SELECT SUM(amount) as sales FROM orders")->find()['sales'];


view('sales/index.view.php', [
    'capital' => $capital,
    'sales' => $sales,
    'revenue' => $sales - $capital
]);