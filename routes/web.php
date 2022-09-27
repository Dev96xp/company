<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Equipment\EquipmentController;
use App\Http\Controllers\Messages\MessageController;
use App\Http\Controllers\Supplies\SuppliesController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('equipment', [EquipmentController::class, 'index'])->name('equipment');

Route::get('supplies', [SuppliesController::class, 'index'])->name('supplies');

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('message', [MessageController::class, 'index'])->Middleware('auth')->name('message.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
