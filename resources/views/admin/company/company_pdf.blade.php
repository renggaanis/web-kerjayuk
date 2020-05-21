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
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Perusahaan</h4>
		
	</center>
 
	<table class='table table-bordered'>
		<thead>
        <tr>
			<th>No</th>
			<th>Nama Perusahaan</th>
			<th>ID Pemberi Kerja</th>
			<th>Fax</th>
			<th>Bidang Kerja</th>
			<th>Kabupaten/Kota</th>
			

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
