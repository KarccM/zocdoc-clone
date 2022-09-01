<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $footerData = [
        ['title'=> 'Contact',
        "data" => array(
            "email"=>"info@company.com",
            "phone"=>"+40 5854-882",
            "location"=>"UK, Manchester",
            )
        ],[
            'title'=> 'Links',
            "data" => array(
                "About"=>"<a href=\"about\">about</a>",
                "Home"=>"<a href=\"home\">home</a>",
                "Help"=>"<a href=\"help\">help</a>",
            )
        ],
    ];

    public function render()
    {
        return view('livewire.footer');
    }
}
