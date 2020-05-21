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
<a class="btn btn-success" href="/komp/create">Tambah Kompetensi Baru</a>

	<br/>
	<br/>
	<p>Cari Data Kompetensi :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/komp/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Kompetensi .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>


 <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama Kompetensi</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($komp as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->name }}</td>
			<td>
				<a class="btn btn-info" href="/komp/edit/{{ $p->id_komp }}">Edit</a>
				|
				<a class="btn btn-danger" href="/komp/destroy/{{ $p->id_komp }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>
</div>
	<br/>
	<br/>
			Halaman : {{ $komp->currentPage() }} <br/>
			Jumlah Data : {{ $komp->total() }} <br/>
			Data Per Halaman : {{ $komp->perPage() }} <br/>
		
		
			{{ $komp->links() }}
 
@endsection
