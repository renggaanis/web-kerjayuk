@extends('template_blog.konten')
@section('isi')
	<!-- /HEADER -->

	<!-- SECTION -->
	
			<!-- row -->
			
		
			<!-- /row -->

	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Biodata Anda</h2>
							</div>
						</div>
                        <div class="card-body p-0">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session('success') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <a class="btn btn-primary" href="/cv/create">Lengkapi Biodata Anda</a>
                        </div>
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
                            <label>Jenis Kelamin</label>
                            </br>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}">
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
                            <input type="text" class="form-control" name="id_pendidikan" value="{{ $p->pend->name}}">
                        </div>
                        <div>
                            <label>Kompetensi</label>
                            <input type="text" class="form-control" name="id_komp" value="{{ $p->komp->name}}">
                        </div>
                        <div>
                            <label>Pengalaman</label>
                            <input type="text" class="form-control" name="id_pengalaman" value="{{ $p->exp->pengalaman}}">
                        </div>
                        <div>
                            <label>Bidang Kerja</label>
                            <input type="text" class="form-control" name="id_category" value="{{ $p->bidang->nama }}">
                        </div>
                        <div>
                            <label>Kabupaten/Kota</label>
                            <input type="text" class="form-control" name="id_kabupaten" value="{{ $p->kab->kabupaten }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Foto</label>
                           
                            <br>
                            <img src="{{ asset( $p->foto ) }}" class="img-fluid" style="width: 100px">
                        </div>
                        <div class="form-group">
                            <a class="btn btn-info" href="/cv/edit/{{ $p->id_pencari }}">Edit Biodata</a>
                        </div>
                        </form>
                        @endforeach
                        
					</div>

@endsection