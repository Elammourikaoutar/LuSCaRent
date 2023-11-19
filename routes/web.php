<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CarController;
use App\Http\Controllers\CommandController;
 
Route::get('/', [CarController::class, 'index']);
Route::resource('/cars', CarController::class);
Route::post('/cars', [CarController::class, 'index'])->name('cars.index');
Route::post('/contact', [CarController::class, 'contact'])->name('cars.contact');
Route::post('/add/car', [CarController::class, 'same'])->name('cars.same');
Route::put('/add/cars', [CarController::class, 'modifier'])->name('cars.modifier');

Route::resource('/commands', CarController::class);
Route::get('/commands/{id}/create', [CommandController::class, 'create'])->name('command.create');
Route::post('/commands/{id}/create', [CommandController::class, 'addme'])->name('command.store');
Route::get('/commands/{commandId}/{carId}/delete', [CommandController::class, 'deleteUserCommands'])->name('command.delete');
Route::delete('/commands/{commandId}/{carId}/delete', [CommandController::class, 'deleteUserCommands'])->name('command.delete');
Route::delete('/commands/{commandId}/{carId}/delete', [CommandController::class, 'deleteAdminCommands'])->name('commands.sup');
Route::put('/commands/{commandId}/{carId}/editer', [CommandController::class, 'edit'])->name('commands.edit');

use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\detailsController;

Route::get('/users', [UsersController::class, 'login'])->name('users.login');
Route::post('/auth', [UsersController::class, 'auth'])->name('users.auth');
Route::post('/logout', [UsersController::class, 'logout'])->name('users.logout');
Route::get('/register', [UsersController::class, 'create'])->name('users.register');
Route::post('/register', [UsersController::class, 'register'])->name('users.register');Route::get('/register', [UsersController::class, 'create'])->name('users.register');
Route::get('/info', [UsersController::class, 'create'])->name('users.info');
Route::post('/info', [UsersController::class, 'info'])->name('users.info');
Route::get('/user/{id}/profile', [UsersController::class, 'show'])->name('users.profile');
Route::get('/about', [aboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/home', [homeController::class, 'index'])->name('home.index');
Route::get('/details', [detailsController::class, 'index'])->name('details.index');
 

Route::get('/admin', [AdminsController::class, 'index'])->name('admins.index');
Route::post('/admin', [AdminsController::class, 'index'])->name('admins.index');
Route::get('/reservation',[AdminsController::class,'reservation'])->name('admins.reservation');
Route::post('/reservation',[AdminsController::class,'reservation'])->name('admins.reservation');
Route::get('/commentaire',[AdminsController::class,'commentaire'])->name('admins.commentaire');
Route::post('/commentaire',[AdminsController::class,'commentaire'])->name('admins.commentaire');
Route::get('/delete-reservation/{id}',[AdminsController::class,'deletereservation']);

Route::get('/testmail', [UsersController::class, 'testmail']);
