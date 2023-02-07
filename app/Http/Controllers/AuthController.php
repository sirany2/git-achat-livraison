<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // création de compte
    public function register(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'sexe' => 'required',
            'numero' => 'required',
            'email' => 'required',
            'commune' => 'required',
            'password_confirmation' => '',
        ]);
        User::create([
            'nom' => $request->nom,
            'sexe' => $request->sexe,
            'numero' => $request->numero,
            'email' => $request->email,
            'commune' => $request->commune,
            'password' => Hash::make($request->password),
        ]);
        if(!Auth::attempt(['numero' => $request->numero, 'password' => $request->password])){
            return redirect()->back()->with('message', 'Numéro ou mot de passe incorrect');
        }
        return redirect('dashboard');
    }

    // connexion de l'utilisateur
    public function login(Request $request)
    {
        $this->validate($request, [
            'numero' => 'required',
            'password' => 'required',
        ]);
        if(!Auth::attempt(['numero' => $request->numero, 'password' => $request->password])){
            return redirect()->back()->with('message', 'Numéro ou mot de passe incorrect');
        }
        return redirect('dashboard');
    }

    // deconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect('/connexion');
    }
}
