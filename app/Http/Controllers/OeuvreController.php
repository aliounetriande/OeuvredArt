<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Oeuvre;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OeuvreController extends Controller
{
    public function create()
    {
        return view('oeuvre.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'image' => 'required|image|max:2048', // Limite la taille de l'image à 2MB
        ]);

        // Créer une nouvelle œuvre
        $oeuvre = Oeuvre::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'artisan_id' => Auth::id(),
        ]);

        // Gérer l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('oeuvres', 'public');
            
            Image::create([
                'oeuvre_id' => $oeuvre->id,
                'path' => $imagePath,
            ]);
        }

        return redirect()->route('explorez')->with('success', 'Oeuvre créée avec succès');
    }

    public function explore()
    {
        // Récupérer les œuvres publiées par les artisans
        $oeuvres = Oeuvre::where('user_id', Auth::id())->with('images')->get();

        // Retourner la vue avec les œuvres
        return view('artisan.explorez', compact('oeuvres'));
    }

}
