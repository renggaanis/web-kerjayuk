@extends('base')
@section('content')
<h4>Edit Kompetensi</h4>

    @foreach($komp as $p)
    <form action="/komp/update" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="id_komp" value="{{ $p->id_komp }}">
        <label>Kompetensi</label>
        <input type="text" class="form-control" name="name" value="{{ $p->name }}" >
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan Kompetensi</button>
    </div>
    </form>
    @endforeach
@endsection