<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\DashboardNotaryController;
use App\Http\Controllers\DashboardAccountController;
use App\Http\Controllers\DashboardBookingController;
use App\Http\Controllers\DashboardPendingController;


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
    return view('home', [
        'title' => "Home",
        'active' => "home"
    ]);
});
// --------------------------------------------------------------------------

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'active' => "about",
        'name' => "Han Saruwa",
        'email' => "hansaruwa24@gmail.com",
        'image' => "haruwa.jpg"
    ]);
});
// --------------------------------------------------------------------------

// All Posts
Route::get('/post', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
// --------------------------------------------------------------------------

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// --------------------------------------------------------------------------

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// --------------------------------------------------------------------------

// Pending
Route::post('/pending', [PendingController::class, 'store']);
// --------------------------------------------------------------------------

// Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Admin
// Posts
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Notaries
Route::resource('/dashboard/notaries', DashboardNotaryController::class)->middleware('auth');

// Clients
Route::resource('/dashboard/clients', DashboardClientController::class)->middleware('auth');

// Pendings
Route::resource('/dashboard/pendings', DashboardPendingController::class)->middleware('auth');

// Booking
Route::resource('/dashboard/bookings', DashboardBookingController::class)->middleware('auth');
// -------------------------------------------------------------------------------------------------------------------

// Account
Route::resource('/dashboard/account', DashboardAccountController::class)->except('show', 'create', 'store')->middleware('auth');