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
Route::get('/messages', [App\Http\Controllers\IndexController::class, 'getMessages'])->name('manage.messages');
Route::get('/services', [App\Http\Controllers\AboutController::class, 'getServices'])->name('services.read-more');
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'aboutReadMore'])->name('about-us.read-more');
Route::get('/choose-us', [App\Http\Controllers\AboutController::class, 'chooseReadMore'])->name('choose-us.read-more');
Route::get('/download-profile', [App\Http\Controllers\AboutController::class, 'downloadProfile'])->name('download.profile');
Route::post('/iposaudi-contact', [App\Http\Controllers\IndexController::class, 'postContact'])->name('iposaudi.contact');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manage-sliders', [App\Http\Controllers\SiteConfigurationController::class, 'manageSliders'])->name('manage.sliders');
Route::get('/manage-about', [App\Http\Controllers\SiteConfigurationController::class, 'manageAbout'])->name('manage.about');
Route::get('/manage-services', [App\Http\Controllers\SiteConfigurationController::class, 'manageServices'])->name('manage.services');
Route::get('/manage-choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'manageChooseUs'])->name('manage.choose-us');
Route::get('/manage-footer', [App\Http\Controllers\SiteConfigurationController::class, 'manageFooter'])->name('manage.footer');


Route::post('/post-sliders', [App\Http\Controllers\SiteConfigurationController::class, 'postSliders'])->name('sliders.post');
Route::post('/post-services', [App\Http\Controllers\SiteConfigurationController::class, 'postServices'])->name('services.post');
Route::post('/post-about', [App\Http\Controllers\SiteConfigurationController::class, 'postAbout'])->name('about.post');
Route::post('/post-footer', [App\Http\Controllers\SiteConfigurationController::class, 'postFooter'])->name('footer.post');
Route::post('/post-choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'postChooseUs'])->name('choose-us.post');
Route::post('/post-services-heading', [App\Http\Controllers\SiteConfigurationController::class, 'postServicesHeading'])->name('services-heading.post');

