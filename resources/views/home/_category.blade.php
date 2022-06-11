<ul class="nav">
    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            @foreach($mainCategories as $rs)
            <li><a class="dropdown-item text-dark" href="{{route('category_book',['id'=>$rs->id])}}">{{$rs->title}}</a>
                @if(count($rs->children))
                @include('home.categorytree',['children'=> $rs->children])
                @endif
            </li>
            @endforeach
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

<!--
<ul>
                    <li class="submenu">
                        <a href="javascript:;">Features</a>
                        <ul>

                            <li><a href="#">Features Page 1</a></li>
                            <li><a href="#">Features Page 2</a></li>
                            <li><a href="#">Features Page 3</a></li>
                            <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>

                        </ul>

                    </li>
                </ul>
-->