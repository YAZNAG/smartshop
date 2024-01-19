<!-- Ressources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Welcome to Dashboard, {{ Auth::user()->username }}!</h2>
        <!-- Ajoutez le contenu du tableau de bord ici -->
    </div>
@endsection
