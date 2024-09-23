<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Login")]
class LoginPage extends Component
{

    public $email;
    public $password;

    // register user
    public function save(){
        $this->validate([
            "email"=> "required|email|exists:users,email",
            "password"=> "required|min:6|max:255",
        ]);

        if(!auth()->attempt(["email"=> $this->email,"password"=> $this->password])){
            session()->flash("error","Invalid credentials");
            return;
        }

        // redirect to home page
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
