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

/** @var \Laravel\Lumen\Routing\Router $router */
$router->group(['prefix' => '/im'], function () use ($router) {
    //comet 接入层rpc入口
    //@see https://github.com/Gopusher/comet/wiki/notification-zh
    $router->post('/rpc', 'RpcController@index');
});
