<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    public $search;
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public function paginationView()
{
    return 'vendor.livewire.custom-pagination';
}
    protected $queryString=['search'=>['except'=>'','as'=>'s']];
      public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.search-component',['posts'=>Post::where('name','like','%'.$this->search.'%')->paginate(5)]);
    }
}
