@extends('layouts.app')

@section('content')

  @php
  $cities = Array('Lyon', 'Paris', 'Marseille', 'Toulouse', 'Bordeaux');
  $categories = Array('Bureau', 'Hotel', 'Truc de merde')
  @endphp

  <div id="component-offers-list" class="pb-5">
    <div class="container">
      <h1>Nos offres de locations</h1>
      <div class="row mt-4" id="accordion">
        <div class="col-lg-6" id="cities">
          <button class="btn btn-primary collapsed col-lg-12" data-toggle="collapse" data-target="#collapseCity" aria-expanded="false" aria-controls="collapseCity">
            Filter by City
          </button>
        </div>
        <div class="col-lg-6" id="categories">
          <button class="btn btn-primary collapsed col-lg-12" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
            Filter by Category
          </button>
        </div>
        <div class="col-12 py-4 text-center">
          <div class="collapse" aria-labelledby="cities" data-parent="#accordion" id="collapseCity">
            <button class="btn btn-light" data-mixitup-control data-filter="all">Toutes</button>
            @foreach($cities as $city)
              @php
              $city = str_replace(' ', '-', $city);
              @endphp
              <button class="btn btn-light" data-filter=".{{ $city }}" data-mixitup-control>{{ $city }}</button>
            @endforeach
          </div>
          <div class="collapse" aria-labelledby="categories" data-parent="#accordion" id="collapseCategory">
            <button class="btn btn-light" data-mixitup-control data-filter="all">Toutes</button>

            @foreach($categories as $category)
              <button class="btn btn-light" data-filter=".{{ str_replace(' ', '-', $category) }}" data-mixitup-control>{{ $category }}</button>
            @endforeach
          </div>
        </div>
      </div>

      <div class="row justify-content-center" id="offers_list">
        @for($i = 1; $i < 12; $i ++)
          <div class="col-lg-3 mb-4 mix {{ $i%2 == 0 ? 'Lyon Truc-de-merde' : 'Marseille' }}">
            <div class="offer">
              <div class="img-offer">
                <img src="https://imgplaceholder.com/500x300" class="img-fluid" alt="">
              </div>
              <div class="description-offer text-center p-4 bg-light">
                <h3 class="mt-0">Bureau Lyon</h3>

                <a href="" class="btn btn-primary">En savoir +</a>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>

  </div>

@endsection
