<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\testDbController;
use App\Models\Category;
use App\Mail\newCategoryMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/testdb', [testDbController::class, 'testDBConection']);

Route::resource('categories', CategoryController::class);

Route::resource('/categories/{category}/hospitals', HospitalController::class);

Route::post('/categories/{category}/send-email', [CategoryController::class, 'sendEmail'])->name('categories.sendEmail');
