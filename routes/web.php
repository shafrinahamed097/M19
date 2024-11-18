<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/brand-insert', [DemoController::class, 'BrandInsert']);
Route::post('/brand-update/{id}', [DemoController::class, 'BrandUpdate']);
Route::post('/update-or-create/{brandName}', [DemoController::class, 'UpdateOrCreate']);
Route::get('/brand-delete/{id}', [DemoController::class, 'BrandDelete']);
Route::get('/product-price', [DemoController::class, 'IncrementDecrement']);
Route::get('/RetrievingAll', [DemoController::class, 'RetrievingAll']);
Route::get('/RetrievingSingle', [DemoController::class, 'RetrievingSingle']);
Route::get('/RetrievingPluck', [DemoController::class, 'RetrievingPluck']);
Route::get('/Aggregate', [DemoController::class, 'Aggregate']);
