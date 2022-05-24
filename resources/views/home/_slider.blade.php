<div class="col-lg-6">
                @foreach($sliderdata as $rs)
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>{{$rs->title}}</h4>
                                <span>Awesome, clean &amp; creative HTML5 Template</span>
                                <div class="main-border-button">
                                    <a href="#">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="{{Storage::url($rs->image)}}" alt="">
                        </div>
                    </div>
                @endforeach
                </div>