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
<a class="btn btn-success" href="/post/create">Tambah Post Baru</a>

	<br/>
	<br/>
	<p>Cari Data Post :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/post/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Post .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>
 
	<div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
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
		@foreach($post as $p)
		<tr>
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
				<a class="btn btn-info" href="/post/edit/{{ $p->id_post }}">Edit</a>
				|
				<a class="btn btn-danger" href="/post/destroy/{{ $p->id_post }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
</div>
	<br/>
	<br/>
			Halaman : {{ $post->currentPage() }} <br/>
			Jumlah Data : {{ $post->total() }} <br/>
			Data Per Halaman : {{ $post->perPage() }} <br/>
		
		
			{{ $post->links() }}
 
@endsection






