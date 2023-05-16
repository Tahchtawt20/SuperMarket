@extends('layouts.respo')

@section('content')
    @foreach ($emp as $p)
        <div >
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employes {{ $p->name.' ::: '.$p->role }}</h3>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
