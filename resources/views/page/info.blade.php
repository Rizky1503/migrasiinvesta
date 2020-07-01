@extends('page.index')

@section('content')
<section class="section1">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="servicebox text-center">
				<div class="service-icon">
					<div class="servicetitle">
						<a href="?page=beritadet&idberita=20" class="">
							<img class="" alt="" src="{{ asset('public/assets/images/img/about_us.png') }}">
					  		<h4>About Us</h4>
					  	</a>
					  <hr>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="servicebox text-center">
				<div class="service-icon">
					<div class="servicetitle">
						<a href="?page=beritadet&idberita=20" class="">
							<img class="" alt="" src="{{ asset('public/assets/images/img/services.png') }}">
					  		<h4>About Us</h4>
					  	</a>
					  <hr>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="servicebox text-center">
				<div class="service-icon">
					<div class="servicetitle">
						<a href="?page=beritadet&idberita=20" class="">
							<img class="" alt="" src="{{ asset('public/assets/images/img/our-team.png') }}">
					  		<h4>About Us</h4>
					  	</a>
					  <hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<br/><br/>

<div class="author-wrap">
	<span class="inside">
		<a href=""><img class="img-responsive" alt="" src="{{ asset('public/assets/images/img/news.jpg') }}"></a>
	</span>
</div>

@foreach($berita as $key => $id_berita)
	@foreach($id_berita as $key => $value)
		<article class="blog-wrap text-center">
			<div class="blog-media">
				<div class="he-wrap tpl2">
				</div>
			<!-- he wrap -->
			</div>

			<header class="page-header blog-title">
				<h3 class="general-title">{{ $value->judul }}</h3>
				<div class="post-meta">
					<p>
					Published at: <span class="publish-on">29-06-2020</span>
					<span class="sep">/</span> Category: <a href="#">local</a>
					</p>
				</div>
			</header>

			<div class="post-desc">
			<p>
				{{ $value->ringkasan }}            
			</p>
			<a class="readmore" href="" title="">read more</a>
			</div>
		</article>
	@endforeach
@endforeach
@endsection