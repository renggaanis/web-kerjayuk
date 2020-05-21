@extends('base')
@section('content')
<h4>Edit Kabupaten</h4>

    @foreach($kabupaten as $p)
    <form action="/kabupaten/update" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <!-- @method('PATCH') -->
    <div class="form-group">
    <input type="hidden" name="id_kabupaten" value="{{ $p->id_kabupaten }}">
        <label>Nama Kabupaten</label>
        <input type="text" class="form-control" name="kabupaten" value="{{ $p->kabupaten }}" >
    </div>
    <div class="form-group">
        <label>Nama Provinsi</label>
        <select class="form-control" name="id_provinsi">
        <option value="" holder>Pilih Provinsi</option>
        @foreach($provinsi as $result)
        <option value="{{ $result->id_provinsi }}" 
        @if ($p->id_provinsi == $result->id_provinsi)
            selected
        @endif
            >{{ $result->provinsi }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan Kabupaten/Kota</button>
    </div>
    </form>
    @endforeach

@endsection