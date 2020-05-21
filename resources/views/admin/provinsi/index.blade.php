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
<a class="btn btn-success" href="/provinsi/create">Tambah Provinsi</a>

	<br/>
	<br/>
	<p>Cari Data Provinsi :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/provinsi/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Provinsi .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>


 <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama Provinsi</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($provinsi as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->provinsi }}</td>
			<td>
				<a class="btn btn-info" href="/provinsi/edit/{{ $p->id_provinsi }}">Edit</a>
				|
				<a class="btn btn-danger" href="/provinsi/destroy/{{ $p->id_provinsi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>
</div>
	<br/>
	<br/>
			Halaman : {{ $provinsi->currentPage() }} <br/>
			Jumlah Data : {{ $provinsi->total() }} <br/>
			Data Per Halaman : {{ $provinsi->perPage() }} <br/>
		
		
			{{ $provinsi->links() }}
 
@endsection
