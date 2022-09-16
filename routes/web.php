<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Connection;

// Controller
use App\Http\Controllers\DataController;



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

    // Test database connection
    try {
        DB::connection()->getPdo();
        echo "Connected successfully to: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Could not connect to the database. Please check your configuration. error:" . $e );
    }

    return view('welcome');
});

Route::get('/beranda',[DataController::Class, 'beranda']);
Route::get('/data',[DataController::Class, 'data']);
Route::get('/get-data',[DataController::Class,'get_data']);
Route::post('/create-data',[DataController::Class,'create_data']);
