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
<a class="btn btn-success" href="/company/create">Tambah Perusahaan</a>
</br>
</br>
<a href="/company/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
<a href="/company/export_excel" class="btn btn-primary my-3" target="_blank">CETAK EXCEL</a>

	<br/>
	<br/>
	<p>Cari Data Perusahaan :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/company/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Perusahaan .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

	
	<br/>
	<br/>


<div class="card-body p-0">
    <div class="table-responsive">
    <table  class="table table-striped table-md " >
		<tr>
			<th>No</th>
			<th>Nama Perusahaan</th>
			<th>ID Pemberi Kerja</th>
            <th>Fax</th>
			<th>Bidang Kerja</th>
			<th>Kabupaten/Kota</th>
			<th>Opsi</th>
		</tr>
		@php $i=1 @endphp
		@foreach($company as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->name }}</td>
            <td>{{ $p->users->id }}</td>
			<td>{{ $p->fax }}</td>
			<td>{{ $p->category->nama }}</td>
			<td>{{ $p->kab->kabupaten }}</td>
			<td>
				<a class="btn btn-info" href="/company/edit/{{ $p->id_company }}">Edit</a>
				|
				<a class="btn btn-danger" href="/company/destroy/{{ $p->id_company }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
	<br/>
	<br/>
			Halaman : {{ $company->currentPage() }} <br/>
			Jumlah Data : {{ $company->total() }} <br/>
			Data Per Halaman : {{ $company->perPage() }} <br/>
		
		
			{{ $company->links() }}
 
@endsection
