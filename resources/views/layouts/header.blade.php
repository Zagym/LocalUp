<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo-localup.png" width="300px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn-primary btn-sm btn mx-2" href="{{ route('login') }}">Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-primary btn-sm btn mx-2" href="{{ route('register') }}">S'inscrire</a>
                </li>
            </ul>
        </div>
    </div>
</nav>