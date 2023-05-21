@extends('layouts.respo')

@section('title', 'Fournisseurs')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h2>Liste des fournisseurs</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-primary">
                                <th></th>
                                <th>Nom du fournisseur</th>
                                <th>Produits fournis</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $ide = 0;
                            @endphp
                            @foreach ($fou as $item)
                                @php
                                    $ide += 1;
                                @endphp
                                <tr>
                                    <th>{{ $ide }}</th>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->produits }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->tel }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
