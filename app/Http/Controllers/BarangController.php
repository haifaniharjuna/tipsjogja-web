<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
    	$data_barang = \App\Models\Barang::all();
    	return view('barang.index',['data_barang' => $data_barang]);
    }
    public function create(Request $request)
    {
    	\App\Models\Barang::create($request->all());
    	return redirect('/barang')->with('sukses','data berhasil diinput');
    	// return $request->all();
    }
    public function edit($id)
    {
    	$barang = \App\Models\Barang::find($id);
    	return view('barang/edit',['barang' => $barang]);
    }
    public function update(Request $request, $id)
    {
    	$barang = \App\Models\Barang::find($id);
    	$barang->update($request->all());
    	return redirect('/barang')->with('sukses','data berhasil diupdate');
    }
    public function delete(Request $request, $id)
    {
        $barang = \App\Models\Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
