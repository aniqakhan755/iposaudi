<?php

use App\Models\AboutConfiguration;
use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use App\Models\ServiceConfiguration;
use App\Models\SliderConfiguration;
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
    $slider_configuration = (new SliderConfiguration)->where('id',1)->first();
    $about_configuration = (new AboutConfiguration)->where('id',1)->first();
    $service_configurations = (new ServiceConfiguration)->all();
    $footer_configuration = (new FooterConfiguration)->where('id',1)->first();
    $choose_configuration = (new ChooseUsConfiguration)->where('id',1)->first();

    return view('welcome',compact(['slider_configuration','about_configuration','service_configurations','footer_configuration','choose_configuration']));
})->name('welcome');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sliders', [App\Http\Controllers\SiteConfigurationController::class, 'manageSliders'])->name('manage.sliders');
Route::get('/about', [App\Http\Controllers\SiteConfigurationController::class, 'manageAbout'])->name('manage.about');
Route::get('/services', [App\Http\Controllers\SiteConfigurationController::class, 'manageServices'])->name('manage.services');
Route::get('/choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'manageChooseUs'])->name('manage.choose-us');
Route::get('/footer', [App\Http\Controllers\SiteConfigurationController::class, 'manageFooter'])->name('manage.footer');

Route::post('/post-sliders', [App\Http\Controllers\SiteConfigurationController::class, 'postSliders'])->name('sliders.post');
Route::post('/post-services', [App\Http\Controllers\SiteConfigurationController::class, 'postServices'])->name('services.post');
Route::post('/post-about', [App\Http\Controllers\SiteConfigurationController::class, 'postAbout'])->name('about.post');
Route::post('/post-footer', [App\Http\Controllers\SiteConfigurationController::class, 'postFooter'])->name('footer.post');
Route::post('/post-choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'postChooseUs'])->name('choose-us.post');
