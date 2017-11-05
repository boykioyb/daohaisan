<?php
Route::get('dashboard', function () {
    return view('backend.dashboard.index');
})->name('dashboard');
