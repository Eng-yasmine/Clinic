<?php

namespace App\Livewire;

use Livewire\Component;

class TryHooks extends Component
{

    public $count = 0;

    public function mount()
    {
        dump('from mount');
    }
    public function boot()
    {
        dump('from boot');
    }

    public function increment()
    {
        $this->count++;
        dump('from increment');
    }

    public function hydrate()
    {
        dump('from hydrate');
    }
    public function dehydrate()
    {
        dump('from dehydrate');
    }
    public function render()
    {
        dump('from render');
        return view('livewire.try-hooks');
    }
}
