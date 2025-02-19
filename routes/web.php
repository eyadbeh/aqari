<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\FavoriteController;

use App\Models\User;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/landing', function () {
    return view('admin.landing');
});

Route::get('/team', function () {
    return view('admin.team');
});

Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');

Route::get('/order_list', [UnitController::class, 'showOrderList']);


Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
});

Route::get('/faq', function () {
    return view('user.faq');
});


Route::get('/units', [UnitController::class, 'index'])->name('units.index');

Route::get('/view', [UnitController::class, 'initail'])->name('view.initail');




Route::get('/product_details', function () {
    return view('user.product_details');
});

Route::get('/settings', function () {
    return view('admin.settings');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'dashboard')->name('dashboard');
    Route::get('/admin', 'admin')->name('admin');
    Route::post('/logout', 'logout')->name('logout');
});





// Route::get('/test-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         return 'Connected to the database successfully!';
//     } catch (\Exception $e) {
//         return 'Failed to connect to the database: ' . $e->getMessage();
//     }
// });



// Route::get('/check-schema', function () {
//     $columns = Schema::getColumnListing('users');
//     return response()->json($columns);
// });


// Route::get('/test-insert', function () {
//     try {
//         User::create([
//             'first_name' => 'abo',
//             'last_name' => 'engy',
//             'phone' => 1005957673,
//             'email' => 'aboengy@example.com',
//             'password' => bcrypt('aboengy'),
//             'remember_token' => Str::random(10),
//         ]);
//         return 'User inserted successfully!';
//     } catch (\Exception $e) {
//         return 'Failed to insert user: ' . $e->getMessage();
//     }
// });