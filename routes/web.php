<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GetQuoteController;

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\RatingController;
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

// Ck editor routes
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/supplement-manufacturing', [PagesController::class, 'supplement_manufacturing'])->name('supplement_manufacturing');
Route::get('/meet-the-team', [PagesController::class, 'meet_the_team'])->name('meet_the_team');
Route::get('/awards-certifications', [PagesController::class, 'awards_certifications'])->name('awards_certifications');
Route::get('/labdoor-partnership', [PagesController::class, 'labdoor_partnership'])->name('labdoor_partnership');
Route::get('/who-to-contact', [PagesController::class, 'who_to_contact'])->name('who_to_contact');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/fulfillment', [PagesController::class, 'fulfillment'])->name('fulfillment');
Route::get('/product-type/{slug}', [PagesController::class, 'product_type'])->name('product.type');
Route::get('/product-category/{slug}', [PagesController::class, 'product_category'])->name('product.category');
Route::get('/product-details/{slug}', [PagesController::class, 'product_details'])->name('product.details');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog-details/{slug}', [PagesController::class, 'blog_details'])->name('blog.details');
Route::get('/capsule-manufacturing', [PagesController::class, 'capsule_manufacturing'])->name('capsule_manufacturing');
Route::get('/tablet-manufacturing', [PagesController::class, 'tablet_manufacturing'])->name('tablet_manufacturing');
Route::get('/powder-manufacturing', [PagesController::class, 'powder_manufacturing'])->name('powder_manufacturing');
Route::get('/softgel-manufacturing', [PagesController::class, 'softgel_manufacturing'])->name('softgel_manufacturing');
Route::get('/gummy-vitamin-manufacturing', [PagesController::class, 'gummy_vitamin_manufacturing'])->name('gummy_vitamin_manufacturing');

Route::get('/request-quote', [PagesController::class, 'request_quote'])->name('request_quote');
Route::post('/request-quote/store', [GetQuoteController::class, 'store'])->name('store.request_quote');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('store.contact');

// Route::get('/rating', [PagesController::class, 'rating'])->name('rating');
// Route::post('/rating/store', [ContactController::class, 'store'])->name('store.rating');

Route::get('/liquid-capsule', [PagesController::class, 'liquid_capsule'])->name('liquid_capsule');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth'], ['role:admin']], function () {
    // User management resources
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // User management resources
    Route::resource('roles', RoleController::class);
    // Route::get('role/permission/create', 'RoleController@permissionCreate')->name('role.permission.create');
    // Route::post('role/permission/store', 'RoleController@permissionStore')->name('role.permission.store');

    Route::resource('users', UserController::class);
    Route::get('users/change/status', [UserController::class, 'changeStatus']);
    Route::get('block/user/list', [LoginController::class, 'blockedUserList'])->name('blockedUserList');
    Route::any('unblock/user', [LoginController::class, 'unblockUser'])->name('unblock.user');
    Route::get('user/logs',  [UserController::class, 'userLogs'])->name('user.logs');
    Route::get('user/log/show', [UserController::class, 'userLogShow'])->name('user.log.show');
    Route::get('user/log/delete', [UserController::class, 'userLogDestroy'])->name('user.log.destroy');
    Route::resource('product_category', ProductCategoryController::class);
    Route::resource('product_type', ProductTypeController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product_image', ProductImageController::class);
    Route::resource('post_category', PostCategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('post_comment', PostCommentController::class);
    Route::resource('rating', RatingController::class);


});
