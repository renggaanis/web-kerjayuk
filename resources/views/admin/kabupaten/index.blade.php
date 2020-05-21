@extends('base')
@section('content')
<!-- Main Section > -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
<a class="btn btn-success" href="/kabupaten/create">Tambah Kabupaten/Kota</a>

	<br/>
	<br/>
	<p>Cari Data Kabupaten/Kota :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/kabupaten/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Kabupaten/Kota .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>
 
	<div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama Kabupaten/Kota</th>
			<th>Nama Provinsi</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($kabupaten as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->kabupaten }}</td>
			<td>{{ $p->Provinsi->provinsi }}</td>
			<td>
				<a class="btn btn-info" href="/kabupaten/edit/{{ $p->id_kabupaten }}">Edit</a>
				|
				<a class="btn btn-danger" href="/kabupaten/destroy/{{ $p->id_kabupaten }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
</div>
	<br/>
	<br/>
			Halaman : {{ $kabupaten->currentPage() }} <br/>
			Jumlah Data : {{ $kabupaten->total() }} <br/>
			Data Per Halaman : {{ $kabupaten->perPage() }} <br/>
		
		
			{{ $kabupaten->links() }}
 
@endsection






