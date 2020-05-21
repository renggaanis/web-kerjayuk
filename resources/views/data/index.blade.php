@extends('comp')
@section('content')
<!-- Main Section -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
<a class="btn btn-success" href="/data/create">Lengkapi Data Perusahaan Anda</a>

	<br/>
	<br/>



   <div class="card-body p-0">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session('success') }}
                            </div>
                        @endif
                        
                        @foreach($company as $p)
                        <form action="" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <!-- @method('PATCH') -->
                        <div class="form-group">
                        <input type="hidden" name="id_company" value="{{ $p->id_company }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" name="fname" value="{{ $p->name }}">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" class="form-control" name="lname" value="{{ $p->fax }}">
                        </div>
                        <div>
                            <label>Bidang kerja</label>
                            </br>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $p->category->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $p->kab->kabupaten }}">
                        </div>
						<div class="form-group">
                            <a class="btn btn-info" href="/data/edit/{{ $p->id_company }}">Edit Data</a>
                        </div>
						</form>
						@endforeach
					</div>
	<br/>
	<br/>
			
		
		
			{{ $company->links() }}
 
@endsection
