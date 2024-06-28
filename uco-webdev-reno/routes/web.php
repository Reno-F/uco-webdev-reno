<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

Route::controller(CatalogController::class)->group(function() {
    Route::match(['get', 'post'], '/', 'list')->name('catalog');
    Route::get('/detail/{id}', 'detail')->name('catalog-detail');
    Route::get('/about', 'about')->name('about');
});
