@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-lg-6">

                <h1 class="text-center">Mon profil</h1>

                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form class="text-center my-5" method="POST" action="{{ route('update') }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="firstname" class="control-label">Nom <span>*</span></label>

                            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' has-error' : '' }}" name="firstname" value="{{ $currentUser['firstname'] }}" required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="lastname" class="control-label">Prénom <span>*</span></label>

                            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' has-error' : '' }}" name="lastname" value="{{ $currentUser['lastname'] }}" required autofocus>

                            @if ($errors->has('lastname'))
                                <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="phone" class="control-label">Téléphone</label>

                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' has-error' : '' }}" name="phone" value="{{ $currentUser['phone'] }}">

                            @if ($errors->has('phone'))
                                <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="address" class="control-label">Adresse</label>

                            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' has-error' : '' }}" name="address" value="{{ $currentUser['address'] }}">

                            @if ($errors->has('address'))
                                <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-8">
                            <label for="city" class="control-label">Ville</label>

                            <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' has-error' : '' }}" name="city" value="{{ $currentUser['city'] }}">

                            @if ($errors->has('city'))
                                <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="zip" class="control-label">Code Postal</label>

                            <input id="zip" type="text" class="form-control{{ $errors->has('zip') ? ' has-error' : '' }}" name="zip" value="{{ $currentUser['zip'] }}">

                            @if ($errors->has('zip'))
                                <span class="help-block">
                            <strong>{{ $errors->first('zip') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Nouveau mot de passe</label>

                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong class="alert">{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirmation</label>

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