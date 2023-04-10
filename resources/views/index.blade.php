@extends('layout')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title" style="text-align: center" >Products</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom_Prod</th>
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
                            $ide=0
                        @endphp
                        @php
                        $ide+=1
                        @endphp
                        @foreach($stock as $item)
                        <tr>
                            <td>{{$ide}}</td>
                            <td><strong>{{ $item->Nom_Prod}}</strong></td>
                            <td><strong>{{ $item->Quantité}}</strong></td>
                            <td><strong>{{ $item->Unité}}</strong></td>
                            <td><strong>{{ $item->Date_liv}}</strong></td>
                            <td><strong>{{ $item->Prix_achat}}DH</strong></td>
                            <td><strong>{{ $item->Prix_vente}}DH</strong></td>
                            <td><strong>{{ $item->Date_exp}}</strong></td>

                            <td><a  href="{{ route('stock.show', $item->id)}}"><button class="btn btn-primary">Voir</button></a></td>
                            <td><a  href="{{ route('stock.edit', $item->id)}}"> <button class="btn btn-warning">Modifier</button></a></td>
                            <td>
                            <form action="{{route('stock.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ route('stock.create')}}"><button class="btn btn-success">Ajouter</button></a>

    {{-- on ajoute :
        </div>
            <footer class="card-footer">{{ $item->links() }}</footer>
        </div>
--}}
@endsection