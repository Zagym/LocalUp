@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter le local, mais aussi envoyer la liste des types.
    --}}

    @php

        $reduction = new class () {
            public $id = 2;
            public $rate = '2';
            public $price = 'Test';
            public $description = 'Test';
        };

    @endphp

    <h1>Modification de la reduction {{ $reduction->id }}</h1>

    <form>
        <div class="form-group">
            <label for="rate">Rate</label>
            <input type="number" class="form-control" name="rate" value="{{ $reduction->rate }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="" class="btn btn-danger">Supprimer</a>
    </form>

@endsection