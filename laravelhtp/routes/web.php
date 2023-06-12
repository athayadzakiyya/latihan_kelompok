<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDataUserController;
use App\Http\Controllers\AdminVPendaftaranController;
use App\Http\Controllers\AdminVPembayaranController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserPedaftaranController;
use App\Http\Controllers\UserPembayaranController;
use App\Http\Controllers\UserPendaftranStatusController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Contracts\Auth\UserProvider;


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

// route halaman user
Route::get('/', [UserController::class, "index"]);
Route::get("/about", [UserController::class, "about"]);
Route::get("/class", [UserController::class, "class"]);
Route::get("/galery", [UserController::class, "galery"]);
Route::get("/guru", [UserController::class, "guru"]);
Route::get("/blog", [UserController::class, "blog"]);
Route::get("/contact", [UserController::class, "contact"]);

// mempunyai controller 
Route::get("/login", [LoginController::class, "index"]);
Route::get("/register", [RegisterController::class, "index"]);

Route::get("/profile", [UserProfileController::class, "index"]);
Route::get("/pendaftaran", [UserPedaftaranController::class, "index"]);
Route::get("/pendaftaranverifikasi", [UserPedaftaranController::class, "pendaftaranVerifikasi"]);
Route::get("/pendaftarandetail", [UserPedaftaranController::class, "show"]);
Route::get("/pendaftaranupdate", [UserPedaftaranController::class, "edit"]);
Route::get("/pembayaran", [UserPembayaranController::class, "index"]);
Route::get("/pembayaranverifikasi", [UserPembayaranController::class, "pembayaranVerifikasi"]);





// route halaman admin
Route::prefix("/admin")->group(function (){
    Route::get("/dashboard", [AdminDashboardController::class, "index"]);

    Route::get("/datauser", [AdminDataUserController::class, "index"]);

    Route::get("/verifikasipendaftaran", [AdminVPendaftaranController::class, "index"]);
    Route::get("/pendaftarandetail", [AdminVPendaftaranController::class, "show"]);

    Route::get("/verifikasipembayaran", [AdminVPembayaranController::class, "index"]);
    Route::get("/pembayarandetail", [AdminVPembayaranController::class, "show"]);
});




// rekayasa UI/UX
Route::get("/transaksi",  function(){
    return view("depan.transaksi", ["title" => "profile"]);
});


// Route::prefix("/admin")->group(function () {
//     Route::get("/", [PendaftaranController::class, "index"]);
//     Route::get("/pendaftaran", [PendaftaranController::class, "index"]);
//     Route::get("/pendaftaran/create", [PendaftaranController::class, "create"]);
//     Route::post("/pendaftaran/store", [PendaftaranController::class, "store"]);
//     Route::get("/detailpendaftaran/show", [PendaftaranController::class, "show"]);
// });