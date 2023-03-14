<?php

use App\Http\Controllers\UserController;
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

Route::get('/view', function () {
    return view('view');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/show', function () {
    return view('show');
});  
Route::post('/formlogin', [UserController::class,'loginform']);

// Route::get('/profile/{lang}', function ($lang) {
//     App::setLocale($lang);
//     return view('profile');
// });
