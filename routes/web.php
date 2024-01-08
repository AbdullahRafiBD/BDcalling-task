<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    // Login Route
    Route::match(['get', 'post'], 'login', 'AdminController@login');

    Route::group(['middleware' => ['admin']], function () {
        // Admin Dashboard Route
        Route::get('dashboard', 'AdminController@dashboard');
        // Admin Logout
        Route::get('logout', 'AdminController@logout');
        // Update Admin Password
        Route::match(['get', 'post'], 'update-admin-password', 'AdminController@updateAdminPassword');
        // check Admin Password
        Route::post('check-current-password', 'AdminController@checkAdminPassword');
        // update Admin Details
        Route::match(['get', 'post'], 'update-admin-details', 'AdminController@updateAdminDetails');
        // update Vendor Details
        Route::match(['get', 'post'], 'update-vendor-details/{slug}', 'AdminController@updateVendorDetails');
        // view Admins / Subadmins / Vendors
        Route::get('admins/{type?}', 'AdminController@admins');
        // View Vendor Details
        Route::get('view-vendor-details/{id}', 'AdminController@viewVendorDetails');
        // View users
        Route::get('view-user-details', 'AdminController@viewUserDetails');
        // Update Admin Status
        Route::post('update-admin-status', 'AdminController@updateAdminStatus');
        // Update vendor to Admin
        Route::post('update-vendor-admin', 'AdminController@updateAdminStatus');
    });
});

Route::namespace('App\Http\Controllers\Front')->group(function () {
    Route::get('/', 'IndexController@index');
    Route::post('/currency-converter/convert', 'IndexController@convert')->name('convert');

    // Vendor Login/Register
    Route::get('vendor/login-register', 'VendorController@loginRegister');

    // Vendor Register Form Post
    Route::post('vendor/register', 'VendorController@vendorRegister');

    // Confirm Vendor Account
    Route::get('vendor/confirm/{code}', 'VendorController@vendorConfirm');



    // User Login/Register
    Route::get('user/login-register', 'UserController@loginRegister');
    // User Register
    Route::post('user/register', 'UserController@userRegister');
    // User Login
    Route::post('user/login', 'UserController@userLogin');
    // User Logout
    Route::get('user/logout', 'UserController@userLogout');
    // Confirm User Account
    Route::get('user/confirm/{code}', 'UserController@confirmAccount');
});
