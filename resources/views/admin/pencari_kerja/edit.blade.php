@extends('base')
@section('content')
<h4>Edit Pencari Kerja</h4>

    @foreach($pencari_kerja as $p)
    <form action="/pencari/update" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <!-- @method('PATCH') -->
    <div class="form-group">
    <input type="hidden" name="id_pencari" value="{{ $p->id_pencari }}">
    </div>
    <div class="form-group">
        <label>Nama Depan</label>
        <input type="text" class="form-control" name="fname" value="{{ $p->fname }}">
    </div>
    <div class="form-group">
        <label>Nama Belakang</label>
        <input type="text" class="form-control" name="lname" value="{{ $p->lname }}">
    </div>
    <div>
        <label>ID Pencari Kerja</label>
        <select class="form-control" name="id">
        <option value="" holder>Pilih ID Pencari Kerja</option>
        @foreach($user as $result)
        <option value="{{ $result->id }}" 
        @if ($p->id == $result->id)
            selected
        @endif
            >{{ $result->id }}</option>
        @endforeach
        </select>
    </div>
    <div>
        <label>Jenis Kelamin</label>
        </br>
        <input type="radio"  name="jenis_kelamin" value="Laki - Laki" >Laki - laki
			<input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" value="{{ $p->tempat_lahir }}">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $p->tanggal_lahir }}">
    </div>
    <div class="form-group">
        <label>Agama</label>
        <input type="text" class="form-control" name="agama" value="{{ $p->agama }}">
    </div>
    <div>
        <label>Pendidikan Terakhir</label>
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
    <div>
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
    <div>
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
    <div>
        <label>Bidang Kerja</label>
        <select class="form-control" name="id_category">
        <option value="" holder>Pilih Bidang Kerja</option>
        @foreach($category as $result)
        <option value="{{ $result->id_category }}" 
        @if ($p->id_category == $result->id_category)
            selected
        @endif
            >{{ $result->nama }}</option>
        @endforeach
        </select>
    </div>
    <div>
        <label>Kabupaten/Kota</label>
        <select class="form-control" name="id_kabupaten">
        <option value="" holder>Kabupaten/Kota</option>
        @foreach($kabupaten as $result)
        <option value="{{ $result->id_kabupaten }}" 
        @if ($p->id_kabupaten == $result->id_kabupaten)
            selected
        @endif
            >{{ $result->kabupaten }}</option>
        @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
    @endforeach

@endsection