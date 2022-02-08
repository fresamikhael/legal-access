<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CustomerDisputeController as AdminCustomerDisputeController;
use App\Http\Controllers\Admin\FraudController as AdminFraudController;
use App\Http\Controllers\Admin\OtherController as AdminOtherController;
use App\Http\Controllers\Admin\OutstandingController as AdminOutstandingController;
use App\Http\Controllers\Admin\PermitController as AdminPermitController;
use App\Http\Controllers\CustomerDisputeController;
use App\Http\Controllers\FraudController;
use App\Http\Controllers\OutstandingController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DraftingController;
use App\Http\Controllers\HomeController;
use App\Models\Fraud;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PermitController;
use App\Http\Controllers\LitigationController;
use App\Models\CustomerDisputeModel;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/drafting', [DraftingController::class,'index']);
Route::get('/drafting/customer', [DraftingController::class,'inputCustomer']);
Route::get('/drafting/vendor', [DraftingController::class,'inputVendor']);
Route::get('/drafting/lease', [DraftingController::class,'inputLease']);

Route::get('/litigation', [LitigationController::class,'index']);

Route::get('/litigation/checkfraud/{id}', [FraudController::class,'showUser']);

Route::get('/litigation/fraud', [FraudController::class,'index']);
Route::post('/litigation/fraud', [FraudController::class,'store']);

Route::get('/litigation/outstandingLR', [OutstandingController::class,'outputShow']);
Route::get('/litigation/otherLR', [OtherController::class,'outputShow']);
Route::get('/litigation/customerdisputeLR', [CustomerDisputeController::class,'outputShow']);
Route::get('/litigation/fraudLR', [FraudController::class,'outputShow']);

Route::get('/litigation/customerDisputeCheck',[CustomerDisputeController::class,'check']);
Route::get('/litigation/otherCheck',[OtherController::class,'check']);
Route::get('/litigation/outstandingCheck',[OutstandingController::class,'check']);

Route::get('/litigation/customer-dispute',[CustomerDisputeController::class,'index']);
Route::post('/litigation/customer-dispute',[CustomerDisputeController::class,'store']);
Route::get('/litigation/outstanding', [OutstandingController::class,'index']);
Route::post('/litigation/outstanding/input', [OutstandingController::class,'store']);
Route::get('/litigation/other', [OtherController::class,'index']);
Route::post('/litigation/other/input', [OtherController::class,'store']);

Route::get('/permit/perizinanbaru', [PermitController::class,'index']);
Route::post('/permit/perizinanbaru/input', [PermitController::class,'store']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'register']);
// Route::get('/getCoba',[FraudController::class,'show']);

// Route::get('/getCobaDetail/{id}',[FraudController::class,'getbyId'])->name('cobaDetail');

Route::get('/admin/dashboard',[AdminController::class,'index']);

Route::get('/admin/dashboard/customer-dispute',[AdminCustomerDisputeController::class,'index'])->name('customer-dispute-index');
Route::get('/admin/dashboard/customer-dispute/detail/{id}',[AdminCustomerDisputeController::class,'show'])->name('customer-dispute-detail');

Route::get('/admin/dashboard/fraud',[AdminFraudController::class,'index'])->name('fraud-index');
Route::get('/admin/dashboard/fraud/detail/{id}',[AdminFraudController::class,'show'])->name('fraud-detail');
Route::post('/admin/dashboard/fraud/approval/{no_kasus}',[AdminFraudController::class,'return']);

Route::get('/admin/dashboard/outstanding',[AdminOutstandingController::class,'index'])->name('outstanding-index');
Route::get('/admin/dashboard/outstanding/detail/{id}',[AdminOutstandingController::class,'show'])->name('outstanding-detail');

Route::get('/admin/dashboard/other',[AdminOtherController::class,'index'])->name('other-index');
Route::get('/admin/dashboard/other/detail/{id}',[AdminOtherController::class,'show'])->name('other-detail');

Route::get('/admin/permit',[AdminPermitController::class,'index'])->name('permit-index');
