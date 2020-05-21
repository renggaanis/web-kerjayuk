@extends('comp')
@section('content')
<h4>Edit Perusahaan</h4>

    @foreach($company as $p)
    <form action="/data/update" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <!-- @method('PATCH') -->
    <div class="form-group">
    <input type="hidden" name="id_company" value="{{ $p->id_company }}">
    </div>
    <div class="form-group">
        <label>Nama Perusahaan</label>
        <input type="text" class="form-control" name="name" value="{{ $p->name }}">
    </div>
    <div>
        <label>ID Perusahaan</label>
        <select class="form-control" name="id">
        <option value="" holder>Pilih ID Perusahaan</option>
        @foreach($user as $result)
        <option value="{{ $result->id }}" 
        @if ($p->id == $result->id)
            selected
        @endif
            >{{ $result->id }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Fax</label>
        <input type="text" class="form-control" name="fax" value="{{ $p->fax }}">
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
        <option value="" holder>Pilih Kabupaten/Kota</option>
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
        <button class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
    @endforeach

@endsection