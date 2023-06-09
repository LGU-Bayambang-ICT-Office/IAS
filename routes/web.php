<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditPlanController;
use App\Models\Audit_Plan;
use App\Http\Controllers\AuditClauseController;

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


Route::get('/plan/create', [AuditPlanController::class, 'index'])->name('create-plan');
Route::post('/plan/create', [AuditPlanController::class, 'store']);
Route::get('/plan/list', [AuditPlanController::class, 'show'])->name('list-plan');

Route::get('/plan/assign/{id}', [AuditPlanController::class, 'selected_plan'])->name('selected_plan');
Route::post('/plan/assign/{id}', [AuditPlanController::class, 'assign'])->name('assign-auditor');

Route::get('/clause/create', [AuditClauseController::class, 'index'])->name('create-clause');
Route::post('/clause/create', [AuditClauseController::class, 'store']);

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
