@extends('base')
@section('content')
<h4>Tambah Post</h4>

<form action="/post/store" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Judul Post</label>
    <input type="text" class="form-control" name="judul">
</div>
<div class="form-group">
    <label>Konten</label>
    <textarea type="text" class="form-control" name="content" id="content"></textarea>
</div>
<div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="id_category">
    <option value="" holder>Pilih Kategori</option>
    @foreach($Category as $result)
    <option value="{{ $result->id_category }}" >{{ $result->nama }}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Penempatan</label>
    <select class="form-control" name="id_kabupaten">
    <option value="" holder>Pilih Penempatan</option>
    @foreach($kabupaten as $result)
    <option value="{{ $result->id_kabupaten }}" >{{ $result->kabupaten }}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Pendidikan</label>
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
    <label>Gaji</label>
    <select class="form-control" name="id_gaji">
    <option value="" holder>Pilih Gaji</option>
    @foreach($gaji as $result)
    <option value="{{ $result->id_gaji }}" >{{ $result->gaji }}</option>
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
    <label>Sistem</label>
    <select class="form-control" name="id_sistem">
    <option value="" holder>Pilih Sistem</option>
    @foreach($sistem as $result)
    <option value="{{ $result->id_sistem }}" >{{ $result->name }}</option>
    @endforeach
    </select>
  </div>

<div class="form-group">
    <label>Thumbnail</label>
    <input type="file" class="form-control" name="gambar">

</div>
<div class="form-group">
    <button class="btn btn-primary">Simpan Post</button>
</div>
</form>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection











