<?php

namespace App\Http\Controllers\EcoContributeur\Auth;

use Illuminate\Http\Request;
use App\Models\EcoContributeur;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(): View{
        return view("eco_contributeur.auth.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:eco_contributeurs',
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 caractères
                'confirmed', // Vérifie la correspondance avec password_confirmation
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],
        ], [
            'password.regex' => 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&).',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);

        $user = EcoContributeur::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('eco_contributeur')->login($user);
        return redirect()->route('contributeur.dashboard');
    }

}
