<?php

namespace App\Livewire;

use Livewire\Component;

class FlashMessage extends Component
{
    public function flash(){
        session()->flash('message','Value saved correctly');
        return redirect()->route('welcome2');
    }
    public function render()
    {
        return view('livewire.flash-message');
    }
}
