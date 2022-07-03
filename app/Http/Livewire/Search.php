<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Service;
use Livewire\Component;

class Search extends Component
{
    public $search='';
    public function render()
    {

        $datalist1 = Post::where('title', 'LIKE', '%'.$this->search.'%')->get();
        $datalist2 = Service::where('title', 'LIKE', '%'.$this->search.'%')->get();
        return view('livewire.search',['datalist1'=>$datalist1,'datalist2'=>$datalist2,'query'=>$this->search]);
    }
}
