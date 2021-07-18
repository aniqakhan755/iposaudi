<?php

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sliders', [App\Http\Controllers\SiteConfigurationController::class, 'manageSliders'])->name('manage.sliders');
Route::get('/about', [App\Http\Controllers\SiteConfigurationController::class, 'manageAbout'])->name('manage.about');
Route::get('/services', [App\Http\Controllers\SiteConfigurationController::class, 'manageServices'])->name('manage.services');
