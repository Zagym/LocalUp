@extends('admin.layout.app')

@section('content')

    {{--
        Ajouter le local, mais aussi envoyer la liste des types.
    --}}

    @php

        $module = new class () {
            public $id = 2;
            public $label = 'Test';
            public $price = 'Test';
            public $description = 'Test';
        };

        $type = new class () {
            public $label = 'test';
        };

        $types[] = $type;
        $types[] = $type;

    @endphp

    <h1>Modification du type de local {{ $module->id }}</h1>

    @include('includes.error_form')

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="label">Libellé</label>
                <input type="text" class="form-control" name="label" value="{{ $module->label }}">
            </div>
            <div class="form-group col-md-6">
                <label for="price">Prix</label>
                <input type="text" class="form-control" name="price" value="{{ $module->price }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $module->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <select class="form-control" name="type">
                @foreach($types as $type)
                    <option>{{ $type->label }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="" class="btn btn-danger">Supprimer</a>
    </form>

@endsection