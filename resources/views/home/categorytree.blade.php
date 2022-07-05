@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li ><a role="button"> {{$subcategory->title}}</a>
            <ul class="sub-menu">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
        </li>
    @else
        <li class="{{ (request()->is('categoryservices/'.$subcategory->id.'')) ? 'current' : '' }}"><a href="{{route('categoryservices',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
    @endif
@endforeach
