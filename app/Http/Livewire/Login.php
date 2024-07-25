<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $errorMessage = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $this->email)->first();

        if ($user && Hash::check($this->password, $user->password)) {
            Auth::login($user);
            return redirect()->to('/dashboard'); // Redirect to a protected route
        } else {
            $this->errorMessage = 'Invalid email or password.';
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
