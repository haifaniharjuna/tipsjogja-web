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
}
