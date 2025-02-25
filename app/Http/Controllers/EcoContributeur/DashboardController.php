<?php

namespace App\Http\Controllers\EcoContributeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class DashboardController extends Controller
{
    public function index(): View{
        return view("eco_contributeur.dashboard");
    }
}
