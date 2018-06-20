@extends('layouts.app')

@section('content')


    <header id="header-home" class="d-flex align-items-end justify-content-end py-5 px-3">
        <h1 class="text-center text-lg-right my-5 ml-auto mr-auto mr-sm-5 text-uppercase">
            Montez d'un level en louant<br class="d-none d-xl-block" /> un espace de travail à votre image
            <br/>
            <a href="/locations" class="btn btn-primary btn-lg px-3 py-2">Louer un bureau maintenant</a>
        </h1>
    </header>

    <div id="component-homepage" class="pb-5">

        <div class="container">
            <div class="row">
                <div class="col-12 my-4">
                    <h2 class="text-center my-4">Nos dernières offres de locations</h2>
                </div>
            </div>

            <div class="row justify-content-center" id="offers_list">
                @foreach($locals as $local)
                    <div class="col-lg-3 mb-4">
                        <div class="offer">
                            <div class="img-offer">
                                @if($local->image_url)
                                    <img src="{{ asset('storage').'/'.$local->image_url }}" class="img-fluid" alt="">
                                @else
                                    <img src="https://imgplaceholder.com/500x300" class="img-fluid" alt="">
                                @endif
                            </div>
                            <div class="description-offer text-center p-4 bg-light">
                                <h3 class="mt-0">
                                    <span class="text-nowrap">{{ $local->category->label }}</span>,<br/>
                                    {{ $local->city->label }}
                                </h3>
                                <a href="{{ route('local', ['id' => $local]) }}" class="btn btn-primary">En savoir +</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12 text-center my-3">
                    <a href="{{ route('locals') }}" class="btn btn-primary">Accéder à toutes les offres</a>
                </div>
            </div>
        </div>
    </div>

@endsection
