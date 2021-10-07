<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/daftar-barang', [BarangController::class, 'index_barang']);
Route::post('/daftar-barang', [BarangController::class, 'simpan_barang']);
Route::get('/detail-barang/{id}', [BarangController::class, 'detail_barang']);
Route::put('/update-barang/{id}', [BarangController::class, 'update_barang']);
Route::delete('/hapus-barang/{id}', [BarangController::class, 'delete_barang']);
