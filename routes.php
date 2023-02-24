<?php

use App\Modules\Layout\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;


Route::get('layout/test-frontend', [LayoutController::class,'testFrontend'])
    ->name('layout.test.frontend');

Route::get('layout/test-admin', [LayoutController::class,'testAdmin'])
    //->middleware('auth')
    ->name('layout.test.admin');
