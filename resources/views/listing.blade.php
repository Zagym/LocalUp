@extends('layouts.app')

@section('content')
<div id="component-offers-list" class="pb-5">
    <div class="container">
        <h1>Nos offres de locations</h1>

        <div class="row mt-4" id="accordion">
            <div class="col-lg-6" id="cities">
                <button class="btn btn-primary collapsed col-lg-12" data-toggle="collapse" data-target="#collapseCity" aria-expanded="false" aria-controls="collapseCity">
                    City
                </button>
            </div>
            <div class="col-lg-6" id="categories">
                <button class="btn btn-primary collapsed col-lg-12" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                    Category
                </button>
            </div>
            <div class="col-12 py-4 text-center">
                <div class="collapse" aria-labelledby="cities" data-parent="#accordion" id="collapseCity">
                    <button class="btn btn-light" data-mixitup-control data-filter="all">Toutes</button>
                    @foreach($cities as $city)
                        @php
                            $city_name = str_slug($city->label, "-");
                        @endphp
                        <button class="btn btn-light" data-filter=".{{ $city_name }}" data-mixitup-control>{{ $city->label }}</button>
                    @endforeach
                </div>
                <div class="collapse" aria-labelledby="categories" data-parent="#accordion" id="collapseCategory">
                    <button class="btn btn-light" data-mixitup-control data-filter="all">Toutes</button>

                    @foreach($categories as $category)
                        @php
                            $category_name = str_slug($category->label, "-");
                        @endphp
                        <button class="btn btn-light" data-filter=".{{$category_name}}" data-mixitup-control>{{ $category->label }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="offers_list">
            @foreach($locals as $local)
                @php
                    foreach($categories as $category){
                        if ($local->type_id == $category->id) {
                            $category_name = str_slug($category->label, "-");
                        }
                    }
                    $city_name = str_slug($local->city, "-");
                @endphp
                <div class="col-lg-3 mb-4 mix {{$city_name." ".$category_name}}">
                    <div class="offer">
                        <div class="img-offer">
                            <img src="https://imgplaceholder.com/500x300" class="img-fluid" alt="">
                        </div>
                        <div class="description-offer text-center p-4 bg-light">
                            <h2 class="mt-0">{{$local->label}}</h2>

                            <a href="" class="btn btn-primary">En savoir +</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
     </div>
  </div>
@endsection
