<?php

namespace App\Http\Controllers\Entreprise\Auth;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('entreprise.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|unique:entreprises',
            'email' => 'required|email|unique:entreprises',
            'password' => 'required|min:8|confirmed',
        ]);

        $entreprise = new Entreprise();
        $entreprise->nom_complet = $request->nom_complet;
        $entreprise->email = $request->email;
        $entreprise->password = Hash::make($request->password);
        $entreprise->save();
        toastr()->success("Votre Compte a bien ete cree avec success");
        return redirect('/entreprise/login');
    }
}
