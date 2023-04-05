@extends('layout')
@section('content')
    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Creer Un Etudiant</h3>
                </div>
            </div>
            <hr class="my-1">
            <form action="{{ route('stock.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                      <label for="">Nom</label>
                      <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom ..">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Prenom</label>
                      <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prenom ..">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Email </label>
                      <input type="email" name="email" class="form-control" placeholder="Entrez votre email ..">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Telephone</label>
                      <input type="text" name="phone" class="form-control" placeholder="Entrez votre telephone..">
                    </div>
                </div>
                <div class="my-2">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </div>
            </form>
        </div>
  </div>
@endsection

