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
    return "Sky Farms - Backend Interview";
});



$router->group(['prefix' => 'v1/api'], function () use ($router) { 
    $router->get("todos" , "TodoController@getTodos");
    $router->get("todo/{id}", "TodoController@getTodo");
    $router->post("todos", "TodoController@saveTodo");
    $router->put("todos/{id}", "TodoController@updateTodo");
    $router->delete("todo/{id}", "TodoController@deleteTodo");
});
 