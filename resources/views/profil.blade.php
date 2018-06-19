@extends('layouts.app')

@section('content')

    {{--
        Envoyer l'user connecté et supprimer $user et modifier le formulaire.
        Bien mettre des messages flash sur les erreurs lors de la validation du formaulaire en back.
        Changer la route du formulaire.
    --}}

    @php
        $user = array(
            'firstname' => 'Jean',
            'lastname' => 'Delarue',
            'email' => 'Jean@delarue.com',
            'phone' => '0606060606',
            'address' => '3 rue de la rue',
            'city' => 'Lyon',
            'zip' => '69000',
        );
    @endphp

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">

                <h1 class="text-center">Mon profil</h1>

                <form class="text-center my-5" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-row">
                        <div class="form-group col-lg-6{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="control-label">Prénom <span>*</span></label>

                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $user['firstname'] }}" required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="control-label">Nom <span>*</span></label>

                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $user['lastname'] }}" required autofocus>

                            @if ($errors->has('lastname'))
                                <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-7{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Adresse Email <span>*</span></label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ $user['email'] }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-5{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="control-label">Téléphone</label>

                            <input id="phone" type="text" class="form-control" name="phone" value="{{ $user['phone'] }}">

                            @if ($errors->has('phone'))
                                <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-12{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="control-label">Adresse</label>

                            <input id="address" type="text" class="form-control" name="address" value="{{ $user['address'] }}">

                            @if ($errors->has('address'))
                                <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-8{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="control-label">Ville</label>

                            <input id="city" type="text" class="form-control" name="city" value="{{ $user['city'] }}">

                            @if ($errors->has('city'))
                                <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-4{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="control-label">Code Postal</label>

                            <input id="zip" type="text" class="form-control" name="zip" value="{{ $user['zip'] }}">

                            @if ($errors->has('zip'))
                                <span class="help-block">
                            <strong>{{ $errors->first('zip') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Nouveau mot de passe <span>*</span></label>

                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirmation <span>*</span></label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Modifier mon profil
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection