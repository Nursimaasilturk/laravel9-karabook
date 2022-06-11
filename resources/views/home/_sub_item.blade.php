@foreach($booklist1 as $rs)
<div class="item">
    
    <div class="thumb">
        <div class="hover-content">
            <ul>
                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <a href="{{route('book',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="" style ="height:450px; width:300px;  ">  </a>
    </div>
    <div class="down-content">
        <h4>{{$rs->title}}</h4>
        <span>$120.00</span>
        <ul class="stars">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
    </div>
   
</div>
@endforeach