@extends('layout')
@section('content')
    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Modifier les infos du produit </h3>
                </div>
            </div>
            <hr class="my-1">
            <form action={{ route('stock.update' , $stock->id)}} method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                      <label for="">Product_name</label>
                      <input type="text" name="nom"  value={{$stock->Nom_Prod}} class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Quantity</label>
                      <input type="text" name="qte" value={{$stock->Quantité}} class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Unité</label>
                      <input type="text" name="unite" value={{$stock->Unité}} class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Date_liv </label>
                      <input type="date" name="livraison" value={{$stock->Date_liv}} class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Prix_achat </label>
                      <input type="text" name="prixa" value={{$stock->Prix_achat}} class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Prix_vente </label>
                      <input type="text" name="prixv" value={{$stock->Prix_vente}} class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Date_exp </label>
                      <input type="date" name="exp" value={{$stock->Date_exp}} class="form-control" >
                    </div>
                </div>
                <div class="my-2">
                    <button type="submit" class="btn btn-success w-100">Modifier</button>
                </div>
            </form>
        </div>
  </div