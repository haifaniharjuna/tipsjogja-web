@extends('layouts.master')

@section('content')
			<h1>EDIT DATA BARANG</h1>
			<!-- @if(session('sukses'))
			<div class="alert">
				{{session('sukses')}}
			</div>
			@endif -->
			<div class="row">
				<div class="col-12">
					<form action="/barang/{{$barang->id}}/update" method="POST">
				        	<!-- token input -->
				        	{{csrf_field()}}
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
						    <input name="kode_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang" value="{{$barang->kode_barang}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
						    <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang" value="{{$barang->nama_barang}}">
						  </div>
						  <div class="mb-3">
						  	<label form="formSatuanSelect">Pilih Satuan</label>
						  	<select name="satuan" class="form-select" id="formSatuanSelect">
							  <option value="dozen" @if($barang->satuan == 'dozen') selected @endif>dozen</option>
							  <option value="pack" @if($barang->satuan == 'pack') selected @endif>pack</option>
							  <option value="pcs" @if($barang->satuan == 'pcs') selected @endif>pieces</option>
							  <option value="unit" @if($barang->satuan == 'unit') selected @endif>unit</option>
							  <option value="gross" @if($barang->satuan == 'gross') selected @endif>gross</option>
							</select>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Harga Distributor</label>
						    <input name="harga_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Harga Distributor" value="{{$barang->harga_distributor}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Harga Retail</label>
						    <input name="harga_retail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Harga Retail" value="{{$barang->harga_retail}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Stok</label>
						    <input name="stok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Stok" value="{{$barang->stok}}">
						  </div>
						  <button type="submit" class="btn btn-warning">Update</button>
						</form>
				</div>
			</div>
@endsection