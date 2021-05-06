<?php

use App\Http\Controllers\MyController;
use App\Models\Driver;
use Illuminate\Support\Facades\DB;
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
});
Route::get('/home', [MyController::class, 'openHomepage']);
Route::get('/drivers', [MyController::class, 'getDrivers']);
Route::get('/driver/{id}', [MyController::class, 'getDriver']);
Route::get('/transports', [MyController::class, 'getTransportsInfo']);
Route::get('/ways', [MyController::class, 'getWaysInfo']);






Route::get('search', function () {
    return view('myview', ['age' => DB::table('drivers')->get()]);
});

//where('name', 'like', "%$search%")->
