<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->get('/products','ProductController@getProducts');
$router->get('/products/{id}','ProductController@getProduct');
$router->put('/products/{id}','ProductController@updateProductStock');
$router->post('/products/{id}/rent','ProductController@rentProduct');
$router->get('/transactions','RentTransactionController@getRentTransactions');
$router->get('/transactions/{id}/return','RentTransactionController@returnRentTransaction');


