@extends('base')
@section('content')
<h4>Edit Post</h4>

    @foreach($loker as $p)
    <form action="/loker/update" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <!-- @method('PATCH') -->
    <div class="form-group">
    <input type="hidden" name="id_loker" value="{{ $p->id_loker }}">
        <label>Judul Post</label>
        <input type="text" class="form-control" name="judul" value="{{ $p->judul }}" >
    </div>
    <div class="form-group">
    <label>Konten</label>
    <textarea class="form-control" name="content" id="content">{{ $p->content }}</textarea>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="id_category">
        <option value="" holder>Pilih Kategori</option>
        @foreach($Category as $result)
        <option value="{{ $result->id_category }}" 
        @if ($p->id_category == $result->id_category)
            selected
        @endif
            >{{ $result->nama }}</option>
        @endforeach
        </select>
    </div>
    <div>
        <label>Penempatan</label>
        <select class="form-control" name="id_kabupaten">
        <option value="" holder>Pilih Penempatan</option>
        @foreach($kabupaten as $result)
        <option value="{{ $result->id_kabupaten }}" 
        @if ($p->id_kabupaten == $result->id_kabupaten)
            selected
        @endif
            >{{ $result->kabupaten }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pendidikan</label>
        <select class="form-control" name="id_pendidikan">
        <option value="" holder>Pilih Pendidikan</option>
        @foreach($pendidikan as $result)
        <option value="{{ $result->id_pendidikan }}" 
        @if ($p->id_pendidikan == $result->id_pendidikan)
            selected
        @endif
            >{{ $result->name }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Kompetensi</label>
        <select class="form-control" name="id_komp">
        <option value="" holder>Pilih Kompetensi</option>
        @foreach($komp as $result)
        <option value="{{ $result->id_komp }}" 
        @if ($p->id_komp == $result->id_komp)
            selected
        @endif
            >{{ $result->name }}</option>
        @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label>Gaji</label>
        <select class="form-control" name="id_gaji">
        <option value="" holder>Pilih Gaji</option>
        @foreach($gaji as $result)
        <option value="{{ $result->id_gaji }}" 
        @if ($p->id_gaji == $result->id_gaji)
            selected
        @endif
            >{{ $result->gaji }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pengalaman</label>
        <select class="form-control" name="id_exp">
        <option value="" holder>Pilih Pengalaman</option>
        @foreach($exp as $result)
        <option value="{{ $result->id_exp }}" 
        @if ($p->id_exp == $result->id_exp)
            selected
        @endif
            >{{ $result->pengalaman }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Sistem</label>
        <select class="form-control" name="id_sistem">
        <option value="" holder>Pilih Sistem</option>
        @foreach($sistem as $result)
        <option value="{{ $result->id_sistem }}" 
        @if ($p->id_sistem == $result->id_sistem)
            selected
        @endif
            >{{ $result->name }}</option>
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
    @endforeach

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection