@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque modules + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

        $module = new class () {
            public $id = 2;
            public $label = 'Test';
            public $price = 'Test';
            public $type = 'Test';
        };

        $modules[] = $module;
        $modules[] = $module;

    @endphp

    <h1>Liste des modules</h1>

    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Libellé</th>
                <th scope="col">Prix</th>
                <th scope="col">Type</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($modules as $module)
                <tr>
                    <td>{{ $module->id }}</td>
                    <td>{{ $module->label }}</td>
                    <td>{{ $module->price }}</td>
                    <td>{{ $module->type }}</td>
                    <td><a href="" class="btn btn-primary">Modifier</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection