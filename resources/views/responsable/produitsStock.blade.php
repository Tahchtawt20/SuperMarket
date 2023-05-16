@extends('layouts.respo')

@section('content')
    @foreach ($prods as $p)
        <div >
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produit {{ $p->Nom_Prod }}</h3>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
