<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->
					
					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->
					

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
							@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->nama) }}">{{ $hasil->nama }}<span>{{ $hasil->loker->count() }}</span></a></li>
							@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget text-center">
						<h4>Info Pemasangan Iklan Klik Gambar dibawah</h4>
						<a href="/blog/iklan" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="{{ asset('frontend/iklan.jpg') }}" alt="">
						</a>
					</div>
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="" alt="">
						</a>
					</div>
					<!-- /newsletter widget -->

					
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="{{ asset('public/frontend/tekkim.jpg') }}" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->