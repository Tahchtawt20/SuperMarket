@extends('layouts.app')

@section('title', 'Dashboard')
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
                        <span class="d-flex form-group col-md-7">
                            <input type="text" id="productInput" placeholder="Entrez le nom d'un produit">
                            <input type="button" value="chercher" onclick="scrollToProduct()" class="btn text-white ms-1" style="background-color: #63bff0">
                        </span>
                        <br>
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Quantité vendue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $ide = 0;
                                @endphp
                                @foreach ($produit as $item)
                                    @php
                                        $ide += 1;
                                    @endphp
                                    <tr class="product" data-name="{{ $item->Nom_Prod }}">
                                        <th>{{ $ide }}</th>
                                        <td>{{ $item->Nom_Prod }}</td>
                                        <td>
                                            <form action="{{ route('update-value', ['id' => $item->id]) }}" method="POST"
                                                class="d-flex col-5">
                                                @csrf
                                                <input type="number" min="0" max="{{ $item->Quantité }}"
                                                    name='num' class="form-control">
                                                <button type="submit" class="btn btn-primary"><b>-</b></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <script>
                            function scrollToProduct() {
                                var productName = document.getElementById('productInput').value;
                                var productElement = document.querySelector('.product[data-name="' + productName + '"]');
                                if (productElement) {
                                    var rows = document.querySelectorAll('.product');
                                    rows.forEach(function(row) {
                                        row.classList.remove('text-white','bg-success','bg-opacity-50');
                                    });

                                    // Add active class to the target row
                                    productElement.classList.add('text-white','bg-success','bg-opacity-50');


                                    productElement.scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
