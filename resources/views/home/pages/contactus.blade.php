@extends('layouts.main')
@section('title',"Contact Us")

@include('home._header')
<div style="margin-top:30x"></div>

<!-- ***** Main Banner Area Start ***** -->

@section('content')
<div class="main-banner" id="top">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-center">
			    <!-- ***** Contact Area Starts ***** -->
				<div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  {!! $data !!}
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Say Hello. Don't Be Shy!</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="contact" action="{{route('contact.store')}}" method="post">
						@csrf
                        <div class="row">
                          <div class="col-lg-6">
                            <fieldset>
                              <input class="mb-2" name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input class="mb-2" name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="phone" type="text" id="phone" placeholder="Your phone" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Your subject" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

		</div>
	</div>
</div>
@endsection