@extends('template_blog.content')
@section('isi')
<div class="col-md-8 hot-post-left">
<h3>List post lowongan kerja</h3>
</br>
			@foreach($data as $list_post)
		
					<div class="post post-row">
						<a class="post-img" href="{{ route('blog.isi', $list_post->judul) }}">
						<img src="{{ asset($list_post->gambar) }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{ $list_post->category->nama }}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{ $list_post->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $list_post->user->name }}</a></li>
								<li>{{ $list_post->created_at->format('Y-m-d') }}</li>
							</ul>
							<p></p>
						</div>
					</div>
			@endforeach
			<center>{{ $data->links() }}</center>
			</div>

@endsection
