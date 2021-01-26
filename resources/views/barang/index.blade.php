<!DOCTYPE html>
</!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	</head>
	<body>

		<div class="container">
			<!-- @if(session('sukses'))
			<div class="alert">
				{{session('sukses')}}
			</div>
			@endif -->
			<div class="row">
				<div class="col-6">
					<h1>DATA BARANG</h1>
				</div>
				<div class="col-6">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#tambahModal">
					  Tambah Data Barang
					</button>
				</div>	

				<table class="table">
					<tr>
						<th>KODE BARANG</th>
						<th>NAMA BARANG</th>
						<th>SATUAN</th>
						<th>HARGA DISTRIBUTOR</th>
						<th>HARGA RETAIL</th>
						<th>STOK</th>
						<th>AKSI</th>
					</tr>

					@foreach($data_barang as $barang)
					<tr>
						<td>{{$barang->kode_barang}}</td>
						<td>{{$barang->nama_barang}}</td>
						<td>{{$barang->satuan}}</td>
						<td>{{$barang->harga_distributor}}</td>
						<td>{{$barang->harga_retail}}</td>
						<td>{{$barang->stok}}</td>
						<td><a href="/barang/{{$barang->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
							<a href="/barang/{{$barang->id}}/delete" class="btn btn-danger btn-sm">DELETE</a></td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="tambahModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
			      <div class="modal-body">
			      	<!-- form input -->
			        <form action="/barang/create" method="POST">
			        	<!-- token input -->
			        	{{csrf_field()}}
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
					    <input name="kode_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang">
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
					    <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
					  </div>
					  <div class="mb-3">
					  	<label form="formSatuanSelect">Pilih Satuan</label>
					  	<select name="satuan" class="form-select" id="formSatuanSelect">
						  <option value="dozen">dozen</option>
						  <option value="pack">pack</option>
						  <option value="pcs">pieces</option>
						  <option value="unit">unit</option>
						  <option value="gross">gross</option>
						</select>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Harga Distributor</label>
					    <input name="harga_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Harga Distributor">
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Harga Retail</label>
					    <input name="harga_retail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Harga Retail">
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Stok</label>
					    <input name="stok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Stok">
					  </div>
					  
			      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
					</form>
		      </div>
		    </div>
		  </div>
		</div>

		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>
<!-- {{ dd($data_barang)}} -->