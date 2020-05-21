@extends('base')
@section('content')
<h4>Tambah Kabupaten</h4>

<form action="/kabupaten/store" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Nama Kabupaten</label>
    <input type="text" class="form-control" name="kabupaten">
</div>
<div class="form-group">
    <label>Nama Provinsi</label>
    <select class="form-control" name="id_provinsi">
    <option value="" holder>Pilih Provinsi</option>
    @foreach($provinsi as $result)
    <option value="{{ $result->id_provinsi }}" >{{ $result->provinsi }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Provinsi</button>
</div>
</form>

@endsection











b