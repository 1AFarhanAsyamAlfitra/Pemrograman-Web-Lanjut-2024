<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MBarangController extends Controller
{
    public function index()
    {
        return ProductModel::all();
    }


    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'kategori_id' => 'required',
        'barang_kode' => 'required',
        'barang_nama' => 'required',
        'harga_beli' => 'required|numeric',
        'harga_jual' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        
    ]);

    if($validator->fails()){
        return response()->json($validator->errors(), 422);
    }

    $image = $request->file('image');
    $imageName = $image->hashName();
    $image->storeAs('public/posts', $imageName);

    $m_barang = ProductModel::create([
        'kategori_id' => $request->kategori_id,
        'barang_kode' => $request->barang_kode,
        'barang_nama' => $request->barang_nama,
        'harga_beli' => $request->harga_beli,
        'harga_jual' => $request->harga_jual,
        'image' => $imageName,
    ]);

    if($m_barang) return response()->json([
        'success' => true,
        'm_barang' => $m_barang
    ], 201);

    return response()->json([
        'success' => false
    ], 409);
}
}