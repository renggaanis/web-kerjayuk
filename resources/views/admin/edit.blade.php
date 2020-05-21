@extends('base')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<h3>Edit Data User</h3>
	<br/>   
	<br/>
	@foreach($users as $p)
	<form action="/users/update" method="post" enctype="multipart/form-data" >
	<table align="center">
	<div class="form-group">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		<tr>
			<td><label>Nama Lengkap</label></td>
			<td>:</td>
			<td><input type="text" name="name" required="required" value="{{ $p->name }}"></td>
		</tr>
		<tr>
			<td><label>Role</label></td>
			<td>:</td>
			<td> <select calss="form control" name="admin" value="{{ $p->admin }}">
                                    <option>Pilih Hak Akses</option>
                                    <option value="1">Company</option>
                                    <option value="2">Admin</option>
                                    <option value="0">User</option>
                                </select></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input type="email" name="email" required="required" value="{{ $p->email }}"></td>
		</tr>
		<tr>
			<td><label>Telepon</label></td>
			<td>:</td>
			<td><input type="text" name="telepon" required="required" value="{{ $p->telepon }}"></td>
		</tr>
		

		<tr>
		<td><label></label></td>
		<td>&nbsp</td>
		<td><input type="submit" value="Simpan Data"></td>
		</tr>
	</div>
	</table>
	</form>
	@endforeach
@endsection