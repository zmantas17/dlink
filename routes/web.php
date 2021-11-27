<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DLinkController;
use Illuminate\Support\Facades\Route;

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
// DLinkController
Route::get('/', [DLinkController::class, 'index']);

// ClientController
Route::get('/clients', [ClientController::class, 'allClients']);
Route::get('/add-client', [ClientController::class, 'newClientForm']);
Route::post('/store-client', [ClientController::class, 'storeClient']);
Route::get('/client/{client}/delete/ask', [ClientController::class, 'viewRemoveClientForm']);
Route::get('/client/{client}/delete/confirm', [ClientController::class, 'deleteClientForm']);
Route::get('/client/{client}/edit', [ClientController::class, 'viewEditClientForm']);
Route::patch('/client/{client}/edit', [ClientController::class, 'updateClientForm']);

// Dashboard
Route::get('/dashboard', [DLinkController::class, 'dashboard'])->name('dashboard');

// Logout
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [DLinkController::class, 'perform'])->name('logout.perform');
 });
require __DIR__.'/auth.php';
