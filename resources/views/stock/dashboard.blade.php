@extends('layouts.stock')
@section('title','Dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <header class="card-header">
                <h4 class="card-header-title" style="text-align: center">Produits</h4>
            </header>
            <div class="card-content">
                <div class="content p-4">
                    <form action="{{ route('search') }}" method="post" class="d-flex form-group col-md-5">
                        @csrf
                        <label for="categories" class="col-4">Chercher par categorie : </label>
                        <select required name="categories" class="form-select me-1">
                            <option disabled selected>--</option>
                            <option value="Produits laitiers">Produits laitiers</option>
                            <option value="Viandes et volailles">Viandes et volailles</option>
                            <option value="Boulangerie et patisserie">Boulangerie et patisserie</option>
                            <option value="Poissons et fruit de mer">Poissons et fruit de mer</option>
                            <option value="Surgelés">Surgelés</option>
                            <option value="Épicerie">Épicerie</option>
                            <option value="Boissons">Boissons</option>
                            <option value="Produits d'hygiène">Produits d'hygiène</option>
                            <option value="Entretien ménager">Entretien ménager</option>
                            <option value="Alimentation pour animaux">Alimentation pour animaux</option>
                            <option value="Bébés et enfants">Bébés et enfants</option>
                            </select>
                        <input type="submit" class="btn btn-primary" value="chercher">
                    </form>
                    <br>
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Catégorie</th>
                                <th>Quantité</th>
                                <th>Unité</th>
                                <th>Date livraison</th>
                                <th>Prix achat</th>
                                <th>Prix vente</th>
                                <th>Date expiration</th>
                                <th></th>
                                <th></th>
                                <th></th>

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
                                    <th>{{ $ide }}</th>
                                    <td>{{ $item->Nom_Prod }}</td>
                                    <td>{{ $item->categorie }}</td>
                                    <td>{{ $item->Quantité }}</td>
                                    <td>{{ $item->Unité }}</td>
                                    <td>{{ $item->Date_liv }}</td>
                                    <td>{{ $item->Prix_achat }} DH</td>
                                    <td>{{ $item->Prix_vente }} DH</td>
                                    <td>{{ $item->Date_exp }}</td>
                                    <td><a href="{{ route('show', $item->id) }}"><button
                                                class="btn btn-primary">Voir</button></a></td>
                                    <td><a href="{{ route('edit', $item->id) }}"> <button
                                                class="btn text-white" style="background-color: #63bff0">Modifier</button></a></td>
                                    <td>
                                        <form action="{{ route('destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn text-white" style="background-color: rgb(246,147,28)" type="submit"
                                                onclick="return confirm('{{ 'Etes vous sur de vouloir supprimer le produit?' }}')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <footer>{{ $stock->links() }}</footer>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
