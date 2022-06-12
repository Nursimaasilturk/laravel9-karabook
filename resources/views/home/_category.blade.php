<ul class="nav">
    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle m-0 p-0" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <li class="scroll-to-section"><a href="{{route('faq')}}">Faq</a></li>
    <li class="scroll-to-section"><a href="{{route('contact')}}">Contact Us</a></li>
    <li class="scroll-to-section"><a href="{{route('references')}}">References</a></li>
    <li class="scroll-to-section"><a href="{{route('about')}}">About Us</a></li>
    @auth
    <li class="submenu">
        <a href="javascript:;">{{Auth::user()->name}}</a>
        <ul>
            <li><a href="/user/profile">Profile</a></li>
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>

    </li>
    @else
    <li class="submenu">
        <a href="javascript:;">USER</a>
        <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/signup">Register</a></li>
        </ul>

    </li>
    @endauth

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