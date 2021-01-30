<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
    	$data_petugas = \App\Models\Petugas::all();
    	return view('petugas.index',['data_petugas' => $data_petugas]);
    }
    public function create(Request $request)
    {
    	\App\Models\Petugas::create($request->all());
    	return redirect('/petugas');
    	// return $request->all();
    }
    public function edit($id)
    {
    	$petugas = \App\Models\Petugas::find($id);
    	return view('petugas/edit',['petugas' => $petugas]);
    }
    public function update(Request $request, $id)
    {
    	$petugas = \App\Models\Petugas::find($id);
    	$petugas->update($request->all());
    	return redirect('/petugas')->with('sukses','data berhasil diupdate');
    }
    public function delete(Request $request, $id)
    {
        $petugas = \App\Models\Petugas::find($id);
        $petugas->delete();
        return redirect('/petugas');
    }
}
