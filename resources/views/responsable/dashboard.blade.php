@extends('layouts.respo')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Hello RESPONSABLE, You are logged in!') }}
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
                                            backgroundColor: ['red', 'blue', 'green', 'yellow', 'orange'],
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
