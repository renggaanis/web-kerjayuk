@extends('base')
@section('content')
<h4>Edit Kategori</h4>

    @foreach($categories as $p)
    <form action="/categories/update" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="id_category" value="{{ $p->id_category }}">
        <label>Kategori</label>
        <input type="text" class="form-control" name="name" value="{{ $p->name }}" >
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan Kategori</button>
    </div>
    </form>
    @endforeach
@endsection