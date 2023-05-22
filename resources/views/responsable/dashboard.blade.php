@extends('layouts.respo')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Statistiques des categories') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div style='height:400px'>
                                <canvas id="pieChart"></canvas>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Retrieve the necessary data from your Laravel backend
                                    const categories = {!! json_encode($categories) !!};

                                    // Prepare the data for the chart
                                    const labels = categories.map(category => category.categorie);
                                    const values = categories.map(category => category.product_count);
                                    const totalProducts = values.reduce((sum, value) => sum + value, 0);
                                    const percentages = values.map(value => ((value / totalProducts) * 100).toFixed(2));

                                    // Render the pie chart
                                    const pieChart = new Chart(document.getElementById('pieChart'), {
                                        type: 'pie',
                                        data: {
                                            labels: labels,
                                            datasets: [{
                                                data: percentages,
                                                backgroundColor: ["#F6931C", "#f7a656", "#fabc80", "#fcd19a", "#e0f9ff",
                                                    "#ade5ff ", "#7ad1ff", "#1e96d1",
                                                    "#1984c5",'#886868'
                                                ],
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('filter') }}" method="post" class="d-flex form-group col-md-6">
                                @csrf
                                <label for="categories" class="col-5">Choisir une categorie : </label>
                                <select name="categories" id="categories" class="form-select me-1">
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
                                <input type="submit" class="btn btn-primary ms-1" value="Chercher">
                            </form>
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
                                    @foreach ($prods as $item)
                                        @php
                                            $ide += 1;
                                        @endphp
                                        <tr class="{{ $item->Quantité < 10 ? 'text-danger fw-bold' : '' }}">
                                            <th>{{ $ide }}</th>
                                            <td>{{ $item->Nom_Prod }}</td>
                                            <td>{{ $item->categorie }}</td>
                                            <td>{{ $item->Quantité }}</td>
                                            <td>{{ $item->Unité }}</td>
                                            <td>{{ $item->Prix_achat }}DH</td>
                                            <td>{{ $item->Prix_vente }}DH</td>
                                            <td>{{ $item->Date_exp }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
