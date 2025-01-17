<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AdminLoginController extends Controller
{
    use ValidatesRequests;

    public function showLoginForm()
    {
        return view('authentification.loginAdmin');
    }

    public function login(Request $request)
    {
        // Validation des données de connexion
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentative de connexion
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // La redirection vers la page appropriée est gérée par le middleware
            return redirect()->intended('/admin');
        }

        // Si la connexion échoue
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Les informations de connexion ne sont pas valides.',
        ]);
    }
}
