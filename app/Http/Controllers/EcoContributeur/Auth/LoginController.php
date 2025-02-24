<?php

namespace App\Http\Controllers\EcoContributeur\Auth;

use Illuminate\Http\Request;
use App\Models\EcoContributeur;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View{
        return view("eco_contributeur.auth.login");
    }

    public function login(Request $request){

         // Valider les données du formulaire
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if (Auth::guard('eco_contributeur')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('contributeur.dashboard');
        }
        return toastr()->error('Identifiants incorrects.');
    }

    public function logout()
    {
        Auth::guard('eco_contributeur')->logout();
        return redirect()->route('contributeur.login');
    }

}
