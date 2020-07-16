@extends('layouts.app')
<style>
    .top-right {
        position: absolute;
        right: 300px;
        top: 18px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .card-text {
        font-weight: bold;
        font-size: 16px;
    }
</style>
@section('content')
<div class="container">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/about') }}">À Propos</a>
        <a href="{{ url('/contact') }}">Contact</a>
        @endauth
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('À propos') }}</div>
                <div class="card-body">
                    <p class="card-text"> Première application réalisée en PHP/Laravel qui permet aux utilisateurs de gérer l'ajout de produit.<br>
                        Une fois connecter l'utilisateur a accés à 2 formulaires pour gérer ses produits.<br>
                        Grâce à un formulaire l'utilisateur peut ajouter une catégorie de produit.<br>
                        Grâce à un formulaire l'utilisateur pourra ajouter des articles et sélectionner une catégorie qui lui correspond.<br>
                        Si il n'est pas connecté, il n'a pas accès aux formulaires.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection