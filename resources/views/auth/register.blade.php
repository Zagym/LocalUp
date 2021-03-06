@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <h1 class="text-center">S'inscrire</h1>

            @include('includes.error_form')

            <form class="text-center my-5" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-row">
                    <div class="form-group col-lg-6{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <label for="firstname" class="control-label">Prénom <span>*</span></label>
                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="form-group col-lg-6{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <label for="lastname" class="control-label">Nom <span>*</span></label>
                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-7{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Adresse Email <span>*</span></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group col-lg-5{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="control-label">Téléphone</label>
                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-12{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="control-label">Adresse</label>
                        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-8{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city" class="control-label">Ville</label>
                        <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}">
                    </div>

                    <div class="form-group col-lg-4{{ $errors->has('zip') ? ' has-error' : '' }}">
                        <label for="zip" class="control-label">Code Postal</label>
                        <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Mot de passe <span>*</span></label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="control-label">Confirmation <span>*</span></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        S'inscrire
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
