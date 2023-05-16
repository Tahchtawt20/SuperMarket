@extends('layouts.app')

@section('title', 'gestion de stock ')

@section('content')
    @if (Route::has('login'))
        <div>
            <div class="nav">
                @auth
                    @if (auth()->user()->role == 'responsable')
                        <a href="{{  url('/responsable_dashboard')}}" class="btn btn-primary"> Acceuil </a>
                    @elseif (auth()->user()->role == 'stock')
                    <a href="{{ url('/stock_dashboard') }}" class="btn btn-primary"> Acceuil </a>
                    @else
                    <a href="{{ url('/caissier_dashboard') }}" class="btn btn-primary"> Acceuil </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary my-3"> Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"class="btn btn-primary">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    @endif
    </div>
@endsection
