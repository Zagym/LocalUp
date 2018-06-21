@php
    $order = new class() {
        public $created_date = '15/06/2018';
        public $jours_locations = '15';
        public $start_date = '15/06/2018';
        public $end_date = '25/06/2018';
        public $price = '78745';
    };

    $user = new class() {
        public $firstname = 'Jean';
        public $lastname = 'Neymar';
        public $address = '35 rue de la mer';
        public $zip = '69000';
        public $city = 'Lyon';
        public $email = 'lol@lol.lol';
    };

    $local = new class () {
        public $label = 'Chez ginette';
        public $type = 'Bureau fermé';
        public $address = '32 rue chez jean, 69000, Lyon';
        public $price = '350';
        public $description = 'blablablafezfezfezfezfezfez zeezfzefze eezfezfezfezfez';
    };

    $module = new class () {
        public $label = 'Café';
        public $price = '50';
        public $description = 'fezfezf fzefezfefe fezfzegrgthtrh gefezdafez grehehh';
        public $type = 'Boisson';
    };

    $modules[] = $module;
    $modules[] = $module;
    $baseModules[] = $module;
    $baseModules[] = $module;

@endphp

@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex align-items-center justify-content-around my-4">
        <h1 class="py-0">
            <span>Facture du {{ $order->created_date }}</span>
        </h1>
        <div>
            <a href="{{ route('pdf_download') }}">Télécharger la facture</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6 py-6">
            <strong>Nom</strong> : {{ $user->lastname }}<br>
            <strong>Prénom</strong> : {{ $user->firstname }}<br>
            <strong>Adresse</strong> : {{ $user->address }}, {{ $user->zip }}, {{ $user->city }}<br>
            <strong>Email</strong> : {{ $user->email }}
        </div>
        <div class="col-lg-6 text-right">
            <strong>Entreprise</strong> : {{ env('COMPANY_NAME') }}<br>
            <strong>Adresse</strong> : {{ env('COMPANY_ADDRESS') }}<br>
            <strong>Email</strong> : {{ env('COMPANY_EMAIL') }}<br>
            <strong>Téléphone</strong> : {{ env('COMPANY_PHONE') }}
        </div>

        <div class="col-12 mt-5">
            <h2>Local loué</h2>
            <table class="table table-striped mt-5">
                <thead>
                <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col">Type</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Description</th>
                    <th scope="col">Jours de location</th>
                    <th scope="col">Prix HT à la journée</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $local->label }}</td>
                    <td>{{ $local->type }}</td>
                    <td>{{ $local->address }}</td>
                    <td>{{ $local->description }}</td>
                    <td>{{ $order->jours_locations }}</td>
                    <td>{{ $local->price}}€</td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="col-12 mt-5">
            <h2>Module de base</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Prix HT à la journée</th>
                </tr>
                </thead>
                <tbody>
                @foreach($baseModules as $baseModule)
                    <tr>
                        <td>{{ $baseModule->label }}</td>
                        <td>{{ $baseModule->description }}</td>
                        <td>{{ $baseModule->type }}</td>
                        <td>{{ $baseModule->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-12 mt-5">
            <h2>Module supplémentaire</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Prix HT à la journée</th>
                </tr>
                </thead>
                <tbody>
                @foreach($modules as $module)
                    <tr>
                        <td>{{ $module->label }}</td>
                        <td>{{ $module->description }}</td>
                        <td>{{ $module->type }}</td>
                        <td>{{ $module->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-12 mt-5">
            <h2>Prix et informations</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Date début de location</th>
                    <th scope="col">Date de fin de location</th>
                    <th scope="col">Prix HT</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $order->start_date }}</td>
                    <td>{{ $order->end_date }}</td>
                    <td>{{ $order->price }}€</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection