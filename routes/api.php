<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', function () {
    return response()->json([
        'students' => [
            0 => [
                'id' => 1,
                'name' => 'ABC'
            ],
            1 => [
                'id' => 2,
                'name' => 'LMN'
            ],
            2 => [
                'id' => 3,
                'name' => 'PQR'
            ],
        ]
    ]);
});
