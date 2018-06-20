@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter le local, mais aussi envoyer la liste des types.
    --}}

    @php

        $localtype = new class () {
            public $id = 2;
            public $label = 'Test';
            public $description = 'Test';
        };

    @endphp

    <h1>Modification du type de local {{ $localtype->id }}</h1>

    @include('includes.error_form')

    <form>
        <div class="form-group">
            <label for="label">Libellé</label>
            <input type="text" class="form-control" name="label" value="{{ $localtype->label }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $localtype->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="" class="btn btn-danger">Supprimer</a>
    </form>

@endsection