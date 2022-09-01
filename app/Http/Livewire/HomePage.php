<?php

namespace App\Http\Livewire;

use App\Helpers\ApiCalls;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class HomePage extends Component
{
    public $agents;

    protected $listeners = ['search-action' => 'searchResult'];

    public function boot()
    {
        $this->agents = ApiCalls::getInstance()->fetchData('GET', 'https://valorant-api.com/v1/agents');
    }

    public function render()
    {
        return view('livewire.home-page')
            ->layout('layout.default-layout')
            ->slot('content');
    }

    public function searchResult($search)
    {
        $result = array();
        foreach ($this->agents as $agent) {
            if (strcmp($agent['displayName'], $search) == 0) {
                $result = array(
                    "name" => $agent['displayName'],
                    "description" => $agent['description'],
                    "fullImgsrc" => $agent['fullPortrait'],
                );
                break;
            }
        }

        if (!isEmpty($result)) {
            $this->emit('cardSelected', $result);
        }
    }
}
