@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter chaque ration de niveau + les liens modification/suppresion
        Ne pas oublier de supprimer la class user pr test, et ce commentaire.
    --}}

    @php

        $user = new class () {
            public $id = 2;
            public $lastname = 'Test';
            public $firstname = 'Test';
            public $email = 'Test';
            public $address = 'Test';
            public $city = 'Test';
            public $zip = 'Test';
            public $phone = 'Test';
            public $admin = true;
        };

    @endphp

    <h1>Modification de l'utilisateur {{ $user->id }}</h1>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
            </div>
            <div class="form-group col-md-6">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Téléphone</label>
                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
            </div>
        </div>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" name="address" value="{{ $user->address }}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">Ville</label>
                <input type="text" class="form-control" name="city" value="{{ $user->city }}">
            </div>
            <div class="form-group col-md-6">
                <label for="zip">Code postal</label>
                <input type="text" class="form-control" name="zip" value="{{ $user->zip }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-check form-check-inline col-md-2">
                <label class="form-check-label" for="admin">
                    Administrateur
                </label>
                <input class="form-check-input" type="checkbox" name="admin" {{ $user->admin ? 'checked' : '' }}>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modification</button>
    </form>

@endsection