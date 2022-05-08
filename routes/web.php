<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ResourcesController;

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

Route::get('/',  [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [AboutController::class, 'about'])->name('about');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/resources', [ResourcesController::class, 'resources'])->name('resources');
