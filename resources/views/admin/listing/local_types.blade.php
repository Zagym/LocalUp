@extends('admin.layout.app')

@section('content')

    <h1>Liste des types de locaux</h1>

    <p class="d-block text-right">
        <a href="" class="btn btn-primary">Ajouter</a>
    </p>

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
                <td><a href="{{ route('admin_local_type', ['localType' => $localType]) }}" class="btn btn-primary">Modifier</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection