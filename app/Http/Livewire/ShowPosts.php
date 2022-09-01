<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $counter =0;
    public $text = "";

    protected $rules = [
        'counter' => 'required',
        'text' => 'required|string|max:3',
    ];

    public function cs(){
        $this->emit('cardSelected',"bakr");
    } 

    public function checkBeforeSend(){
        $this->reset();
    }
    
    public function updated(){
        $this->validate();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
