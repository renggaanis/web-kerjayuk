@include('template_blog.head')

<div class="section">
		<!-- container -->
		<div class="container">
        <div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
				<h4>List Lamaran Pekerjaan</h4>
				<a class="btn btn-primary" href="/lamaran/create">Mulai Lamar Pekerjaan</a>
				</br>
				</br>
				<div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table table-striped table-md">
					<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Bidang Kerja</th>
									<th>Lowongan Kerja/Perusahaan Tujuan</th>
									<th>Pendidikan Terakhir</th>
									<th>Kompetensi</th>
									<th>Pengalaman</th>
									<th>Kabupaten/Kota</th>
									<th>Essay</th>
									<th>Foto</th>
								</tr>
								@php $i=1 @endphp
								@foreach($lamaran as $p)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $p->name }}</td>
									<td>{{ $p->bidang->nama }}</td>
									<td>{{ $p->loker->judul }}</td>
									<td>{{ $p->pend->name}}</td>
									<td>{{ $p->komp->name}}</td>
									<td>{{ $p->exp->pengalaman}}</td>
									<td>{{ $p->kab->kabupaten }}</td>
									<td>{{ $p->essay }}</td>
									<td><img src="{{ asset( $p->foto ) }}" class="img-fluid" style="width: 100px"></td>
								</tr>
								@endforeach
                    </table>
                    
                </div>
            </div>
						
					</div>
					@include('template_blog.widget')
                </div>
            
	
</div>

@include('template_blog.footer')