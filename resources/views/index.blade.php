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
                            <th>Product_name</th>
                            <th>quantity</th>
                            <th>price</th>
                            
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
                            <td><strong>{{ $item->Product_name}}</strong></td>
                            <td><strong>{{ $item->quantity}}</strong></td>
                            <td><strong>{{ $item->price}}</strong></td>
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