<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('posts', [ApiController::class, 'post']);
    Route::get('posts/{id}', [ApiController::class, 'singlePost']);
    Route::post('posts', [ApiController::class, 'createPost']);
    Route::put('posts/{id}', [ApiController::class, 'updatePost']);
    Route::delete('posts/{id}', [ApiController::class, 'deletePost']);
    Route::post('users/writer', [ApiController::class, 'createWriter']);
    Route::post(
        'users/subscriber',
        [ApiController::class, 'createSubscriber']
    );
    Route::delete('users/{id}', [ApiController::class, 'deleteUser']);
});
