<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];

    protected $messages = [
        'form.email.required' => 'Email field required.',
        'form.email.email' => 'This is not email type.',
        'form.password.required' => 'Password filed required.',
    ];

    public function login() {
        $this->validate(
            [
                'form.email' => 'required|email',
                'form.password' => 'required'
            ],
            $this->messages
        );
        Auth::attempt($this->form);
        if(auth()->check()) {
            return redirect(route('home'));
        }
        dd($this->form);
    }


    public function render()
    {
        return view('livewire.login');
    }
}
