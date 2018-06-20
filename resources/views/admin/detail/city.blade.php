@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter le local, mais aussi envoyer la liste des types.
    --}}

    @php

        $city = new class () {
            public $id = 2;
            public $label = 'Test';
            public $active = true;
        };

    @endphp

    <h1>Modification du type de local {{ $city->id }}</h1>

    @include('includes.error_form')

    <form>
        <div class="form-group">
            <label for="label">Libellé</label>
            <input type="text" class="form-control" name="label" value="{{ $city->label }}">
        </div>
        <div class="form-row">
            <div class="form-check form-check-inline col-md-2">
                <input class="form-check-input" type="checkbox" name="admin" {{ $city->active ? 'checked' : '' }}>
                <label class="form-check-label" for="admin">
                    Actif
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>

@endsection