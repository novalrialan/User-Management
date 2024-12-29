<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('user.login')->name('login');
// });

Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/auth', [UserController::class, 'auth'])->name('authenticate');
Route::post('/registerstore', [UserController::class, 'registerstore'])->name('registerstore');

Route::group(['middleware' => ['auth', 'accesscontrol:superadmin,admin,member']], function () {
    Route::get('/master', function () {
        $users = User::count();




        $data = [
            "users" => $users
        ];

        return view('master', $data);
    });
});
