@extends('layouts.main')
@section('title',$data->title)

@section('content')
@include('home._header')





<div class="book-detail__content">

	<section class="section" id="explore">
		<nav aria-label="breadcrumb custom-breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item"><a href="#">{{$data->category->title}}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
			</ol>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-content">
						<h2 style="color:orange">{{$data->title}}</h2>
						<h3 style="color:darkorchid">Description</h3>
						<span>{!!$data->description!!}</span>
						<h3 style="color:darkorchid">Details</h3>
						<p>{!!$data->detail!!}</p>
						<div class="main-border-button">
							<a href="/">Discover More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="right-content">
						<div class="row">
							<div class="col-lg-6">
								<div class="book-detail__image">
									<img src="{{Storage::url($data->image)}}" alt="" style="width:400px; height:600px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="book-slider-header">
		<h1 class="text-center">İLGİLİ KİTAPLAR</h1>
	</div>
	<div class="relative_books_container">
		<div id="carouselExampleControls" class="carousel slide w-25 " data-bs-ride="carousel">
			
			<div class="carousel-inner">
			@foreach($relbook as $rs)
				<div class="carousel-item @once active @endonce justify-content-center">
					<img src="{{Storage::url($rs->image)}}" class="d-block slider-image" alt="...">
				</div>
			@endforeach
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		
	</div>
</div>
@endsection