@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque utilisateur + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

        $local = new class () {
            public $id = 2;
            public $label = 'Test';
            public $price = 'Test';
            public $city= 'Test';
        };

        $locals[] = $local;
        $ulocals[] = $local;

    @endphp

    <h1>Liste des utilisateurs</h1>

    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Libellé</th>
                <th scope="col">Prix</th>
                <th scope="col">Ville</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($locals as $local)
                <tr>
                    <td>{{ $local->id }}</td>
                    <td>{{ $local->label }}</td>
                    <td>{{ $local->price }}</td>
                    <td>{{ $local->city }}</td>
                    <td><a href="" class="btn btn-primary">Modifier</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection