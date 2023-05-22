@extends('layouts.respo')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2>Résultats pour : {{ $categorie }}</h2>
                            <br>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-primary">
                                        <th></th>
                                        <th>Nom du produit</th>
                                        <th>Categorie</th>
                                        <th>Quantité</th>
                                        <th>Unité</th>
                                        <th>Prix achat</th>
                                        <th>Prix vente</th>
                                        <th>Date expiration</th>

                                    </tr>
                                </thead>
                                <tbody class="table table-striped">
                                    @php
                                        $ide = 0;
                                    @endphp
                                    @forelse ($prods as $item)
                                        @php
                                            $ide += 1;
                                        @endphp
                                        <tr>
                                            <th>{{ $ide }}</th>
                                            <td>{{ $item->Nom_Prod }}</td>
                                            <td>{{ $item->categorie }}</td>
                                            <td class="{{ $item->Quantité < 10 ? 'text-danger' : '' }}">
                                                {{ $item->Quantité }}</td>
                                            <td>{{ $item->Unité }}</td>
                                            <td>{{ $item->Prix_achat }}DH</td>
                                            <td>{{ $item->Prix_vente }}DH</td>
                                            <td>{{ $item->Date_exp }}</td>
                                        </tr>
                                    @empty
                                        <p class="text-danger">Pas de produits dans cette catégorie.</p>
                                    @endforelse
                                </tbody>
                            </table>
                            <a href="{{ route('respoDash') }}" class="btn btn-primary">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
