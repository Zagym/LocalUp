@extends('layouts.app')

@section('content')

    {{--
        Envoyer les quatres derniéres offres.
    --}}

    <header id="header-home" class="d-flex align-items-end justify-content-end py-5 px-3">
        <h1 class="text-center text-lg-right my-5 ml-auto mr-auto mr-sm-5 text-uppercase">Montez d'un level en louant<br class="d-none d-xl-block" /> un espace de travail à votre image</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h2 class="text-center">Nos dernières offres de locations</h2>
            </div>
        </div>

        <div class="row justify-content-center" id="offers_list">
            @for($i = 1; $i < 5; $i ++)
                <div class="col-lg-3 mb-4 mix {{ $i%2 == 0 ? 'Lyon Truc-de-merde' : 'Marseille' }}">
                    <div class="offer">
                        <div class="img-offer">
                            <img src="https://imgplaceholder.com/500x300" class="img-fluid" alt="">
                        </div>
                        <div class="description-offer text-center p-4 bg-light">
                            <h2 class="mt-0">Bureau Lyon</h2>

                            <a href="" class="btn btn-primary">En savoir +</a>
                        </div>
                    </div>
                </div>
            @endfor
            
            <div class="col-lg-12 text-center my-3">
                <a href="{{ route('locals') }}" class="btn btn-primary">Accéder à toutes les offres</a>
            </div>
        </div>
    </div>

@endsection