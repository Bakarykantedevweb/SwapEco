<?php

namespace App\Http\Controllers\Promoteur\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View{
        return view("promoteur.auth.login");
    }

    public function login(Request $request){

        // Valider les données du formulaire
        $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);



       if (Auth::guard('promoteur')->attempt(['email' => $request->email, 'password' => $request->password])) {
           return redirect()->route('promoteur.dashboard');
       }
       return toastr()->error('Identifiants incorrects.');
   }

   public function logout()
   {
       Auth::guard('promoteur')->logout();
       return redirect()->route('promoteur.login');
   }
}
