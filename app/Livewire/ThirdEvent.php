<?php

namespace App\Livewire;

use Livewire\Component;

class ThirdEvent extends Component
{
    protected $listeners = ['fire' => 'ambulance'];

    public function fire()
    {
        dd('fire', 'ambulance from ThirdEvent');
    }
    public function render()
    {
        return view('livewire.third-event');
    }
}
