<?php

use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Postcontroller;
use App\Models\post;
use GuzzleHttp\Middleware;
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
    return view('welcome', [
        'posts' => post::all()
    ]);
});

Route::get('/login', [Logincontroller::class, 'index'])->Middleware('guest');
Route::post('/login', [Logincontroller::class, 'authenticate']);

Route::resource('posts', Postcontroller::class);
