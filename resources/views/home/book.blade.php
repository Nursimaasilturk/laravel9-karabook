@extends('layouts.main')
@section('title',$data->title)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<nav class="main-nav">
				<!-- ***** Logo Start ***** -->
				<a href="index.html" class="logo">
					<img src="assets/images/logo.png">
				</a>
				<!-- ***** Logo End ***** -->
				<!-- ***** Menu Start ***** -->
				<ul class="nav">
					<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
					<li class="scroll-to-section"><a href="#men">Men's</a></li>
					<li class="scroll-to-section"><a href="#women">Women's</a></li>
					<li class="scroll-to-section"><a href="#kids">Kid's</a></li>
					<li class="submenu">
						<a href="javascript:;">Pages</a>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="products.html">Products</a></li>
							<li><a href="single-product.html">Single Product</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:;">Features</a>
						<ul>

							<li><a href="#">Features Page 1</a></li>
							<li><a href="#">Features Page 2</a></li>
							<li><a href="#">Features Page 3</a></li>
							<li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>

						</ul>

					</li>
					<li class="scroll-to-section"><a href="#explore">Explore</a></li>
				</ul>
				<a class='menu-trigger'>
					<span>Menu</span>
				</a>
				<!-- ***** Menu End ***** -->
			</nav>
		</div>
	</div>
</div>
</header>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Library</a></li>
		<li class="breadcrumb-item"><a href="#">{{$data->category->title}}</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
	</ol>
</nav>


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