@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter le local, mais aussi envoyer la liste des types.
    --}}

    @php

        $levelRate = new class () {
            public $id = 2;
            public $rate = '2';
            public $price = 'Test';
            public $description = 'Test';
        };

    @endphp

    <h1>Modification du ratio de niveau {{ $levelRate->id }}</h1>

    @include('includes.error_form')

    <form>
        <div class="form-group">
            <label for="rate">Rate</label>
            <input type="number" class="form-control" name="rate" value="{{ $levelRate->rate }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="" class="btn btn-danger">Supprimer</a>
    </form>

@endsection