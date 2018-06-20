@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque ville + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

        $city = new class () {
            public $id = 2;
            public $label = 'Test';
        };

        $cities[] = $city;
        $cities[] = $city;

    @endphp

    <h1>Liste des villes</h1>

    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Libellé</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->label }}</td>
                    <td><a href="" class="btn btn-primary">Modifier</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection