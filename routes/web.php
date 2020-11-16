<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendTicketController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BackendEnterpriseController;
use App\Http\Controllers\BackendMonedaController;

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

/*Route::get('ticket', function () {
    return view('ticket.index');
});*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::resource('ticket', TicketController::class, ['names' => 'ticket'])->only(['index', 'show']);
Route::get('backend', [BackendController::class, 'main'])->name('backend.main');
Route::resource('backend/ticket', BackendTicketController::class, ['names' => 'backend.ticket']);
Route::resource('backend/enterprise', BackendEnterpriseController::class, ['names' => 'backend.enterprise']);
Route::resource('backend/moneda', BackendMonedaController::class, ['names' => 'backend.moneda']);
// https://..../backend/ticket/create?identerprise=1
// https://..../backend/ticket/{identerprise}/create
// https://..../backend/ticket/create/{identerprise}
Route::get('backend/ticket/create/{identerprise}', [BackendTicketController::class, 'createTicketEp'])->name('backend.ticket.createticketep');
Route::get('backend/ticket/{identerprise}/tickets', [BackendTicketController::class, 'showTickets'])->name('backend.ticket.showtickets');
Route::get('sesion', [IndexController::class, 'sesion'])->name('sesion');

//Route::get('ticket/{id}/detail', [TicketController::class, 'detail'])->name('detail');
//Route::get('ticket', [TicketController::class, 'index'])->name('ticket.index');
//Route::get('ticket/show', [TicketController::class, 'show'])->name('ticket.show');