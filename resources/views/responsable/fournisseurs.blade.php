@extends('layouts.respo')

@section('content')
    @foreach ($fou as $p)
        <div >
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fournisseur {{ $p->nom }}</h3>
                        <h3 class="card-title">Fournisseur {{ $p->email }}</h3>
                        <h3 class="card-title">Fournisseur {{ $p->tel }}</h3>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
