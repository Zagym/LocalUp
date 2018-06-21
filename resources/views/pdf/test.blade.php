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


@extends('pdf.layouts.app')

@section('content')

    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.9rem;
    }


    h1, h2, h3 {
        color: #069bff;
    }
    table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }
    table tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    table thead th {
        vertical-align: bottom;
    }
 
    table th, table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    </style>

    <h1><center>LOCAL UP - Facture du {{ $order->created_date }}</center></h1>
    <hr>

    <p style="float:left">
        <strong>Nom</strong> : {{ $user->lastname }}<br>
        <strong>Prénom</strong> : {{ $user->firstname }}<br>
        <strong>Adresse</strong> : {{ $user->address }}, {{ $user->zip }}, {{ $user->city }}<br>
        <strong>Email</strong> : {{ $user->email }}
    </p>
    <p style="margin-top: 3rem; float:right; text-align: right; background-color: #CCC; padding: 20px;">
        <strong>Entreprise</strong> : {{ env('COMPANY_NAME') }}<br>
        <strong>Adresse</strong> : {{ env('COMPANY_ADDRESS') }}<br>
        <strong>Email</strong> : {{ env('COMPANY_EMAIL') }}<br>
        <strong>Téléphone</strong> : {{ env('COMPANY_PHONE') }}
    </p>
    <div style="clear:both"></div>

    <h2>Local Loué : </h2>
    <table>
      <thead>
        <tr>
          <th scope="col">Libelle</th>
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

    <h2>Module de base :</h2>
    <table>
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

    <h2>Module supplémentaire :</h2>
    <table>
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


    <h2>Prix et informations :</h2>
    <table>
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
    <hr>
    <p style="text-align: right; font-size: 1.2rem; font-weight: bold;">Merci de nous faire confiance, à bientôt chez LocalUp.</p>

@endsection
