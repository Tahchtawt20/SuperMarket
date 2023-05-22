@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
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
                      <label for="">Product_name</label>
                      <input type="text" name="nom" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Categorie</label>
                      <select name="categories" id="categories">
                        <option disabled selected>--</option>
                        <option value="produits laitiers">produits laitiers</option>
                        <option value="huiles">les huiles</option>
                        <option value="produits d'hygiene">produits d'hygiene</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Quantity</label>
                      <input type="text" name="qte" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Unité</label>
                      <input type="text" name="unite" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Date_liv </label>
                      <input type="date" name="livraison" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Prix_achat </label>
                      <input type="text" name="prixa" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Prix_vente </label>
                      <input type="text" name="prixv" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Date_exp </label>
                      <input type="date" name="exp" class="form-control" >
                    </div>
                </div>
                
                <div class="my-2">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </div>
            </form>
        </div>
  </div>
@endsection

