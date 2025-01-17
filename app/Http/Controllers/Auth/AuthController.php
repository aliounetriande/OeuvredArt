<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Artisan;
use App\Models\Membre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('authentification.register');
    }

    public function showLoginForm()
    {
        return view('authentification.login');
    }
    


    public function register(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'genre' => 'required|string|max:10',
            'age' => 'required|integer|min:18|max:100',
            'profession' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:membres,email',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:membre,artisan',
            'biographie' => 'nullable|required_if:role,artisan|string|max:1000',
        'contact' => 'nullable|required_if:role,artisan|string|max:20',
        'whatsapp' => 'nullable|required_if:role,artisan|string|max:50',
            'photo' => 'nullable|image|max:2048'
        ]);

        // En fonction du rôle, créez soit un Membre, soit un Artisan
        if ($request->role === 'artisan') {
            // Créer un Artisan
            $artisan = Artisan::create([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'genre' => $validatedData['genre'],
                'age' => $validatedData['age'],
                'role' => 'artisan',
                'profession' => $validatedData['profession'],
                'email' => $validatedData['email'],
                'adresse' => $validatedData['adresse'],
                'ville' => $validatedData['ville'],
                'biographie' => $validatedData['biographie'],
                'contact' => $validatedData['contact'],
                'whatsapp' => $validatedData['whatsapp'],
                'password' => Hash::make($validatedData['password']),
                'photo' => $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null,
                'status' => 'active',
            ]);

            // Connecter l'utilisateur après inscription
            Auth::login($artisan);

            // Rediriger vers le dashboard des artisans
            return redirect()->route('artisan.dashboard');

            
        } else {
            // Créer un Membre
            $membre = Membre::create([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'genre' => $validatedData['genre'],
                'age' => $validatedData['age'],
                'role' => 'membre',
                'profession' => $validatedData['profession'],
                'email' => $validatedData['email'],
                'adresse' => $validatedData['adresse'],
                'ville' => $validatedData['ville'],
                'password' => Hash::make($validatedData['password']),
                'photo' => $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null,
                'status' => 'active',
            ]);

            // Connecter l'utilisateur après inscription
            Auth::login($membre);

            // Rediriger vers le dashboard des membres
            return redirect()->route('membre.dashboard');
        }

        

        // Rediriger l'utilisateur vers la page d'accueil ou une autre page appropriée
        return redirect()->route('connexion');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $email = $credentials['email'];
    $password = $credentials['password'];

    // Vérifier dans la table Artisan
    $artisan = Artisan::where('email', $email)->first();
    if ($artisan && Hash::check($password, $artisan->password)) {
        Auth::login($artisan); // Connecter l'utilisateur
        return redirect()->route('artisan.dashboard'); // Rediriger selon le rôle
    }

    // Vérifier dans la table Membre
    $membre = Membre::where('email', $email)->first();
    if ($membre && Hash::check($password, $membre->password)) {
        Auth::login($membre); // Connecter l'utilisateur
        return redirect()->route('membre.dashboard'); // Rediriger selon le rôle
    }

    // Échec de l'authentification
    return back()->withErrors([
        'email' => 'Les informations de connexion sont incorrectes.',
    ]);
}

    // Déconnexion de l'utilisateur
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('connexion');
    }
}
