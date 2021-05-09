<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;

use App\Http\Controllers\API\ProductController;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [RegisterController::class, 'register']);

Route::post('login', [RegisterController::class, 'login']);



Route::middleware('auth:api')->group(function () {

    Route::resource('products', ProductController::class);
});

Route::post('register2', [AuthController::class, 'register']);
Route::post('login2', [AuthController::class, 'login']);

Route::apiResource('projects', ProjectController::class)->middleware('auth:api');
