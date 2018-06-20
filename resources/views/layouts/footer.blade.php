<footer id="footer" class="bg-primary">
  <div class="container">
    <div class="row align-items-center py-5">
      <div class="col-12 col-lg-3 footer-menu1">
        <ul class="list-unstyled mb-0">
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Qui sommes nous ?</a></li>
          <li><a href="#">Trouver un bureau</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Mentions Légales / CGV</a></li>
        </ul>
      </div>
      <div class="col-12 col-lg-3 footer-menu2">
        <ul class="list-unstyled mb-0">
          <li><a href="{{ route('locals').'?filter=lyon' }}">Trouver un bureau à Lyon</a></li>
          <li><a href="{{ route('locals').'?filter=paris' }}">Trouver un bureau à Paris</a></li>
          <li><a href="{{ route('locals').'?filter=bordeaux' }}">Trouver un bureau à Bordeaux</a></li>
          <li><a href="{{ route('locals').'?filter=marseille' }}">Trouver un bureau à Marseille</a></li>
          <li><a href="{{ route('locals').'?filter=toulouse' }}">Trouver un bureau à Toulouse</a></li>
        </ul>
      </div>
      <div class="col-12 col-lg-6 text-right footer-social">
        <ul class="list-unstyled mb-0">
          <li class="d-flex flex-row justify-content-end social-icons">
            <a href="#" class="ml-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="ml-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="ml-2"><i class="fab fa-instagram"></i></a>
          </li>
          <li><a href="tel:0655443322">06.55.44.33.22</a></li>
          <li><a href="mailto:contact@localup.fr">contact@localup.fr</a></li>
          <li><img src="/img/logo-localup-footer.png" class="img-fluid" width="250px" /></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
