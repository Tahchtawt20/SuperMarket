@extends('layouts.respo')

@section('title','Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach ($prods as $p)
                        <div >
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Produit {{ $p->Nom_Prod }}</h3>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Statistiques') }}</div>

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
                                const labels = categories.map(category => category.categorie+' en %');
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
                                            backgroundColor: ['#026E81', '#00ABBD', '#FF9933','#0099DD','#FEBB5F' , '#A1C7E0'],
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
                
            </div>
        </div>
    @endsection
