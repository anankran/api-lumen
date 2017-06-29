<?php

$app->get('/salesman','SalesmanController@getSalesman');
$app->post('/salesman','SalesmanController@newSalesman');
$app->get('/sale/{id}','SaleController@getSale');
$app->post('/sale','SaleController@newSale');
