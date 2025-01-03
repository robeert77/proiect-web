<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('members', MemberController::class);