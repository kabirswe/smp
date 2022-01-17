<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PagesController;
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
    // category
    Route::resource('category', CategoryController::class);
    // ticket
    Route::resource('ticket', TicketController::class);
    Route::get('ticket/by/category/{id}', [TicketController::class, 'createByCategory'])->name('ticket.category');
    Route::get('ticket/search', [TicketController::class, 'ticketSearch'])->name('ticket.search');
});
