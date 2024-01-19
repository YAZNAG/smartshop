<!-- Ressources/views/userhome.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Welcome to User Home, {{ Auth::user()->username }}!</h2>
        <!-- Ajoutez le contenu de la page d'accueil de l'utilisateur ici -->
    </div>
@endsection
