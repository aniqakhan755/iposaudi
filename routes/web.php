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
Route::get('/contact-us', [App\Http\Controllers\IndexController::class, 'getContactUs'])->name('ipo-saudi.contact-us');
Route::get('/services', [App\Http\Controllers\AboutController::class, 'getServices'])->name('services.read-more');
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'aboutReadMore'])->name('about-us.read-more');
Route::get('/choose-us', [App\Http\Controllers\AboutController::class, 'chooseReadMore'])->name('choose-us.read-more');
Route::get('/download-profile', [App\Http\Controllers\AboutController::class, 'downloadProfile'])->name('download.profile');
Route::get('/get-news', [App\Http\Controllers\IndexController::class, 'getNews'])->name('iposaudi.news');
Route::get('/blogs/{slug}',[App\Http\Controllers\IndexController::class, 'getBlogDetail'])->name('iposaudi.blog-detail');
Route::get('/get-choose-us', [App\Http\Controllers\IndexController::class, 'getChooseUs'])->name('iposaudi.choose-us');
Route::get('/latest-posts', [App\Http\Controllers\IndexController::class, 'getLatestPosts'])->name('iposaudi.latest-posts');
Route::post('/iposaudi-contact', [App\Http\Controllers\IndexController::class, 'postContact'])->name('iposaudi.contact');
Route::get('/ipo-readiness', [App\Http\Controllers\IndexController::class, 'getIpoReadinessDoc'])->name('ipo.readiness');
Route::get('/recent-ipos', [App\Http\Controllers\IndexController::class, 'getRecentIpos'])->name('ipo.recent');
Route::post('/recent-ipos-search', [App\Http\Controllers\IndexController::class, 'searchRecentIpos'])->name('recent-ipo.search');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manage-sliders', [App\Http\Controllers\SiteConfigurationController::class, 'manageSliders'])->name('manage.sliders');
Route::get('/manage-about', [App\Http\Controllers\SiteConfigurationController::class, 'manageAbout'])->name('manage.about');
Route::get('/manage-services', [App\Http\Controllers\SiteConfigurationController::class, 'manageServices'])->name('manage.services');
Route::get('/manage-choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'manageChooseUs'])->name('manage.choose-us');
Route::get('/manage-footer', [App\Http\Controllers\SiteConfigurationController::class, 'manageFooter'])->name('manage.footer');
Route::get('/manage-blogs', [App\Http\Controllers\SiteConfigurationController::class, 'manageBlogs'])->name('manage.blogs');
Route::get('/manage-ipos', [App\Http\Controllers\SiteConfigurationController::class, 'manageIPOs'])->name('manage.ipos');

Route::get('/create-blog-post', [App\Http\Controllers\SiteConfigurationController::class, 'createBlogPost'])->name('blog.create-post');
Route::get('/add-ipo', [App\Http\Controllers\SiteConfigurationController::class, 'addIPO'])->name('ipo.add-ipo');
Route::post('/post-sliders', [App\Http\Controllers\SiteConfigurationController::class, 'postSliders'])->name('sliders.post');
Route::post('/post-blog', [App\Http\Controllers\SiteConfigurationController::class, 'postBlog'])->name('blog.post');
Route::post('/add-ipo', [App\Http\Controllers\SiteConfigurationController::class, 'postIPO'])->name('ipo.post');
Route::post('/post-services', [App\Http\Controllers\SiteConfigurationController::class, 'postServices'])->name('services.post');
Route::post('/post-about', [App\Http\Controllers\SiteConfigurationController::class, 'postAbout'])->name('about.post');
Route::post('/post-footer', [App\Http\Controllers\SiteConfigurationController::class, 'postFooter'])->name('footer.post');
Route::post('/post-choose-us', [App\Http\Controllers\SiteConfigurationController::class, 'postChooseUs'])->name('choose-us.post');
Route::post('/post-services-heading', [App\Http\Controllers\SiteConfigurationController::class, 'postServicesHeading'])->name('services-heading.post');

