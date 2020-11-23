<?php

namespace App\Http\Livewire;

use App\User;
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
        'form.password.confirmed' => "Password Don't Match with Password Field",
        'form.password.min' => "Password should be minimum 6 character",
    ];
    public function submit() {

        $this->validate([
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.password' => 'required|confirmed|min:6'
        ], $this->messages);
        // dd($this->form);
        User::create($this->form);
        session()->flash('message', 'message', 'Your registration has been successfully done 😍. Please login.');
        return redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.register');
    }
}
