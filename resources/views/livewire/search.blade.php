<div class="input-group">
    <span class="input-group-addon cursor-pointer">
        <button class="search-form_submit fas fa-search text-white" type="submit"></button>
    </span>
    <input wire:model="search" type="text" class="search-form_input form-control" name="search" autocomplete="off" list="mylist" placeholder="Type & hit enter...">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist1 as $rs)
                <option value="{{$rs->title}}"></option>
            @endforeach
            @foreach($datalist2 as $rs)
                 <option value="{{$rs->title}}"></option>
            @endforeach
        </datalist>
    @endif
    <span class="input-group-addon close-search"><i class="fas fa-times mt-1"></i></span>
</div>
