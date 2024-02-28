<?php

use App\Http\Controllers\Main\IndexController;
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

Route::get('/', IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories', 'as' => 'category.'], function (){
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('create');
    Route::delete('/{category}/delete', \App\Http\Controllers\Category\DeleteController::class)->name('delete');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('show');
    Route::post('/store', \App\Http\Controllers\Category\StoreController::class)->name('store');
    Route::patch('/{category}/update', \App\Http\Controllers\Category\UpdateController::class)->name('update');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('edit');
});

Route::group(['prefix' => 'tags', 'as' => 'tag.'], function (){
    Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('create');
    Route::delete('/{tag}/delete', \App\Http\Controllers\Tag\DeleteController::class)->name('delete');
    Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('show');
    Route::post('/store', \App\Http\Controllers\Tag\StoreController::class)->name('store');
    Route::patch('/{tag}/update', \App\Http\Controllers\Tag\UpdateController::class)->name('update');
    Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('edit');
});

Route::group(['prefix' => 'colors', 'as' => 'color.'], function (){
    Route::get('/', \App\Http\Controllers\Color\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Color\CreateController::class)->name('create');
    Route::delete('/{color}/delete', \App\Http\Controllers\Color\DeleteController::class)->name('delete');
    Route::get('/{color}', \App\Http\Controllers\Color\ShowController::class)->name('show');
    Route::post('/store', \App\Http\Controllers\Color\StoreController::class)->name('store');
    Route::patch('/{color}/update', \App\Http\Controllers\Color\UpdateController::class)->name('update');
    Route::get('/{color}/edit', \App\Http\Controllers\Color\EditController::class)->name('edit');
});

