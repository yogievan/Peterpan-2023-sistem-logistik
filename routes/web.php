<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\LogistikController;
use App\Http\Controllers\RektorController;
use App\Http\Controllers\Wr3Controller;
use App\Http\Controllers\Biro2Controller;

//login
Route::controller(AuthController::class)->group(function(){
    Route::get('/','login')->name('login');
});

//Pemohon
Route::controller(PemohonController::class)->group(function(){
    Route::get('/Dashboard-pemohon', 'Dashboard_Pemohon');
    Route::get('/Surat-pengajuan-logistik', 'Surat_pengajuan_logistik');
    Route::post('/create-surat-pengajuan-logistik', 'create_surat_logistik');
    Route::get('/Update-surat-logistik-{id}', 'view_update_surat_logistik');
    Route::put('/proses-update-surat-pengajuan-logistik-{id}', 'update_surat_logistik');
    Route::get('/Delete-surat-logistik-{id}', 'delete_surat_logistik');
});

//Logistik
Route::controller(LogistikController::class)->group(function(){
    Route::get('/Dashboard-logistik', 'Dashboard_Logistik');
    Route::get('/Order-logistik','Order_Logistik');
    Route::get('/Inventaris-logistik', 'Inventaris_Logistik');
    Route::get('/Create-user', 'Create_User');
    Route::post('/Users-create', 'User_Create');
    Route::get('/Create-surat-transaksi-order-logistik-{id}', 'View_Create_Transaksi_Logistik');
    Route::post('/Proses-create-transaksi-surat-pengajuan-logistik', 'Create_Transaksi_Logistik');
    Route::get('/Create-inventaris-logistik-{id}', 'View_Create_inventory_logistik');
    Route::post('/Proses-create-inventori-logistik', 'Create_inventory_logistik');
    Route::get('/Update-inventaris-logistik-{id}', 'update_inventory_logistik');
    Route::put('/Proses-update-inventory-logistik-{id}', 'proses_update_inventory_logistik');
    Route::get('/Delete-inventory-logistik-{id}', 'delete_inventory_logistik');
    Route::get('/Detail-Transaksi-{id}', 'detail_transaksi_logistik');
    Route::put('/Status-barang-sampai-{id}', 'update_detail_transaksi_logistik');

});

//Rektor
Route::controller(RektorController::class)->group(function(){
    Route::get('/Dashboard-Rektor', 'Dashboard_Rektor');
    Route::get('/Aproval-surat-permohonan-logistik-Rektor', 'Approval_Rektor');
    Route::get('/Detail-surat-permohonan-logistik-Rektor-{id}', 'View_Approval_Rektor');
    Route::put('/Approved-Surat-permohonan-logistik-Rektor-{id}', 'UpdateApproved_Approval_Rektor');
    Route::put('/Reject-Surat-permohonan-logistik-Rektor-{id}', 'UpdateRejected_Approval_Rektor');

});

//WR3
Route::controller(Wr3Controller::class)->group(function(){
    Route::get('/Dashboard-Wr3','Dashboard_Wr3');
    Route::get('/Aproval-surat-permohonan-logistik-WR3', 'Approval_Wr3');
    Route::get('/Detail-surat-permohonan-logistik-WR3-{id}', 'View_Approval_WR3');
    Route::put('/Approved-Surat-permohonan-logistik-WR3-{id}', 'UpdateApproved_Approval_WR3');
    Route::put('/Reject-Surat-permohonan-logistik-WR3-{id}', 'UpdateRejected_Approval_WR3');
});

//BIRO2
Route::controller(Biro2Controller::class)->group(function(){
    Route::get('/Dashboard-Biro2', 'Dashboard_Biro2');
    Route::get('/Payment-Order-Biro2', 'Payment_Order');
    Route::get('/Down-payment-Order-Biro2-{id}', 'DP_Detail_payment_Order');
    Route::get('/Full-payment-Order-Biro2-{id}', 'FULL_Detail_payment_Order');
    Route::put('/proses-DP-pembayaran-{id}', 'Proses_DP_payment_Order');
    Route::put('/proses-Lunas-pembayaran-{id}', 'Proses_Lunas_payment_Order');
});


//Pemasok
Route::controller(PemasokController::class)->group(function(){
    Route::get('/Dashboard-Pemasok', 'Dashboard_Pemasok');
    Route::get('/Shipping-Documents', 'Shipping_Documents');
    Route::get('/Detail-Shippingdocument-{id}', 'View_Shipping_Documents');
    Route::put('/proses-shipping-document-{id}', 'Proses_Shipping_Documents');
    Route::get('/Detail-document-transaction-{id}', 'Detail_Transaction');
});
