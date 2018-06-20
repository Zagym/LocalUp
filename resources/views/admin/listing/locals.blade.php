@extends('admin.layout.app')

@section('content')

    <h1>Liste des locaux</h1>

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
                    <td><a href="{{route('admin_local', ['id' => $local->id]) }}" class="btn btn-primary">Modifier</a></td>
                    <td><a href="{{route('admin_local_delete', ['id' => $local->id]) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
