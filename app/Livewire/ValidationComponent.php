<?php

namespace App\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules =[
        'email' => 'required|email|max:255',
        'password' => 'required|min:6',
        'remember' => 'nullable|boolean',
    ];
    protected $messages = [
        'email.required' => 'Email is required.',
        'email.email' => 'Email must be a valid email address.',
        'email.max' => 'Email may not be greater than 255 characters.',
        'password.required' => 'Password is required.',
        'password.min' => 'Password must be at least 6 characters.',
        'remember.boolean' => 'Remember me must be true or false.',
    ];
    protected $validationAttributes = [
        'email' => 'Email Address',
        'password' => 'Password',
        'remember' => 'Remember Me',
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }
    public function updatedEmail()
    {
        $this->validateOnly('email');
    }
    public function updatedPassword()
    {
        $this->validateOnly('password');
    }
    public function updatedRemember()
    {
        $this->validateOnly('remember');
    }
    public function submit()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}

