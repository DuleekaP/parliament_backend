<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\ParliamentSessionsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('members', MemberController::class);
Route::resource('parties', PartyController::class);
Route::resource('parliament_sessions', ParliamentSessionsController::class);