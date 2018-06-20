@extends('layouts.app')

@section('content')

  <div id="component-offer-detail" class="pb-5">
    <div class="container">
      <p class="mt-4">
        <a href="/locations">< Retour à la liste des offres de location</a>
      </p>

      <h1 class="pt-3">{{ $local->label }}<br/><small>{{ $local->category->label }}, {{ $local->city }}</small></h1>

      <div class="row mb-5">
        <div class="col-12 col-lg-6 text-center">
          <img src="https://imgplaceholder.com/800x800" class="img-fluid" alt=""/>
        </div>
        <div class="col-12 col-lg-6">
          <h2>Informations générales :</h2>
          <div class="list-group">
            <div class="d-flex w-100 justify-content-between">
              <p class="mb-1">Adresse</p>
            </div>
            <p class="mb-1">
              {{ $local->address }},<br>
              étage {{ $local->floor }},<br>
              porte {{ $local->door }}
            </p>
            <div class="d-flex w-100 justify-content-between">
              <p class="mb-1">Capacité</p>
            </div>
            <p class="mb-1">
              {{ $local->capacity }}
            </p>
            <div class="d-flex w-100 justify-content-between">
              <p class="mb-1">Prix à la journée</p>
            </div>
            <p class="mb-1">
              {{ $local->price }}€
            </p>
            <div class="d-flex w-100 justify-content-between">
              <p class="mb-1">Description</p>
            </div>
            <p class="mb-1">
              {{ $local->description }}
            </p>
          </div>
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
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
          aria-labelledby="v-pills-home-tab">
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
              <h5>Disponibilté :</h5>
              <p>Immédiate</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
        aria-labelledby="v-pills-profile-tab">
        <form method="POST" action="">
          <h4>Choisissez un forfait :</h4>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions"
              id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Offre basic</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions"
              id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Offre perso</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions"
              id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">Offre premium</label>
            </div>
          </div>

          <h4>Choisissez des options supplémentaires :</h4>

          <div class="form-group">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
              value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Imprimante</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
              value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Option 2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
              value="option3">
              <label class="form-check-label" for="inlineCheckbox3">Option 3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
              value="option4">
              <label class="form-check-label" for="inlineCheckbox4">Option 4</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg">Choisir cette offre</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
