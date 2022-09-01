<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BigCard extends Component
{
    protected $listeners = ['cardSelected' => 'displayDetails'];
    public $description = "";
    public $name = "";
    public $imgsrc = "";
    public $developerName = "";
    public $role = "";
    public $roleDescription = "";
    public $show = false;

    public function displayDetails($agent)
    {
        $this->name = $agent['name'];
        $this->description = $agent['description'];
        $this->imgsrc = $agent['fullImgsrc'];
        $this->role = $agent['role'];
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.big-card');
    }
}
