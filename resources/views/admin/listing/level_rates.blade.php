@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque ration de niveau + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

        $levelRate = new class () {
            public $id = 2;
            public $rate = 'Test';
        };

        $levelRates[] = $levelRate;
        $levelRates[] = $levelRate;

    @endphp

    <h1>Liste des ratio de niveaux</h1>

    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Rate</th>
                <th scope="col">Modifier</th>
            </tr>
            </thead>
            <tbody>
            @foreach($levelRates as $levelRate)
                <tr>
                    <td>{{ $levelRate->id }}</td>
                    <td>{{ $levelRate->rates }}</td>
                    <td><a href="{{route('admin_rate_level', ['id' => $levelRate])}}" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection