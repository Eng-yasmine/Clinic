<?php

namespace App\Livewire;

use Livewire\Component;

class ShowDoctors extends Component
{
    // public $doctor= 'Rayan Ahmed';
    public $doctors = [
        'Dr. John Doe',
        'Dr. Jane Smith',
        'Dr. Emily Johnson',
        'Dr. Michael Brown',
        'Dr. Sarah Davis',
    ];
    public $name1;
    public $name2;
    public $name3;
    public $search;
    public function mount()
    {
        // this function is run just before the component is rendered
        // this function is called when the component is initialized
        // You can use it to set initial values or perform any setup needed
        // For example, let's initialize a list of doctors
        // $this->doctors = [
        //     'Dr. John Doe',
        //     'Dr. Jane Smith',
        //     'Dr. Emily Johnson',
        //     'Dr. Michael Brown',
        //     'Dr. Sarah Davis',
        // ];

        $this->fill(
            [
                'name1' => $this->doctors[0],
                'name2' => $this->doctors[1],
                'name3' => $this->doctors[2],
            ]
        );

        $this->reset([
            'name1',
            'name2',

        ]);
    }

    public function search()
    {

    }

    public function getDoctorsListProperty()
    {
        return implode(' ', $this->doctors);
    }

    public function render()
    {
        return view('livewire.show-doctors');
    }
}
