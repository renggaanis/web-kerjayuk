@extends('template.content')
@section('isi')

    @foreach($dat as $isi_post)
<header>
    <div id="post-header" class="page-header">
            <div class="page-header-bg" 
            style="background-image: url( {{ asset($isi_post->gambar) }} );" 
            data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html">{{ $isi_post->category->nama }}</a>
						</div>
						<h1>{{ $isi_post->judul }}</h1>
						<ul class="post-meta">
							<li><a href="author.html">{{ $isi_post->user->name }}</a></li>
							<li>{{ $isi_post->created_at->format('Y-m-d') }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
</header>
<br>
	<div class="section-row">


	{!! $isi_post->content !!}
	<label>Penempatan</label>
	<li>{{ $isi_post->kab->kabupaten }}</li>
	<label>Pendidikan</label>
	<li>{{ $isi_post->pendidikan->name }}</li>
	<label>Gaji</label>
	<li>{{ $isi_post->gaji->gaji }}</li>
	<label>Sistem Kerja</label>
	<li>{{ $isi_post->sistem->name }}</li>
    </br>
    </br>
    <a class="btn btn-primary" href="/login">Lamar Pekerjaan</a>
	</div>
    @endforeach
    

@endsection
