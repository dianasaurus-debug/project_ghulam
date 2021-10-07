<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index_barang()
    {
        $daftar_barang = Barang::get();
        $data = [
            'status' => 'ok',
            'message' => 'Berhasil ambil data barang',
            'data' => $daftar_barang
        ];
        return $data;
    }
    public function detail_barang($id){
        $barang = Barang::find($id);
        return $barang;
    }
    public function simpan_barang(Request $request){
        $daftar_barang = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'id_supplier' => $request->id_supplier,
        ]);
        return $daftar_barang;
    }
    public function update_barang(Request $request, $id){
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->id_supplier = $request->id_supplier;
        $barang->save();
        return $barang;

    }
    public function delete_barang($id){
        $barang = Barang::destroy($id);
        return $barang;
    }
}
