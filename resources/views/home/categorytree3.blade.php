@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li ><a role="button"> {{$subcategory->title}}</a>
            <ul class="mb-0 ps-0 list-unstyled">
                @include('home.categorytree3',['children'=>$subcategory->children])
            </ul>
        </li>
    @else
        <li class="active"><a href="{{route('categoryservices',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
    @endif
@endforeach
