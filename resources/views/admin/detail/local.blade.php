@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter le local, mais aussi envoyer la liste des types.
    --}}

    @php

        $local = new class () {
            public $id = 2;
            public $label = 'Test';
            public $description = 'Test';
            public $address = 'Test';
            public $city = 'Test';
            public $floor = 'Test';
            public $door = 'Test';
            public $capacity = 'Test';
            public $price = 'test';
            public $type = 'test';
            public $image_url = 'test';
        };

        $type = new class () {
            public $label = 'test';
        };

        $types[] = $type;
        $types[] = $type;

    @endphp

    <h1>Modification du local {{ $local->id }}</h1>

    @include('includes.error_form')

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="label">Libellé</label>
                <input type="text" class="form-control" name="label" value="{{ $local->label }}">
            </div>
            <div class="form-group col-md-3">
                <label for="capacity">Capacité</label>
                <input type="text" class="form-control" name="capacity" value="{{ $local->capacity }}">
            </div>
            <div class="form-group col-md-3">
                <label for="capacity">Prix</label>
                <input type="text" class="form-control" name="price" value="{{ $local->price }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $local->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" name="address" value="{{ $local->address }}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">Ville</label>
                <input type="text" class="form-control" name="city" value="{{ $local->city }}">
            </div>
            <div class="form-group col-md-3">
                <label for="floor">Etage</label>
                <input type="text" class="form-control" name="floor" value="{{ $local->floor }}">
            </div>
            <div class="form-group col-md-3">
                <label for="door">Porte</label>
                <input type="text" class="form-control" name="door" value="{{ $local->door }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type">type</label>
                <select class="form-control" name="type">
                    @foreach($types as $type)
                        <option>{{ $type->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="file">Image du local</label>
                <input type="file" class="form-control-file" name="file">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="" class="btn btn-danger">Supprimer</a>
    </form>

@endsection