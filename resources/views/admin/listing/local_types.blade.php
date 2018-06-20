@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque ration de niveau + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

        $localType = new class () {
            public $id = 2;
            public $label = 'Test';
        };

        $localTypes[] = $localType;
        $localTypes[] = $localType;

    @endphp

    <h1>Liste des types de locaux</h1>

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
            @foreach($localTypes as $localType)
                <tr>
                    <td>{{ $localType->id }}</td>
                    <td>{{ $localType->label }}</td>
                    <td><a href="" class="btn btn-primary">Modifier</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection