@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque ville + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    <h1>Liste des villes</h1>

    <p class="d-block text-right">
        <a href="" class="btn btn-primary">Ajouter</a>
    </p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Libellé</th>
            <th scope="col">Actif</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->label }}</td>
                <td><button class="btn btn-primary" disabled>{{ $city->active ? 'Oui' : 'Non' }}</button></td>
                <td><a href="{{ route('admin_city', ['city' => $city]) }}" class="btn btn-primary">Modifier</a></td>
                <td><a href="{{ route('admin_city_destroy', ['city' => $city]) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection