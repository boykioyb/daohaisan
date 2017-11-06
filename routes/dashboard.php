<?php
Route::get('dashboard', function () {
    return view('backend.dashboard.index');
})->name('dashboard');
Route::get('product/add', function () {
    return view('backend.product.add');
})->name('dashboard-add');
