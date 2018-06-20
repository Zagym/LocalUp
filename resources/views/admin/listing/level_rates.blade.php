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
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($levelRates as $levelRate)
                <tr>
                    <td>{{ $levelRate->id }}</td>
                    <td>{{ $levelRate->rate }}</td>
                    <td><a href="" class="btn btn-primary">Modifier</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection