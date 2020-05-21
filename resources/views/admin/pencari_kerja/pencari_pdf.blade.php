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
			font-size: 6pt;
            
		}
	</style>
	<center>
		<h5>Laporan Data Pencari Kerja</h4>
		
	</center>
 
	<table class='table table-bordered'>
		<thead>
        <tr>
			<th>No</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
			<th>Kompetensi</th>
			<th>Pengalaman</th>
			<th>Bidang Kerja</th>
			<th>Kabupaten/Kota</th>
		</tr>
		@php $i=1 @endphp
		@foreach($pencari_kerja as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->fname }}</td>
			<td>{{ $p->lname }}</td>
			<td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->pend->name}}</td>
			<td>{{ $p->komp->name}}</td>
			<td>{{ $p->exp->pengalaman}}</td>
			<td>{{ $p->bidang->nama }}</td>
			<td>{{ $p->kab->kabupaten }}</td>
           
			
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
