<?php

use App\Http\Controllers\OccupationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', function() {
    return view('index');
});



Route::get('create_occupation',[OccupationController::class,'create'])->name('create_occupation');
Route::post('save_occupation',[OccupationController::class,'store'])->name('save_occupation');
Route::get('/occupation/indexOcupation',[OccupationController::class, 'index'])->name('occupations.index');
Route::delete('/occupation/deleteOcupation/{id}',[OccupationController::class, 'destroy'])->name('occupations.destroy');  
Route::get('/occupation/{id}',[OccupationController::class, 'edit'])->name('occupations.edit');
Route::put('/occupation/updatee/{id}',[OccupationController::class, 'update'])->name('occupations.update');

// role routes

Route::get('/role/indexRole',[RoleController::class, 'index'])->name('role.index');
Route::get('role/createRole', [RoleController::class, 'create'])->name('roles.createRole');
Route::post('role/StoreRole', [RoleController::class, 'store'])->name('role.storeRole');
Route::delete('/role/deleteRole/{role}', [RoleController::class, 'destroy'])->name('role.deleteRole');
Route::get('role/update/{role}', [RoleController::class, 'edit'])->name('role.updateRole');
Route::put('role/{role}', [RoleController::class, 'update'])->name('role.editRole');

// users routes
Route::get('/users/indexUsers',[UserController::class, 'index'])->name('users.index');
Route::get('/users/CreateUser', [UserController::class, 'create'])->name('users.createUser');
Route::post('users/CreateUser', [UserController::class, 'store'])->name('users.storeUser');
Route::delete('/users/deleteUser/{user}', [UserController::class, 'destroy'])->name('users.destroyUser');



