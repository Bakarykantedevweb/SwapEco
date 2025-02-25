<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticatedEntreprise
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('entreprise')->check()) {
            toastr()->error('Vous devez être connecté en tant qu\'entreprise pour accéder à cette page.');
            return redirect('entreprise/login'); // Rediriger vers la page de connexion
        }
        return $next($request);
    }
}
