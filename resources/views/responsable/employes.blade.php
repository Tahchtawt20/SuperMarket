@extends('layouts.respo')

@section('content')
<h1>caissiers</h1>
    @foreach ($emp as $p)
        @if ($p->role=='caissier')
            nom : {{ $p->name }} <br>
            email : {{ $p->email }} <br>
            role : {{ $p->role }}
        @endif
    @endforeach
<h1>employes de stock</h1>
    @foreach ($emp as $p)
        @if ($p->role=='stock')
            nom : {{ $p->name }} <br>
            email : {{ $p->email }} <br>
            role : {{ $p->role }}
        @endif
    @endforeach
@endsection
