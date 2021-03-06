@extends('layouts.app')

@section('content')

    <div id="component-offer-detail" class="pb-5">
        <div class="container">
            <p class="my-5">
                <a href="/locations">< Retour à la liste des offres de location</a>
            </p>

            <div class="row mb-5">
                <div class="col-12 col-md-5 text-center">
                    @if($local->image_url)
                        <img src="{{ asset('storage').'/'.$local->image_url }}" class="img-fluid" alt="">
                    @else
                        <img src="https://imgplaceholder.com/500x300" class="img-fluid" alt="">
                    @endif
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="pt-3">{{ $local->label }}<br/><small>{{ $local->category->label }}, {{ $local->city->label }}</small></h1>
                    <h2>Informations générales :</h2>

                    <h4>Description :</h4>
                    <p class="description">
                        {!! nl2br(e($local->description)) !!}
                    </p>

                    <ul class="list-unstyled">
                        <li><b>Adresse :</b> {{ $local->address }}, {{ $local->city->label }} {{ $local->zip }}, France</li>
                        <li><b>Étage :</b> {{ $local->floor }}, <b>Porte :</b> {{ $local->door }}</li>
                        <li><b>Capacité :</b> {{ $local->capacity }} personne(s)</li>
                        <li><b>Prix de la journée : </b> {{ $local->price }}€</li>
                    </ul>
                </div>
            </div>


            <h2>Personnalisation de votre espace de travail :</h2>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">Conditions</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        Personnalisation
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <div class="col-12 col-md-3 text-center">
                                <h5>Caution :</h5>
                                <p>1 Loyer</p>
                            </div>
                            <div class="col-12 col-md-3 text-center">
                                <h5>Animaux :</h5>
                                <p>Non autorisé</p>
                            </div>
                            <div class="col-12 col-md-3 text-center">
                                <h5>Charges comprises :</h5>
                                <p>Oui</p>
                            </div>
                            <div class="col-12 col-md-3 text-center">
                                <h5>Disponibilité :</h5>
                                <p>Immédiate</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <form method="POST" action="{{ route('louer', ['local' => $local]) }}">
                            {{ csrf_field() }}
                            <h4>Date de location :</h4>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="dateDebut">Date de debut</label>
                                    <input type="date" class="form-control datepicker" id="dateDebut" name="dateDebut" placeholder="Choisissez une date de debut">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dateFin">Date de fin</label>
                                    <input type="date" class="form-control datepicker" id="dateFin" name="datefin" placeholder="Choisissez une date de fin">
                                </div>
                            </div>

                            <h4>Choisissez un forfait :</h4>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="offre"
                                    id="offre1" value="1">
                                    <label class="form-check-label" for="offre1">Offre basic</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="offre"
                                    id="offre2" value="2">
                                    <label class="form-check-label" for="offre2">Offre perso</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="offre"
                                    id="offre3" value="3">
                                    <label class="form-check-label" for="offre3">Offre premium</label>
                                </div>
                            </div>
                            <div class="form-group">
                                @php
                                $i = 1;
                                @endphp
                                @foreach($modules_bases as $moduls)
                                    <div class="module_ratio" id="module_radio{{$i}}">
                                        @php
                                        $res = $moduls[0];
                                        @endphp
                                        @foreach($moduls as $module)
                                            @if($module != $res)
                                                @php
                                                $res .=", ". $module;
                                                @endphp
                                            @endif
                                        @endforeach
                                        <p class="h6 text-primary d-block">Cette offre contient:</p>
                                        <p>{{$res}}</p>
                                    </div>
                                    @php
                                    $i++;
                                    $res = "";
                                    @endphp
                                @endforeach

                            </div>
                            <h4>Choisissez des options supplémentaires :</h4>
                            <p class="alert alert-success msg-offre-selected">Vous devez choisir une offre avant de choisir des options supplémentaires</p>
                            @php
                                $occurence = count($modules_bases);
                            @endphp
                            @for($j = 1; $j <= $occurence; $j++)
                                <div class="form-group optionSuppl" id="optionSuppl{{$j}}">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($modules as $module)
                                        @php
                                            $flag = true;
                                        @endphp
                                        @foreach($modules_ids_ex[$j-1] as $id)
                                            @if($module->id == $id)
                                                @php
                                                    $flag = false;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($flag)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox{{$j."-".$i}}"
                                                name="{{"option[".$i."-".$j.']'}}" value="{{$module->id}}">
                                                <label class="form-check-label" for="inlineCheckbox{{$j."-".$i}}">{{$module->label." (".$module->price.'€)'}}</label>
                                            </div>
                                        @endif
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            @endfor
                            <button type="submit" class="btn btn-primary btn-lg">Choisir cette offre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
