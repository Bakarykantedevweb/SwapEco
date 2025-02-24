<?php

namespace App\Http\Controllers\Promoteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class DashboardController extends Controller
{
    public function index(): View{
        return view("promoteur.dashboard");
    }
}
