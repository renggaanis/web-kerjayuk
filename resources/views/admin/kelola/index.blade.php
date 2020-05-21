@extends('comp')
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

<h3>Data Pelamar</h3>
</br>


 <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped table-md">
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
			<th>Kompetensi</th>
			<th>Pengalaman</th>
			<th>Bidang Kerja</th>
            <th>Lowongan Kerja/Perusahan Tujuan</th>
			<th>Posisi</th>
			<th>Kabupaten/Kota</th>
			<th>Foto</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($lamaran as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->name }}</td> 
			<td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->pend->name}}</td>
			<td>{{ $p->komp->name}}</td>
			<td>{{ $p->exp->pengalaman}}</td>
			<td>{{ $p->bidang->nama }}</td>
            <td>{{ $p->loker->judul }}</td>
			<td>{{ $p->posisi }}</td>
			<td>{{ $p->kab->kabupaten }}</td>
			<td><img src="{{ asset( $p->foto ) }}" class="img-fluid" style="width: 100px"></td>
			<td>
				<a class="btn btn-info btn-sm" href="/kelola/lamaran/{{ $p->id_lamaran }}">Tampilkan</a>
				|
				<a class="btn btn-success btn-sm" href="/kelola/balas/{{ $p->id_lamaran }}">Beri Balasan</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>
</div>
	<br/>
	<br/>
			Halaman : {{ $lamaran->currentPage() }} <br/>
			Jumlah Data : {{ $lamaran->total() }} <br/>
			Data Per Halaman : {{ $lamaran->perPage() }} <br/>
		
		
			{{ $lamaran->links() }}
 
@endsection
