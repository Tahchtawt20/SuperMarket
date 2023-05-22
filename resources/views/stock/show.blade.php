@extends('layouts.stock')
@section('title', 'Afficher les infos d\'un produit')

@section('content')
    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-4 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Afficher les infos du produit </h3>
                </div>
            </div>
            <hr class="my-1">

            <div class="row">
                <div class="col">
                    <label for="">Nom du produit</label>
                    <input type="text" name="nom" value="{{ $stock->Nom_Prod }}" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Catégorie</label>
                    <input type="text" name="categories" value="{{ $stock->categorie }}" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Quantité</label>
                    <input type="text" name="qte" value="{{ $stock->Quantité }}" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Unité</label>
                    <input type="text" name="unite" value="{{ $stock->Unité }}" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Date livraison </label>
                    <input type="date" name="livraison" value="{{ $stock->Date_liv }}" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Prix achat </label>
                    <input type="text" name="prixa" value="{{ $stock->Prix_achat }} DH" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Prix vente </label>
                    <input type="text" name="prixv" value="{{ $stock->Prix_vente }} DH" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Date expiration </label>
                    <input type="date" name="exp" value="{{ $stock->Date_exp }}" class="form-control"
                        @disabled(true)>
                </div>
            </div>
            <div class="my-2 d-flex justify-content-center">
                <a href="{{ route('index') }}" class="btn btn-primary col-2">Retour</a>
            </div>
        </div>

    </div>
@endsection
