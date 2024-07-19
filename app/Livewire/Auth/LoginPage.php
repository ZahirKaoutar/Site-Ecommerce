<?php

namespace App\Livewire\Auth;

use Livewire\Component;




use Livewire\Attributes\Title;


#[Title('Login')]
class LoginPage extends Component
{
    public $email;
    public $password;

   public function save()
    {
        $this->validate( [
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:6|max:255',
        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid credentials');
            return;
        }
        //La méthode auth()->attempt() est responsable de vérifier si le mot de passe de l'utilisateur est correct en comparant le mot de passe fourni avec le mot de passe haché dans la base de données.
        return redirect()->intended();


    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
