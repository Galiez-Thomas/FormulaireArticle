@extends('layouts.app')
<style>
    .top-right {
        position: absolute;
        right: 220px;
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
                <div class="card-header">{{ __("Contactez-nous") }}</div>

                <div class="card-body">
                    <p class="card-text">Votre message est bien envoyé à l'administrateur, il vous répondra dans les plus bref délais</p>
                    <a href="/home" class="btn btn-primary btn-lg btn-block">
                        Retourner à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection