@extends('layouts.main')
@section('title',"faq")

@include('home._header')
<div style="margin-top:30x"></div>

<!-- ***** Main Banner Area Start ***** -->

@section('content')
<div class="main-banner" id="top">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-center">
		<div class="content-wrapper">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
					@foreach($faqList as $faq)
                        <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$faq->id}}" aria-expanded="false" aria-controls="flush-collapse{{$faq->id}}">
                                        {{$faq->question}}</button>
                                </h2>
                                <div id="flush-collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> 
										{{$faq->answer}}
                                </div>
								</div>
					</div>
					@endforeach
      				</div>
							
					
			</div>
			</div>
		</div>
	</div>
</div>
@endsection