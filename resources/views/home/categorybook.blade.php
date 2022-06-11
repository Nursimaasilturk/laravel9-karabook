@extends('layouts.main')
@section('title',$bookList[0]->category->title,'Books')

@include('home._header')
<div style="margin-top:30x"></div>

<!-- ***** Main Banner Area Start ***** -->

@section('content')


<div class="main-banner" id="top">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-center">
			<nav aria-label="breadcrumb custom-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item " style="color:darkblue;"><a href="{{route('home')}}">HOME</a></li>
					<li class="breadcrumb-item"><a></a>Library</li>
					<li class="breadcrumb-item active" aria-current="page">{{$bookList[0]->category->title}}</li>
				</ol>
			</nav>
			@foreach($bookList as $book)
			<div class="col-md-3 ">
				<div class="card  ">
					<img class="card-img-top" src="{{Storage::url($book->image)}}" alt="Card image cap" width="100px" height="300px">
					<div class="card-body">
						<h5 class="card-title">{{$book->title}}</h5>
						<p class="card-text">{{$book->description}}</p>
					</div>
					<div class="card-footer text-center">
						<button type="button" class="btn btn-outline-primary w-50"><a href="{{route('book',['id'=>$book->id])}}">Details</a></button>
						<h1 class="text-muted ">⭐️⭐️⭐️⭐️⭐️⭐️</h1>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection