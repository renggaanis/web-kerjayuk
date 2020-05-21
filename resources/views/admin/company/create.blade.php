@extends('base')
@section('content')
<h4>Tambah Company</h4>

<form action="/company/store" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Nama Perusahaan</label>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <label>ID Perusahaan</label>
    <select class="form-control" name="id">
    <option value="" holder>Pilih ID Perusahaan</option>
    @foreach($user as $result)
    <option value="{{ $result->id }}" >{{ $result->id }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label>Fax</label>
    <input type="text" class="form-control" name="fax">
</div>
<div class="form-group">
    <label>Bidang Kerja</label>
    <select class="form-control" name="id_category">
    <option value="" holder>Pilih Bidang Kerja</option>
    @foreach($category as $result)
    <option value="{{ $result->id_category }}" >{{ $result->nama }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label>Kabupaten/Kota</label>
    <select class="form-control" name="id_kabupaten">
    <option value="" holder>Pilih Kabupaten/Kota</option>
    @foreach($kabupaten as $result)
    <option value="{{ $result->id_kabupaten }}" >{{ $result->kabupaten }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Data</button>
</div>
</form>



@endsection











