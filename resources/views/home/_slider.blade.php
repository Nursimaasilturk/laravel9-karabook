<!--
<div class="col-lg-6">
    <div class="left-content">
        @foreach($sliderdata as $rs)
        <div class="thumb">
            <div class="inner-content">
                <h4>{{$rs->title}}</h4>
                <span>Awesome, clean &amp; creative HTML5 Template</span>
                <div class="main-border-button">
                    <a href="#">Purchase Now!</a>
                </div>
            </div>
            <img src="{{Storage::url($rs->image)}}" alt="" style="width:528px; height:565px;">
        </div>
        @endforeach
    </div>
</div>


<div class="home-page__slider">
    <div class="slider-content">
        <div class="slider--images">
            <img src="img1.jpg" alt="">
            <img src="img2.jpg" alt="">
            <img src="img3.jpg" alt="">
        </div>
        <div class="slider--slide">
            <div onclick="side_slide(-1)" class="slider--left-button">
                <span class="fas fa-angle-left"></span>
            </div>
            <div onclick="side_slide(1)" class="slider--right-button">
                <span class="fas fa-angle-right"></span>
            </div>
        </div>
        <div class="slider--btn-img-sliders">
            <span onclick="btm_slide(1)"></span>
            <span onclick="btm_slide(2)"></span>
            <span onclick="btm_slide(3)"></span>
        </div>
    </div>
    <script>
        var indexValue = 1;
        showImg(indexValue);

        function btm_slide(e) {
            showImg(indexValue = e);
        }

        function side_slide(e) {
            showImg(indexValue += e);
        }
        function showImg(e){
            var i;
            const img = document.querySelectorAll('img');
            const sliders = document.querySelectorAll('.slider--btn-img-sliders span');
                if(e > img.length){indexValue= 1}
                if(e > 1){indexValue =img.length }
                for(i=0;i < img.length;i++){
                    img[i].style.display ="none";
                }
                for(i=0;i < sliders.length;i++){
                    sliders[i].style.background ="rgba(255,255,255,0.2)";
                }
                img[indexValue-1].style.display ="block";
                sliders[indexValue-1].style.background ="white";
        }
    </script>
</div>
-->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1614102073832-030967418971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1614102073832-030967418971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1614102073832-030967418971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1614102073832-030967418971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1614102073832-030967418971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1614102073832-030967418971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80">
    </div>
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

