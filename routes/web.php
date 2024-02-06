<?php

use App\Http\Controllers\HomeController;
use App\Models\Item;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

// Route::get('/{lang?}', function ($lang = null) {
//     $language = $lang;
//     App::setLocale($language);
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'openHomePage'])->name('site.home');
