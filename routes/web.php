<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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
Route::post('/ishyiga/login', [AuthenticatedSessionController::class, 'store'])->name('ishyiga.login');

Route::post('ishyiga/register', [RegisteredUserController::class, 'store'])
    ->name('ishyiga.register');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['prefix' => '/home/'], function () {

    Route::get('/All_calls', [CallController::class, 'allCalls'])->name('admin.calls.allCalls');
    Route::get('get/All_calls', [CallController::class, 'getAllCalls'])->name('admin.calls.getAllCalls');

    Route::get('/Missed_calls', [CallController::class, 'missedCalls'])->name('admin.calls.missedCalls');
    Route::get('get/Missed_calls', [CallController::class, 'getMissedCalls'])->name('admin.calls.getMissedCalls');

    Route::get('/Incoming_calls', [CallController::class, 'incomingCalls'])->name('admin.calls.incomingCalls');
    Route::get('get/Incoming_calls', [CallController::class, 'getIncomingCalls'])->name('admin.calls.getIncomingCalls');

    Route::get('/Outgoing_calls', [CallController::class, 'outgoingCalls'])->name('admin.calls.outgoingCalls');
    Route::get('get/Outgoing_calls', [CallController::class, 'getOutgoingCalls'])->name('admin.calls.getOutgoingCalls');

    Route::get('calls/callDetail/{id}', [CallController::class, 'callDetail'])->name('admin.calls.callDetail');
    Route::get('getCalls/Detail/{phone}', [CallController::class, 'getCallDetail'])->name('admin.calls.getCallDetail');


    Route::get('/All_users', [UserController::class, 'allUsers'])->name('admin.users.allUsers');
    Route::get('get/All_users', [UserController::class, 'getAllUsers'])->name('admin.users.getAllUsers');
    Route::get('/add_User', [UserController::class, 'createUser'])->name('admin.users.createUser');
    Route::post('/save/store_user', [UserController::class, 'save_user'])->name('admin.users.save_user');



    Route::get('/reports', [ReportController::class, 'index'])->name('admin.reports.index');
    Route::post('/reports/get_all', [ReportController::class, 'getAllLogs'])->name('admin.reports.getAllLogs');
    Route::post('/reports/get_customized', [ReportController::class, 'getCategorized'])->name('admin.reports.getCategorized');

    Route::get('/reports/export_all/{data}', [ExportController::class, 'exportAll'])->name('admin.reports.exportAll');
    Route::post('/reports/export_customized', [ExportController::class, 'exportCustomized'])->name('admin.reports.exportCustomized');

});
