@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque utilisateur + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    <h1>Liste des utilisateurs</h1>

    <p class="d-block text-right">
        <a href="" class="btn btn-primary">Ajouter</a>
    </p>

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
<<<<<<< HEAD
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                <td><a href="{{ route('admin_user', ['id' => $user]) }}" class="btn btn-primary">Modifier</a></td>
                <td><a href="{{ route('admin_user_delete', ['id' => $user]) }}" class="btn btn-danger">Delete</a></td>
                
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
=======
        @endforeach
        </tbody>
    </table>
>>>>>>> 0765bced473b1f5cb74e9d71768b3216858fedba

@endsection