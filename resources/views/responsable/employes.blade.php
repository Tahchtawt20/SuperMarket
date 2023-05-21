@extends('layouts.respo')

@section('title', 'Employés')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h2>Liste des employés</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-primary">
                                <th></th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $ide = 0;
                            @endphp
                            @foreach ($emp as $item)
                                @php
                                    $ide += 1;
                                @endphp
                                <tr>
                                    <th>{{ $ide }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
