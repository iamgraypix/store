<?php

use App\Services\OrderService;


$items = $_POST['item_details'];
$total_pay = $_POST['totalPay'];


OrderService::create_order($total_pay, $items);


redirect("/orders");
