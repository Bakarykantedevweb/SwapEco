<?php

namespace App\Http\Controllers\Entreprise\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('entreprise.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('entreprise')->attempt($credentials)) {
            toastr()->success("Bienvenue sur la Plateforme SWAPECO");
            return redirect('/entreprise/dashboard');
        }
        toastr()->error("Email ou mot de passe incorrect");
        return redirect('/entreprise/login');
    }


    public function logout()
    {
        Auth::guard('entreprise')->logout();
        toastr()->success("Merci pour votre Visite");
        return redirect('/entreprise/login');
    }
}
