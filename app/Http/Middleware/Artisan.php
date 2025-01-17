<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Artisan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            Log::info('Utilisateur non authentifié, redirection vers la page d\'inscription.');
            return redirect()->route('authentification.register');
        }
        $userRole = Auth::user()->role;

        if($userRole == 'artisan'){
            Log::info('Utilisateur authentifié avec le rôle artisan.');
                return $next($request);
        }

        if($userRole == 'admin'){
            Log::info('Utilisateur authentifié avec le rôle admin, redirection vers la page admin.');
            return redirect()->route('admin');
        }
        
        if($userRole == 'membre'){
            Log::info('Utilisateur authentifié avec le rôle membre, redirection vers la page membre.');
            return redirect()->route('membre');
        }

         // Redirection par défaut si le rôle est inconnu
    return redirect()->route('authentification.register');
    }
}
