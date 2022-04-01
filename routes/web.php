<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/meetings', function () {
    return view('meetings');
})->name('meetings');

Route::get('/meeting-details', function () {
    return view('meeting-details');
})->name('meeting-details');

Route::get('/Api',[ApiController::class, 'Api'])->name('Api');

