@extends('base')
@section('content')
<h4>Tambah Pencari Kerja</h4>

<form action="/pencari/store" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Nama Depan</label>
    <input type="text" class="form-control" name="fname">
</div>
<div class="form-group">
    <label>Nama Belakang</label>
    <input type="text" class="form-control" name="lname">
</div>
<div class="form-group">
    <label>ID Pencari Kerja</label>
    <select class="form-control" name="id">
    <option value="" holder>Pilih ID Pencari Kerja</option>
    @foreach($user as $result)
    <option value="{{ $result->id }}" >{{ $result->id }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label>Jenis Kelamin</label>
    </br>
    <input type="radio"  name="jenis_kelamin" value="Laki - Laki" >Laki - laki
			<input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
</div>
<div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir">
</div>
<div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir">
</div>
<div class="form-group">
    <label>Agama</label>
    <input type="text" class="form-control" name="agama">
</div>
<div class="form-group">
    <label>Pendidikan Terakhir</label>
    <select class="form-control" name="id_pendidikan">
    <option value="" holder>Pilih Pendidikan</option>
    @foreach($pendidikan as $result)
    <option value="{{ $result->id_pendidikan }}" >{{ $result->name }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label>Kompetensi</label>
    <select class="form-control" name="id_komp">
    <option value="" holder>Pilih Kompetensi</option>
    @foreach($komp as $result)
    <option value="{{ $result->id_komp }}" >{{ $result->name }}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label>Pengalaman</label>
    <select class="form-control" name="id_exp">
    <option value="" holder>Pilih Pengalaman</option>
    @foreach($exp as $result)
    <option value="{{ $result->id_exp }}" >{{ $result->pengalaman }}</option>
    @endforeach
    </select>
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
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">

</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Data</button>
</div>
</form>



@endsection











