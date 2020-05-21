@extends('template_blog.content')
@section('isi')
	<!-- /HEADER -->

	<!-- SECTION -->
	
			<!-- row -->
					@if (session('status'))
								<div class="alert alert-success" role="alert">
									{{ session('status') }}
								</div>
					@endif
							<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/bg2.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">Selamat Datang di Website KerjaYuk!</a></h3>
							<ul class="post-meta">
								
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/sipil.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								
							</div>
							<h3 class="post-title"><a href="blog-post.html">Temukan pekerjaan sesuai bidangmu</a></h3>
							<ul class="post-meta">
								
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/tekkim.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								
							</div>
							<h3 class="post-title"><a href="blog-post.html">Temukan perusahaan impianmu</a></h3>
							<ul class="post-meta">
								
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
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
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
                        <!-- post -->
                        @foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->judul) }}"><img src="{{ $post_terbaru->gambar }}" 
								alt="" style="height: 180px "></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{ $post_terbaru->category->nama }}</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{ $post_terbaru->user->name }}</a></li>
										<li>{{ $post_terbaru->created_at->format('Y-m-d') }}</li>
									</ul>
								</div>
							</div>
                        </div>
                        @endforeach
					</div>
						<!-- /post -->
		
					<!-- /row -->

					<!-- row -->
				

@endsection