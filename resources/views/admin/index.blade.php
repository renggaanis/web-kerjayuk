@extends('base')
@section('content')
<!-- Main Section -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
<a class="btn btn-success" href="/users/tambah">Tambah User Baru</a>

	<br/>
	<br/>
	<p>Cari Data User :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/users/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari User .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>
 
	<div class="card-body p-0">
    <div class="table-responsive">
    	<table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Role</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($users as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->name }}</td>
			<td>{{ $p->email }}</td>
			<td>{{ $p->telepon }}</td>
			<td>{{ $p->admin }}</td>
			<td>
				<a class="btn btn-info" href="/users/edit/{{ $p->id }}">Edit</a>
				|
				<a class="btn btn-danger" href="/users/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
</div>
	<br/>
	<br/>
			Halaman : {{ $users->currentPage() }} <br/>
			Jumlah Data : {{ $users->total() }} <br/>
			Data Per Halaman : {{ $users->perPage() }} <br/>
		
		
			{{ $users->links() }}
 
@endsection






