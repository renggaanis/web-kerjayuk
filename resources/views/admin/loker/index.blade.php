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
<a class="btn btn-success" href="/loker/create">Tambah Post Baru</a>
</br>
</br>
<a href="/loker/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
<a href="/company/export_excel" class="btn btn-primary my-3" target="_blank">CETAK EXCEL</a>

	<br/>
	<br/>
	<p>Cari Data Post :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/loker/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Post .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
	

	
	<br/>
	<br/>
 
	<div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Judul Post</th>
			<th>Konten</th>
			<th>Kategori</th>
			<th>Penempatan</th>
			<th>Pendidikan</th>
			<th>Kompetensi</th>
			<th>Gaji</th>
			<th>Pengalaman</th>
			<th>Sistem</th>
			<th>Creator</th>
			<th>Thumbnail</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($loker as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->judul }}</td>
			<td>{{ $p->content }}</td>
			<td>{{ $p->category->nama }}</td>
			<td>{{ $p->kab->kabupaten }}</td>
			<td>{{ $p->pendidikan->name }}</td>
			<td>{{ $p->komp->name }}</td>
			<td>{{ $p->gaji->gaji }}</td>
			<td>{{ $p->exp->pengalaman }}</td>
			<td>{{ $p->sistem->name }}</td>
			<td>{{ $p->user->name }}</td>
			<td><img src="{{ asset( $p->gambar ) }}" class="img-fluid" style="width: 100px"></td>
			<td>
			
				<a class="btn btn-info" href="/loker/edit/{{ $p->id_loker }}">Edit</a>
				|
				<a class="btn btn-danger" href="/loker/destroy/{{ $p->id_loker }}">Hapus</a>
				
			</td>
		</tr>
		@endforeach
	</table>
	</div>
</div>
	<br/>
	<br/>
			Halaman : {{ $loker->currentPage() }} <br/>
			Jumlah Data : {{ $loker->total() }} <br/>
			Data Per Halaman : {{ $loker->perPage() }} <br/>
		
		
			{{ $loker->links() }}
 
@endsection






