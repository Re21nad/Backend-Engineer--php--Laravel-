<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FibonacciController;


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

// Path of Home Page
Route::get('/', function () {
    return view('home');
});

// Path for the file of question 5
Route::get('/fibonacci/{length}', [FibonacciController::class, 'generateFibonacci']);

