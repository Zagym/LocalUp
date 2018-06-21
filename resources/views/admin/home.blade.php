@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="locals">
                <div class="description-offer text-center p-4 bg-light">
                    <h2 class="mt-0">Nombre de locaux</h2>
                    <p class="lead">{{$locals}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="locals">
                <div class="description-offer text-center p-4 bg-light">
                    <h2 class="mt-0">Nombre de locaux loués</h2>
                    <p class="lead">{{$bookings}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="locals">
                <div class="description-offer text-center p-4 bg-light">
                    <h2 class="mt-0">Nombre de villes</h2>
                    <p class="lead">{{$cities}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="locals">
                <div class="description-offer text-center p-4 bg-light">
                    <h2 class="mt-0">Nombre d'utilisateurs</h2>
                    <p class="lead">{{$users}}</p>
                </div>
            </div>
        </div> 
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="locals">
                <div class="description-offer text-center p-4 bg-light">
                    <h2 class="mt-0">Nombre de modules</h2>
                    <p class="lead">{{$modules}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
