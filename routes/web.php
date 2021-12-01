<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Auth\LoginController;
=======
>>>>>>> 5b36b3633ff69fd433f634b0929acdef5e0fdcb5

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

<<<<<<< HEAD
// Route::group(['prefix' => 'admin'], function(){
//     Route::post('login', [LoginController::class, 'login']);
//     Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// });

Route::get('admin/{any?}', function () {
    return view('layout.app');
})->where('any', '.*');

Route::get('{any?}', function() {
    return view('layout.app');
=======
Route::get('/', function () {
    return view('welcome');
>>>>>>> 5b36b3633ff69fd433f634b0929acdef5e0fdcb5
});
