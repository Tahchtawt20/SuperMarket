@extends('layouts.stock')
@section('title', 'Ajouter un produit')
@section('content')
    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-3 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Ajouter un produit </h3>
                </div>
            </div>
            <hr class="my-1">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="">Nom du prduit</label>
                        <input required type="text" name="nom" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Catégorie</label>
                        <select required type="text" name="categories" class="form-select">
                            <option value="Produits laitiers">Produits laitiers</option>
                            <option value="Viandes et volailles">Viandes et volailles</option>
                            <option value="Boulangerie et patisserie">Boulangerie et patisserie</option>
                            <option value="Poissons et fruit de mer">Poissons et fruit de mer</option>
                            <option value="Fruits et légumes">Fruits et légumes</option>
                            <option value="Surgelés">Surgelés</option>
                            <option value="Épicerie">Épicerie</option>
                            <option value="Les céréales et les pattes">Les céréales et les pattes</option>
                            <option value="Boissons">Boissons</option>
                            <option value="Produits d'hygiène">Produits d'hygiène</option>
                            <option value="Entretien ménager">Entretien ménager</option>
                            <option value="Alimentation pour animaux">Alimentation pour animaux</option>
                            <option value="Bébés et enfants">Bébés et enfants</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Quantité</label>
                        <input required type="text" name="qte" class="form-control">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Unité</label>
                        <select required type="text" name="unite" class="form-select">
                            <option value="kg">Kilogramme (kg)</option>
                            <option value="g">Gramme (g)</option>
                            <option value="L">Litre (L)</option>
                            <option value="mL">Millilitre (mL)</option>
                            <option value="pc">Pièce (pc)</option>
                            <option value="pkg">Paquet (pkg)</option>
                            <option value="btl">Bouteille (btl)</option>
                            <option value="sach">Sachet (sach)</option>
                            <option value="box">Boîte (box)</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Date livraison </label>
                        <input required type="date" name="livraison" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Prix achat </label>
                        <input required type="text" name="prixa" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Prix vente </label>
                        <input required type="text" name="prixv" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Date expiration </label>
                        <input required type="date" name="exp" class="form-control">
                    </div>
                </div>

                <div class="my-2  d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary col-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
