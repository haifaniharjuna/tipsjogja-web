@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Data Barang</h3>
						</div>
							<div class="panel-body">
								<form action="/petugas/{{$petugas->id}}/update" method="POST">
						        	<!-- token input -->
						        	{{csrf_field()}}
								  <div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Kode Petugas</label>
								    <input name="kode_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Petugas" value="{{$petugas->kode_petugas}}">
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
								    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas" value="{{$petugas->nama}}">
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Password</label>
								    <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Password" value="{{$petugas->password}}">
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Telepon</label>
								    <input name="telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Telepon" value="{{$petugas->telepon}}">
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Email</label>
								    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email" value="{{$petugas->email}}">
								  </div>
							  
					    	</div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-warning">Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@stop