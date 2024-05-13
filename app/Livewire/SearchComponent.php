<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;
    protected $queryString=['search'=>['except'=>'','as'=>'s']];
    public function render()
    {
        return view('livewire.search-component',['posts'=>Post::where('name','like','%'.$this->search.'%')->get()]);
    }
}
