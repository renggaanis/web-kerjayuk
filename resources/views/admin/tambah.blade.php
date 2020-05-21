@extends('base')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<h2>Tambah Data User</h2>
	<br/>
	<br/>
 
	<form action="/users/store" method="post" enctype="multipart/form-data">
	<table align="center">
		{{ csrf_field() }}
		<tr>
			<td><label>Nama Lengkap</label></td>
			<td>:</td>
			<td><input type="text" name="name" required="required"></td>
		</tr>
		<tr>
			<td><label>Role</label></td>
			<td>:</td>
			<td> <select calss="form control" name="admin">
                                    <option>Pilih Hak Akses</option>
                                    <option value="1">Company</option>
                                    <option value="2">Admin</option>
                                    <option value="0">User</option>
                                </select></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input type="email" name="email" required="required"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input type="password"  name="password" required autocomplete="current-password"></td>
		</tr>
		<tr>
			<td><label>Telepon</label></td>
			<td>:</td>
			<td><input type="text" name="telepon" required="required"></td>
		</tr>
		

		<tr>
		<td><label></label></td>
		<td>&nbsp</td>
		<td><input type="submit" value="Simpan Data"></td>
		</tr>
	</table>
	</form>
 
@endsection











