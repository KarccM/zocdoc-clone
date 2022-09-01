<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $description = "";
    public $name = "";
    public $imgsrc = "";
    public $fullPortrait = "";
    public $developerName = "";
    public $role = "";
    public $roleDescription = "";

    public function mount($agent){
        $this->name = $agent->displayName;
        $this->description = $agent->description;
        $this->imgsrc = $agent->displayIconSmall;
        $this->fullPortrait=$agent->fullPortrait;
        $this->developerName = $agent->developerName;
        $this->role = $agent->role->displayName;
        $this->roleDescription = $agent->role->description;
    }

    public function cardSelected(){
        $agent = array(
            "name"=>$this->name,
            "description"=>$this->description,
            "fullImgsrc"=>$this->fullPortrait,
            "role"=>$this->role,
        );
        $this->emit('cardSelected',$agent);
    }

    public function render()
    {
        return view('livewire.card');
    }
}
