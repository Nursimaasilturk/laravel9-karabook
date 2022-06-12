@extends('layouts.main')
@section('title',"References")

@include('home._header')
<div style="margin-top:30x"></div>

<!-- ***** Main Banner Area Start ***** -->

@section('content')
<div class="main-banner" id="top">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-center">
			{!!$data!!}
		</div>
	</div>
</div>
@endsection