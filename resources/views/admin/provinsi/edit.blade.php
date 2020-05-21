@extends('base')
@section('content')
<h4>Edit Provinsi</h4>

    @foreach($provinsi as $p)
    <form action="/provinsi/update" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <!-- @method('PATCH') -->
    <div class="form-group">
    <input type="hidden" name="id_provinsi" value="{{ $p->id_provinsi }}">
        <label>Nama Provinsi</label>
        <input type="text" class="form-control" name="provinsi" value="{{ $p->provinsi }}" >
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
    @endforeach

@endsection