@foreach($children as $subcategory)
    @if(count($subcategory->children))
        @include('home.categorytree4',['children'=>$subcategory->children])
    @else
        <span data-filter=".{{$subcategory->title}}">{{$subcategory->title}}</span>
    @endif
@endforeach
