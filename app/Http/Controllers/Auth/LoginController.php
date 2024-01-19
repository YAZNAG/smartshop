<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;



use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
   

   
    // Affichage du formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Logique d'authentification personnalisée
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->username === 'YAZNAG') {
                return redirect()->intended('/dashboard');
            }

            return redirect()->intended('/userhome');
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    // Affichage du formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Traitement de l'inscription
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('login');
    }

    // Déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Méthodes pour Socialite (Facebook, Twitter, Google, etc.)
    // ...

    // Méthode pour afficher le formulaire de login alternatif (login1)
    public function login1()
    {
        return view('auth.login1');
    }
}
