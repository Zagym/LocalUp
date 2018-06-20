@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque utilisateur + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

    $user = new class () {
        public $id = 2;
        public $lastname = 'Test';
        public $firstname = 'Test';
        public $email = 'Test';
    };

    $users[] = $user;
    $users[] = $user;

    @endphp

    <h1>Liste des utilisateurs</h1>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse Email</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="" class="btn btn-primary">Modifier</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection