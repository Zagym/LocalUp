@extends('admin.layout.app')

@section('content')

    <h1>Liste des réductions</h1>

    <p class="d-block text-right">
        <a href="" class="btn btn-primary">Ajouter</a>
    </p>

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
        @foreach($reductions as $reduction)
            <tr>
                <td>{{ $reduction->id }}</td>
                <td>{{ $reduction->rates }}%</td>
                <td><a href="" class="btn btn-primary">Modifier</a></td>
                <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection