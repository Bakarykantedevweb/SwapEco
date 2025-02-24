<?php

namespace App\Http\Controllers\Entreprise\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('entreprise.auth.register');
    }
}
