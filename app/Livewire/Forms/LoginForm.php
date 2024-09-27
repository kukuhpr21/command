<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate(['required'])]
    public string $email = "";

    #[Validate(['required'])]
    public string $password = "";

    public function login()
    {
        $this->validate();
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provide credentials do not match our records.'
        ]);
    }
}
