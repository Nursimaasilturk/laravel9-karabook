    <!-- ***** Contact Area Starts ***** -->
    @include('home.messages')
    <div class="contact-us">
    	<div class="container">
    		<div class="row">
    			<div class="section-heading">
    				<h2>Your Comment</h2>
    			</div>
    			@auth
    			<form id="contact" action="{{route('storecomment')}}" method="post">
    				@csrf
    				<input name="book_id" type="hidden" id="subject" value="{{$data->id}}" required="">

    				<div class="row">
    					<div class="col-lg-6">
    						<fieldset>
    							<input name="subject" type="text" id="subject" placeholder="Your subject" required="">
    						</fieldset>
    					</div>
    					<div class="col-lg-6 ">
    						<fieldset>
    							<select name="rate" class="form-select form-select-sm bg-info text-white" aria-label=".form-select-sm example">
    								<option value="1" selected>⭐️</option>
    								<option value="2">⭐️⭐️</option>
    								<option value="3">⭐️⭐️⭐️</option>
    								<option value="4">⭐️⭐️⭐️⭐️</option>
    								<option value="5">⭐️⭐️⭐️⭐️⭐️</option>
    							</select>
    						</fieldset>
    					</div>
    					<div class="col-lg-12">
    						<fieldset>
    							<textarea name="comment" rows="6" id="comment" placeholder="Your comment" required=""></textarea>
    						</fieldset>
    					</div>
    					<div class="col-lg-12">
    						<fieldset class="pb-2">
    							<button type="submit" class=" w-100">Send Comment</button>
    						</fieldset>
    					</div>
    				</div>
    			</form>
    			@else
    			<a href="/login">Join us to make comment!🔥</a>
    			@endguest
    		</div>
    	</div>
    </div>
    <!-- ***** Contact Area Ends ***** -->
	<div class="container-fluid">
		<div class="row">
		<div class="comment-detail d-flex justify-content-between">
				<div class="comment-detail--avg">
					Yorum Sayısı: {{$data->comment->count('id')}}
				</div>
				<div class="comment-detail--count">
					Avg Rate:{{$data->comment->avg('rate')}}
				</div>
			</div>
			@foreach($commentList as $comment)
			<div class="comment__container bg-warning mt-3">
				<h4 class="comment__container--user">User:{{$comment->user->name}}</h4>
				<h5 class="comment__container--subject">Subject:{{$comment->subject}}</h5>
				<span class="comment__container--comment">Comment:{{$comment->comment}}</span>
				<blockquote class="comment__container--rate">Rate:{{$comment->rate}}</blockquote>
			</div>
			@endforeach
		</div>
	</div>