<?php

use App\Modules\Layout\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;


Route::get('layout/test-auth', [LayoutController::class,'testAuth'])
    ->name('layout.test.auth');

Route::get('layout/test-admin', [LayoutController::class,'testAdmin'])
    //->middleware('auth')
    ->name('layout.test.admin');
