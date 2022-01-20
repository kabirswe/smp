<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductLabelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentController;
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
Route::get('/product_page', [PagesController::class, 'product_page'])->name('product_page');
Route::get('/product_details', [PagesController::class, 'product_details'])->name('product_details');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog_details', [PagesController::class, 'blog_details'])->name('blog_details');

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
    Route::resource('product_label', ProductLabelController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product_image', ProductImageController::class);
    Route::resource('post_category', PostCategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('post_comment', PostCommentController::class);


    
});
