<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;

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

Route::controller(PagesController::class)->group(function(){
    Route::get('/','index')->name('pages.index');
    Route::get('about','about')->name('pages.about');
    Route::get('policy','policy')->name('pages.policy');
    Route::get('resume','resume')->name('pages.resume');
});


Route::resource('articles', ArticleController::class);
