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
                <div class="card-header">{{ __("Ajout d'un article") }}</div>

                <div class="card-body">
                    <form action="{{ route('article.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="nameArticle" class="col-md-4 col-form-label text-md-right">{{ __("Intitulé de l'article") }}</label>
                            <div class="col-md-6">
                                <input id="nameArticle" type="text" class="form-control @error('nameArticle') is-invalid @enderror" name="nameArticle" value="{{ old('nameArticle') }}" required autocomplete="nameArticle" autofocus>
                                <br>
                                <select name="nameCategory" class="form-control">
                                    <option value="">choisir une catégorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->nomCat}}">{{$category->nomCat}}</option>
                                    @endforeach
                                </select>
                                @error('nameArticle')
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