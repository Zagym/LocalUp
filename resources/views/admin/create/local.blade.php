@extends('admin.layout.app')

@section('content')


    <h1>Modification d'un local</h1>

    <form  method="POST" action="{{ route('admin_local_store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="label">Libellé</label>
                <input type="text" class="form-control" name="label" value="{{ old('label') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="capacity">Capacité</label>
                <input type="text" class="form-control" name="capacity" value="{{ old('capacity') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="capacity">Prix</label>
                <input type="text" class="form-control" name="price" value="{{ old('price') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="zip">Code postal</label>
                <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">Ville</label>
                <select class="form-control" name="city_id">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{ $city->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="floor">Etage</label>
                <input type="text" class="form-control" name="floor" value="{{ old('floor') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="door">Porte</label>
                <input type="text" class="form-control" name="door" value="{{ old('door') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type_id">type</label>
                <select class="form-control" name="type_id">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{ $type->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="file">Image du local</label>
                <input type="file" class="form-control-file" name="image_url">

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>

@endsection
