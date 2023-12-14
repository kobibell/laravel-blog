<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Corrected namespace declaration

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Create something great!
|
*/

Route::resource('/', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'posts.show',
  ]);

