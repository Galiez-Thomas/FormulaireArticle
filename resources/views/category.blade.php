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
                <div class="card-header">{{ __("Ajout d'une categorie") }}</div>

                <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="nameCategory" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la categorie') }}</label>
                        <div class="col-md-6">
                            <input id="nameCategory" type="text" class="form-control @error('nameCategory') is-invalid @enderror" name="nameCategory" value="{{ old('nameCategory') }}" required autocomplete="nameCategory" autofocus>

                            @error('nameCategory')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Ajouter
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection