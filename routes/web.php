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
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sliders', [App\Http\Controllers\SiteConfigurationController::class, 'manageSliders'])->name('manage.sliders');
Route::get('/about', [App\Http\Controllers\SiteConfigurationController::class, 'manageAbout'])->name('manage.about');
Route::get('/services', [App\Http\Controllers\SiteConfigurationController::class, 'manageServices'])->name('manage.services');
Route::get('/choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'manageChooseUs'])->name('manage.choose-us');
Route::get('/footer', [App\Http\Controllers\SiteConfigurationController::class, 'manageFooter'])->name('manage.footer');
Route::get('/choose-us-read-more', [App\Http\Controllers\AboutController::class, 'chooseReadMore'])->name('choose-us.read-more');

Route::post('/post-sliders', [App\Http\Controllers\SiteConfigurationController::class, 'postSliders'])->name('sliders.post');
Route::post('/post-services', [App\Http\Controllers\SiteConfigurationController::class, 'postServices'])->name('services.post');
Route::post('/post-about', [App\Http\Controllers\SiteConfigurationController::class, 'postAbout'])->name('about.post');
Route::post('/post-footer', [App\Http\Controllers\SiteConfigurationController::class, 'postFooter'])->name('footer.post');
Route::post('/post-choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'postChooseUs'])->name('choose-us.post');
Route::post('/post-services-heading', [App\Http\Controllers\SiteConfigurationController::class, 'postServicesHeading'])->name('services-heading.post');
