<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand py-0 mr-0" href="{{ route('home') }}">
            <img src="/img/logo-localup.png" class="img-fluid" alt="logo">
        </a>

        <ul class="list-unstyled list-inline mb-0 d-block d-lg-none">
          <li class="list-inline-item m-2"><a href="#"><i class="fas fa-phone"></i></a></li>
          <li class="list-inline-item m-2"><a href="#" data-toggle="modal" data-target="#modalConnect"><i class="fas fa-user"></i></a></li>
        </ul>

        <ul class="navbar-nav ml-auto d-none d-lg-flex">
            <li class="nav-item">
                <a class="nav-link mx-2" href="tel:0655443322"><i class="fas fa-phone"></i> 06.55.44.33.22</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-primary btn-sm btn mx-2" href="{{ route('login') }}">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-primary btn-sm btn mx-2" href="{{ route('register') }}">S'inscrire</a>
            </li>
        </ul>

    </div>
</nav>

<div class="modal fade" id="modalConnect" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <a href="{{ route('login') }}" class="btn btn-primary btn-block">Se connecter</a>
          <a href="{{ route('register') }}" class="btn btn-primary btn-block">S'inscrire</a>
      </div>
    </div>
  </div>
</div>
