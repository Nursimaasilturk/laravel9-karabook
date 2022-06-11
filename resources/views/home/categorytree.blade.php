@foreach($children as $subcategory)
<ul>
	@if(count($subcategory->children))
	<li class="submenu">
		<a href="{{route('category_book',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a>
		<ul>
			@include('home.categorytree',['children' => $subcategory->children])
		</ul>
		<hr>
	@endif
	</li><a href="{{route('category_book',['id'=>$subcategory->id])}}" class="text-center">{{$subcategory->title}}</a>
</ul>
@endforeach