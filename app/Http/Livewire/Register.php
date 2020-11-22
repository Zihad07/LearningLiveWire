<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    // public $name;
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    protected $messages =[
        'form.name.required' => 'Name required',
        'form.email.required' => 'Email Required',
        'form.password.required' => 'Password Required',
    ];
    public function submit() {

        $this->validate([
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.password' => 'required|confirmed'
        ], $this->messages);
        dd($this->form);
    }
    public function render()
    {
        return view('livewire.register');
    }
}
