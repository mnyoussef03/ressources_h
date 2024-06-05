<?php

use App\Http\Controllers\EmployesController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    route::resource('employes', EmployesController::class);
    Route::get('/employes/{id}/vacation', [EmployesController::class,'vacationRequest'])->name('vacation.request');
    });
    Route::get('/employes/{id}/certificate', [EmployesController::class,'certificateRequest'])->name('certificate.request');
    ;



