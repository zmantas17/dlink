<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemoBaseController;
use App\Http\Controllers\DLinkController;
use App\Http\Controllers\RMAController;
use App\Http\Controllers\SerialNumberController;
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
// DLink Controller
Route::get('/', [DLinkController::class, 'index']);

// Client Controller
Route::get('/clients', [ClientController::class, 'allClients']);
Route::get('/add-client', [ClientController::class, 'newClientForm']);
Route::post('/store-client', [ClientController::class, 'storeClient']);
Route::post('/search-client', [ClientController::class, 'askSearchClient']);
Route::get('/search-client/{searchString}', [ClientController::class, 'searchClient']);
Route::get('/client/{client}/delete/ask', [ClientController::class, 'viewRemoveClientForm']);
Route::get('/client/{client}/delete/confirm', [ClientController::class, 'deleteClientForm']);
Route::get('/client/{client}/edit', [ClientController::class, 'viewEditClientForm']);
Route::patch('/client/{client}/edit', [ClientController::class, 'updateClientForm']);

// RMA Controller
Route::get('/rma', [RMAController::class, 'viewRmaBases']);
Route::get('/add-rma-base', [RMAController::class, 'newRmaBaseForm']);
Route::post('/store-rma-base', [RMAController::class, 'storeRmaBase']);
Route::get('/rma/{rma}', [RMAController::class, 'viewRmaBase']);
Route::get('/rma/{rma}/delete/ask', [RMAController::class, 'viewRemoveRmaBaseForm']);
Route::get('/rma/{rma}/delete/confirm', [RMAController::class, 'deleteRmaBaseForm']);
Route::get('/rma/{rma}/edit', [RMAController::class, 'viewEditRmaBaseForm']);
Route::patch('/rma/{rma}/edit', [RMAController::class, 'updateRmaBaseForm']);

// Demo Base Controller
Route::get('/demo-base', [DemoBaseController::class, 'demoBase']);
Route::get('/add-demo-device', [DemoBaseController::class, 'newDemoDevice']);
Route::post('/store-demo-device', [DemoBaseController::class, 'storeDemoDevice']);
Route::get('/add-demo-contract', [DemoBaseController::class, 'newDemoContract']);
Route::post('/store-demo-contract', [DemoBaseController::class, 'storeDemoContract']);
Route::get('/view-demo-contract', [DemoBaseController::class, 'viewDemoContract']);
Route::get('/contract/{contract}/finish', [DemoBaseController::class, 'finishDemoContract']);
Route::get('/contract/{contract}/resume', [DemoBaseController::class, 'resumeDemoContract']);
Route::get('/contract/{contract}/delete/confirm', [DemoBaseController::class, 'deleteDemoContract']);
Route::get('/view-demo-contract/finished', [DemoBaseController::class, 'finishedDemoContract']);
Route::get('/view-demo-contract/notfinished', [DemoBaseController::class, 'notFinishedDemoContract']);

// Serial Number Controller
Route::get('/serial-number', [SerialNumberController::class, 'viewSerialNumber']);
Route::post('/store-serial-number', [SerialNumberController::class, 'storeSNFile']);

// Dashboard
Route::get('/dashboard', [DLinkController::class, 'dashboard'])->name('dashboard');

// Logout
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [DLinkController::class, 'perform'])->name('logout.perform');
 });
require __DIR__.'/auth.php';
