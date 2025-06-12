<?php

namespace App\Livewire;

use Livewire\Component;

class TestAction extends Component
{
    public $count = 0;
    public $IsActive = false;
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function toggleActive()
    {
        $this->IsActive = !$this->IsActive;
    }
    public function resetCount()
    {
        $this->count = 0;
    }
    public function render()
    {
        return view('livewire.test-action');
    }
}
