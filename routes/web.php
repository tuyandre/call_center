<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CallCenterPhoneController;
use App\Http\Controllers\CallCenterStaffController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CallRecordController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffPhoneController;
use App\Http\Controllers\UserController;
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
Route::post('/ishyiga/login', [AuthenticatedSessionController::class, 'store'])->name('ishyiga.login');

Route::post('ishyiga/register', [RegisteredUserController::class, 'store'])
    ->name('ishyiga.register');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function () {

    Route::get('/All_callsPagination', [CallController::class, 'allCallsPagination'])->name('admin.calls.allCallsPagination');
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
    Route::post('/save/store_user', [UserController::class, 'save_user'])->name('admin.users.save_user');



    Route::get('/reports', [ReportController::class, 'index'])->name('admin.reports.index');
    Route::post('/reports/get_all', [ReportController::class, 'getAllLogs'])->name('admin.reports.getAllLogs');
    Route::post('/reports/customized_report', [ReportController::class, 'getCategorized'])->name('admin.reports.getCategorized');

    Route::get('/reports/export_all/{data}', [ExportController::class, 'exportAll'])->name('admin.reports.exportAll');
    Route::post('/reports/export_customized', [ExportController::class, 'exportCustomized'])->name('admin.reports.exportCustomized');

    Route::post('/filter/ranger_filter', [CallController::class, 'FilterDate'])->name('admin.filter.date');

    //staff
    Route::get('/staffs', [CallCenterStaffController::class, 'index'])->name('admin.staff.index');
    Route::get('/staffs/create', [CallCenterStaffController::class, 'create'])->name('admin.staff.create');
    Route::post('/staffs/store', [CallCenterStaffController::class, 'store'])->name('admin.staff.store');



    //phones
    Route::get('/phones', [CallCenterPhoneController::class, 'index'])->name('admin.phones.index');
    Route::get('/phones/create', [CallCenterPhoneController::class, 'create'])->name('admin.phones.create');
    Route::post('/phones/store', [CallCenterPhoneController::class, 'store'])->name('admin.phones.store');





    //staff phones
    Route::get('/staff/phone_list', [StaffPhoneController::class, 'index'])->name('admin.staff.phones');
    Route::post('/staff/phone_list/store', [StaffPhoneController::class, 'store'])->name('admin.staff.phones.store');


    //call records
    Route::get('/records/index', [CallRecordController::class, 'index'])->name('admin.call_records.index');
});
