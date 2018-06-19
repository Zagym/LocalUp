@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="choose_city">Ville</label>
                <select class="custom-select" id="choose_city">
                    <option selected>Toutes</option>
                    @for($i = 1; $i < 6; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group col-lg-6">
                <label for="choose_cat">Catégorie</label>
                <select class="custom-select" id="choose_cat">
                    <option selected>Toutes</option>
                    @for($i = 1; $i < 6; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="row justify-content-center">
            @for($i = 1; $i < 12; $i ++)
                <div class="col-lg-3 mb-4">
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
        </div>
    </div>

@endsection