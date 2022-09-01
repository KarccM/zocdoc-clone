<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $search;
    public $select;
    public $searchPlaceholder = "procedure , doctor name...";
    public $sections = ['Dentists', 'OBGYNs', 'Psychologists'];

    public function sendRequest()
    {
        //instead of sending to api
        $this->emit('search-action', $this->search);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
