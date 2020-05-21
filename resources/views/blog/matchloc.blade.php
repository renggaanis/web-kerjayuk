@extends('template_blog.content')
@section('isi')
<div class="col-md-8 hot-post-left">
<h4>Rekomendasi lowongan kerja berdasarkan lokasi&nbspanda<h5>
</br>
			@foreach($loker as $list_match)
		
					<div class="post post-row">
						<a class="post-img" href="{{ route('blog.isi', $list_match->judul) }}">
						<img src="{{ asset($list_match->gambar) }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{ $list_match->nama }}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{ $list_match->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $list_match->name }}</a></li>
								<li>{{ $list_match->created_at }}</li>
							</ul>
							<p></p>
						</div>
					</div>
			@endforeach
			
			</div>

@endsection
