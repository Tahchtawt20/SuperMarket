@extends('layouts.layout')
@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title" style="text-align: center">Produits</p>
    </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom_Prod</th>
                            <th>Categorie</th>
                            <th>Quantité</th>
                            <th>Unité</th>
                            <th>Date_liv</th>
                            <th>Prix_achat</th>
                            <th>Prix_vente</th>
                            <th>Date_exp</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 0;
                        @endphp
                        @foreach ($stock as $item)
                        @php
                            $ide += 1;
                        @endphp
                        <tr>
                            <td>{{ $ide }}</td>
                            <td><strong>{{ $item->Nom_Prod }}</strong></td>
                            <td><strong>{{ $item->categorie }}</strong></td>
                            <td><strong>{{ $item->Quantité }}</strong></td>
                            <td><strong>{{ $item->Unité }}</strong></td>
                            <td><strong>{{ $item->Date_liv }}</strong></td>
                            <td><strong>{{ $item->Prix_achat }}DH</strong></td>
                            <td><strong>{{ $item->Prix_vente }}DH</strong></td>
                            <td><strong>{{ $item->Date_exp }}</strong></td>
                            <td><a href="{{ route('show', $item->id) }}"><button
                                            class="btn btn-primary">Voir</button></a></td>
                            <td><a href="{{ route('edit', $item->id) }}"> <button
                                            class="btn btn-warning">Modifier</button></a></td>
                            <td>
                                <form action="{{ route('destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button class="btn btn-danger" type="submit"
                                            onclick="return confirm('{{ 'Etes vous sur de vouloir supprimer le produit?' }}')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
    <a href="{{ route('create') }}"><button class="btn btn-success">Ajouter</button></a>
    <a href="{{ route('logout') }}" class="btn btn-primary my-3">logout</a>
    <form action="{{ route('search') }}" method="post">
        @csrf
        <label for="categories">Chercher  par  categorie : </label>
        <select name="categories" id="categories">
            <option disabled selected>--</option>
            <option value="produits laitiers">produits laitiers</option>
            <option value="huiles">les huiles</option>
            <option value="produits d'hygiene">produits d'hygiene</option>
        </select>
        <input type="submit" class="btn btn-primary" value="chercher">
    </form>
    {{-- on ajoute :
        </div>
            <footer class="card-footer">{{ $item->links() }}</footer>
        </div>
--}}
@endsection
