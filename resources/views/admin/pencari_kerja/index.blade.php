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
<a class="btn btn-success" href="/pencari/create">Tambah Pencari Kerja</a>
</br>
</br>
<a href="/pencari/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
<a href="#" class="btn btn-primary my-3" target="_blank">CETAK EXCEL</a>

	<br/>
	<br/>
	<p>Cari Data Pencari Kerja :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/pencari/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>


 <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>ID User</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
			<th>Kompetensi</th>
			<th>Pengalaman</th>
			<th>Bidang Kerja</th>
			<th>Kabupaten/Kota</th>
			<th>Foto</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($pencari_kerja as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->fname }}</td>
			<td>{{ $p->lname }}</td>
			<td>{{ $p->users->id }}</td>
			<td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->pend->name}}</td>
			<td>{{ $p->komp->name}}</td>
			<td>{{ $p->exp->pengalaman}}</td>
			<td>{{ $p->bidang->nama }}</td>
			<td>{{ $p->kab->kabupaten }}</td>
			<td><img src="{{ asset( $p->foto ) }}" class="img-fluid" style="width: 100px"></td>
			<td>
				<a class="btn btn-info" href="/pencari/edit/{{ $p->id_pencari }}">Edit</a>
				|
				<a class="btn btn-danger" href="/pencari/destroy/{{ $p->id_pencari }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>
</div>
	<br/>
	<br/>
			Halaman : {{ $pencari_kerja->currentPage() }} <br/>
			Jumlah Data : {{ $pencari_kerja->total() }} <br/>
			Data Per Halaman : {{ $pencari_kerja->perPage() }} <br/>
		
		
			{{ $pencari_kerja->links() }}
 
@endsection
