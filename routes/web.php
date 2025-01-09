<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SuccessStoryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('members', MemberController::class);

Route::resource('success-stories', SuccessStoryController::class);