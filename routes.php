<?php 

$router->get('/', 'index.php');
$router->get('/supplies', 'supplies/index.php');
$router->get('/orders', 'orders/index.php');
$router->get('/items', 'items/index.php');
$router->get('/stocks', 'stocks/index.php');
$router->get('/sales', 'sales/index.php');

$router->get('/items/create', 'items/create.php');
$router->get('/supplies/create', 'supplies/create.php');

$router->post('/items/store', 'items/store.php');
$router->post('/supplies/store', 'supplies/store.php');
$router->post('/orders/store', 'orders/store.php');

$router->get('/orders/show', 'orders/show.php');

$router->get('/items/edit', 'items/edit.php');

$router->put('/items/update', 'items/update.php');


