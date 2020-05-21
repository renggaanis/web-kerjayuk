@extends('base')
@section('content')
<h4>Tambah Kompetensi</h4>

<form action="/komp/store" method="post">
@csrf
<div class="form-group">
    <label>Kompetensi</label>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Kompetensi</button>
</div>
</form>
@endsection











