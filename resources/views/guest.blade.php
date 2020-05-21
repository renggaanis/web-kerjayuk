@extends('template.content')
@section('isi')
	<!-- /HEADER -->

	<!-- SECTION -->
	
			<!-- row -->
			<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('homeawal/css/styles.css')}}" rel="stylesheet" />
			
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
                       
						@foreach($dat as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('guest.isi', $post_terbaru->judul) }}"><img src="{{ $post_terbaru->gambar }}" 
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
					<section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('frontend/av2.jpg') }}"alt="" />
                            <h4>Diah Leni Karputri</h4>
                            <p class="text-muted">Lead Developer</p>
                          
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('frontend/av1.jpg') }}" alt="" />
                            <h4>Anis Maulidatur Rizqiyah</h4>
                            <p class="text-muted">Lead System Analyst</p>
                         
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('frontend/av3.jpg') }}" alt="" />
                            <h4>Sayyidah 'Aisy Farikhah</h4>
                            <p class="text-muted">Lead Designer</p>
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
                </div>
            </div>
        </section>
				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('homeawal/assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{ asset('homeawal/assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('homeawal/js/scripts.js')}}"></script>
@endsection
