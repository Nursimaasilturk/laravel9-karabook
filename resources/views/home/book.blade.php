@extends('layouts.main')
@section('title',$data->title)

@section('content')
@include('home._header')
<div class="book-detail__empty">

</div>
<div class="book-detail__content">
<section class="section" id="explore">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="left-content">
					<h2 style="color:orange">{{$data->title}}</h2>
					<span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
					<div class="quote">
						<i class="fa fa-quote-left"></i>
						<p>You are not allowed to redistribute this template ZIP file on any other website.</p>
					</div>
					<p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
					<p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
					<div class="main-border-button">
						<a href="products.html">Discover More</a>
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
</div>
@endsection