@extends('layouts.respo')

@section('content')
<form action="{{ route('filter') }}" method="post">
    @csrf
    <label for="categories">Choisir une categorie : </label>
    <select name="categories" id="categories">
        <option disabled selected>--</option>
        <option value="produits laitiers">produits laitiers</option>
        <option value="huiles">les huiles</option>
        <option value="produits d'hygiene">produits d'hygiene</option>
    </select>
    <input type="submit" class="btn btn-primary" value="Filtrer les produits">
</form>
    
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
