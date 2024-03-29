@extends('template_blog.konten')
@section('isi')
	<!-- /HEADER -->

	

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
								<h2 class="title">Lamar Pekerjaan</h2>
							</div>
						</div>
                        <div class="card-body p-0">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session('success') }}
                            </div>
                        @endif
                        <form action="/lamaran/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            </br>
                            <input type="radio"  name="jenis_kelamin" value="Laki - Laki" >Laki - laki
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" name="id_pendidikan">
                            <option value="" holder>Pilih Pendidikan</option>
                            @foreach($pendidikan as $result)
                            <option value="{{ $result->id_pendidikan }}" >{{ $result->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" class="form-control" name="jurusan">
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
                            <label>Kompetensi</label>
                            <select class="form-control" name="id_komp">
                            <option value="" holder>Pilih Kompetensi</option>
                            @foreach($komp as $result)
                            <option value="{{ $result->id_komp }}" >{{ $result->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bidang Kerja</label>
                            <select class="form-control" name="id_category">
                            <option value="" holder>Pilih Bidang Kerja</option>
                            @foreach($category as $result)
                            <option value="{{ $result->id_category }}" >{{ $result->nama }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lowongan Kerja/Perusahaan Tujuan</label>
                            <select class="form-control" name="id_loker">
                            <option value="" holder>Pilih Lowongan Kerja/Perusahaan Tujuan</option>
                            @foreach($loker as $result)
                            <option value="{{ $result->id_loker }}" >{{ $result->judul }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Posisi Pekerjaan</label>
                            <input type="text" class="form-control" name="posisi">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" name="id_kabupaten">
                            <option value="" holder>Pilih Kabupaten/Kota</option>
                            @foreach($kabupaten as $result)
                            <option value="{{ $result->id_kabupaten }}" >{{ $result->kabupaten }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Kirim Lamaran</button>
                        </div>
                        </form>
					</div>
                
                               
 

@endsection