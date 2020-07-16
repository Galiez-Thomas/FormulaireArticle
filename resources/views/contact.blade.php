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
                <div class="card-header">{{ __('Contact') }}</div>
                <div class="card-body">
                    <form action="{{ route('contact.create') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __("Contactez-nous !") }}</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
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