@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- TABLE HOVER -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Petugas</h3>
							<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#tambahModal"><i class="lnr lnr-plus-circle"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>KODE PETUGAS</th>
										<th>NAMA PETUGAS</th>
										<th>PASSWORD</th>
										<th>TELEPON</th>
										<th>EMAIL</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_petugas as $petugas)
									<tr>
										<td>{{$petugas->kode_petugas}}</td>
										<td>{{$petugas->nama}}</td>
										<td>{{$petugas->password}}</td>
										<td>{{$petugas->telepon}}</td>
										<td>{{$petugas->email}}</td>
										<td><a href="/petugas/{{$petugas->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
											<a href="/petugas/{{$petugas->id}}/delete" class="btn btn-danger btn-sm">DELETE</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<!-- END TABLE HOVER -->
				</div>
			</div>	
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Data Petugas</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
	      <div class="modal-body">
	      	<!-- form input -->
	        <form action="/petugas/create" method="POST">
	        	<!-- token input -->
	        	{{csrf_field()}}
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Kode Petugas</label>
			    <input name="kode_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Petugas">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Password</label>
			    <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Password">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Telepon</label>
			    <input name="telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Telepon">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email</label>
			    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email">
			  </div>
			  
	      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
			</form>
      </div>
    </div>
  </div>
@stop