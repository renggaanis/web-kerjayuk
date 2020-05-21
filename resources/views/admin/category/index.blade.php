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
<a class="btn btn-success" href="/categories/create">Tambah Kategori Baru</a>

	<br/>
	<br/>
	<p>Cari Data Kategori :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/categories/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Ketegori .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>


 <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($categories as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->nama }}</td>
			<td>
				<a class="btn btn-info" href="/categories/edit/{{ $p->id_category }}">Edit</a>
				|
				<a class="btn btn-danger" href="/categories/destroy/{{ $p->id_category }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>
</div>
	<br/>
	<br/>
			Halaman : {{ $categories->currentPage() }} <br/>
			Jumlah Data : {{ $categories->total() }} <br/>
			Data Per Halaman : {{ $categories->perPage() }} <br/>
		
		
			{{ $categories->links() }}
 
@endsection
