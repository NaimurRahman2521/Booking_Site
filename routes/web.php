<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\LocationController;


Route::get('/', [BookingController::class, 'index'])->name('home');
Route::get('/apartment-detail', [BookingController::class, 'detail'])->name('detail');
//Route::get('/', [AdminLoginController::class, 'index'])->name('admin-login');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('/role/add', [RoleController::class, 'index'])->name('role.add');
    Route::post('/role/new', [RoleController::class, 'create'])->name('role.new');
    Route::get('/role/manage', [RoleController::class, 'manage'])->name('role.manage');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

    Route::get('/user/add', [UserController::class, 'index', ])->name('user.add');
    Route::post('/user/new', [UserController::class, 'create'])->name('user.new');
    Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');


    Route::post('/location/new', [LocationController::class, 'create'])->name('location.new');
    Route::get('/location/manage', [LocationController::class, 'manage'])->name('location.manage');
    Route::get('/location/edit', [LocationController::class, 'edit'])->name('location.edit');
    Route::post('/location/update', [LocationController::class, 'update'])->name('location.update');
    Route::get('/location/delete/{id}', [LocationController::class, 'delete'])->name('location.delete');

    Route::post('/apartment/new', [ApartmentController::class, 'create'])->name('apartment.new');
    Route::get('/apartment/manage', [ApartmentController::class, 'manage'])->name('apartment.manage');
    Route::get('/apartment/edit', [ApartmentController::class, 'edit'])->name('apartment.edit');
    Route::post('/apartment/update', [ApartmentController::class, 'update'])->name('apartment.update');
    Route::get('/apartment/delete/{id}', [ApartmentController::class, 'delete'])->name('apartment.delete');
});
