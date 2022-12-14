<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
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
    return view('pages.home', ['nav_home_active' => 'active']);
});

Route::get('home', function () {
    return view('pages.home',['nav_home_active' => 'active']);
});

Route::get('search', function () {
    return view('pages.search', ['nav_search_active' => 'active']);
});

Route::post('search', [SearchController::class, 'search']);
