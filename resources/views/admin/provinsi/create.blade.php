@extends('base')
@section('content')
<h4>Tambah Provinsi</h4>

<form action="/provinsi/store" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Nama Provinsi</label>
    <input type="text" class="form-control" name="provinsi">
</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Provinsi</button>
</div>
</form>

@endsection











