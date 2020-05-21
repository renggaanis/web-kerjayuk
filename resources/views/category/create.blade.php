@extends('base')
@section('content')
<h4>Tambah Kategori</h4>

<form action="/categories/store" method="post">
@csrf
<div class="form-group">
    <label>Kategori</label>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Kategori</button>
</div>
</form>
@endsection











