<?php

namespace App\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{
    public $ChildTitle = 'Child Component';
    public function render()
    {
        return view('livewire.child-component');
    }
}
