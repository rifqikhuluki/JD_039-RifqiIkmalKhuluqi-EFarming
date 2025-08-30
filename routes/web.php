<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\dataDombaController;
use App\Http\Controllers\tambahDombaController;
use App\Http\Controllers\monitoringBobotController;
use App\Http\Controllers\dashboardDataDombaController;
use App\Http\Controllers\dashboardMonitoringDombaController;
use App\Http\Controllers\detailDombaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\riwayatTimbangController;
use App\Http\Controllers\updateStatusDomba;
use App\Http\Middleware\loggedin;
use App\Http\Middleware\loginCheck;
use Illuminate\Support\Facades\Route;

//login
Route::middleware(loginCheck::class)->group(function(){
    //login 
    Route::get('/', [loginController::class, 'login'])->name('login');
    //proses validasi login
    Route::post('/login/process', [loginController::class, 'process'])->name('loginProcess');
});

Route::middleware(loggedin::class)->group(function(){
    //menampilkan home
    Route::get('/home', [homeController::class, 'index'])->name('home');
});

//menapilkan dashboard data domba
Route::get('/data-domba/dashboard', [dashboardDataDombaController::class, 'index'])->name('dashboardDataDomba');

//menapilkan data domba list
Route::get('/data-domba/datalist', [dataDombaController::class, 'index'])->name('dataDombaList');

//menapilkan scanner untuk rfid menuju detail
Route::get('/data-domba/datalist/scan', [detailDombaController::class, 'scan'])->name('scanDombaDetail');

//menampilkan detail domba berdasrkan rfid
Route::get('/data-domba/detail/{rfid_tag}', [detailDombaController::class, 'show'])->name('detailDomba');

//mendownload sertifikat format pdf
Route::get('/data-domba/{id}/sertifikat', [detailDombaController::class, 'downloadSertifikat'])->name('downloadSertifikat');

//form tambah domba
Route::get('/data-domba/tambah-domba', [tambahDombaController::class, 'index'])->name('tambahDomba');

//insert data domba
Route::post('/data-domba/tambah-domba/insert', [tambahDombaController::class, 'insert'])->name('tambahDombaInsert');

//menampilkan search rfid domba menuju form update status domba
Route::get('/data-domba/update-status', [updateStatusDomba::class, 'index'])->name('updateStatus');

//scan rfid domba
Route::get('/data-domba/update-status/scan', [updateStatusDomba::class, 'scan'])->name('scanDombaUpdate');

//update status domba
Route::post('/data-domba/update-status/update', [updateStatusDomba::class, 'update'])->name('updateStatusDomba');

//search rfid domba menuju list riwayat timbang domba
Route::get('/monitoring-bobot/riwayat-timbang', [RiwayatTimbangController::class, 'index'])->name('riwayatTimbang');

//menampilkan dashboard monitoring bobot
Route::get('/monitoring-bobot', [dashboardMonitoringDombaController::class, 'index'])->name('dashboardMonitoringBobot');

//menampilkan search rfid domba menuju form catat domba
Route::get('/monitoring-bobot/catat-bobot', [monitoringBobotController::class, 'index'])->name('catatBobot');

//scan rfid domba
Route::get('/monitoring-bobot/catat-bobot/scan', [monitoringBobotController::class, 'scan'])->name('scanBobot');

//insert bobot domba
Route::post('/monitoring-bobot/catat-bobot/insert', [monitoringBobotController::class, 'catat'])->name('catatBobotInsert');

//search rfid domba menuju list riwayat timbang domba
Route::get('/monitoring-bobot/riwayat-timbang', [RiwayatTimbangController::class, 'index'])->name('riwayatTimbang');

//scan rfid domba
Route::get('/monitoring-bobot/scan-riwayat-domba', [RiwayatTimbangController::class, 'scan'])->name('scanRiwayat');

//menampilkan list riwayat domba berdasarkan rfid
Route::get('/monitoring-bobot/{rfid_tag}/riwayat-timbang', [RiwayatTimbangController::class, 'show'])->name('riwayatTimbangList');

//logout
Route::get('/admin/logout', [logoutController::class, 'process'])->name('logout');