@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li ><a href="{{route('categoryservices',['id'=>$subcategory->id])}}"> {{$subcategory->title}}</a>
            <ul class="list-unstyled ps-0">
                @include('home.categorytree2',['children'=>$subcategory->children])
            </ul>
        </li>
    @else
        <li><a href="{{route('categoryservices',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
    @endif
@endforeach
