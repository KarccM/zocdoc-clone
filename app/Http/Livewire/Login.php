<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Helpers\ApiCalls;

class Login extends Component
{   
    public $data ="data";
    public function checkOut(){
        $response = ApiCalls::getInstance()->fetchData('GET', 'https://valorant-api.com/v1/agents');
        $data = $response[0]->uuid;
    }

    public function render()
    {
        return view('livewire.login')
                ->layout('layout.default-layout')
                ->slot('content');
    }
}
