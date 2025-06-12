<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $ParentTitle = 'Parent Component';
    public function render()
    {
        return view('livewire.parent-component');
    }
}
