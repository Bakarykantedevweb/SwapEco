<?php

namespace App\Http\Controllers\Entreprise;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeOffreController extends Controller
{
    public function index()
    {
        return view('entreprise.type-offre.index');
    }
}
