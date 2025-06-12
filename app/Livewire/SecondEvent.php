<?php

namespace App\Livewire;

use Livewire\Component;

class SecondEvent extends Component
{
    protected $listeners = ['fire' => 'ambulance'];

    public function fire()
    {
        dd('fire', 'ambulance from SecondEvent');
    }
    public function render()
    {
        return view('livewire.second-event');
    }
}
