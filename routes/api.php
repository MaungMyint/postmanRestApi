<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('register', 'API\RegisterController@register');
  
Route::middleware('auth:api')->group( function () {
	Route::resource('products', 'API\ProductController');
});










// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
