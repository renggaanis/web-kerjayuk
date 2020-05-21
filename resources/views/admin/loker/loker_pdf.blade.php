<!DOCTYPE html>
<html>
<head>
	<title>KerjaYuk!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 5pt;
		}
	</style>
	<center>
		<h5>Laporan Data Lowongan Kerja</h4>
		
	</center>
 
	<table class='table table-bordered'>
		<thead>
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
			
			
		</tr>
		@endforeach
		</tbody>
	</table>
 
</body>
</html>










public function cetak_pdf()
{
	$pegawai = Pegawai::all();

	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
	return $pdf->stream();
}
