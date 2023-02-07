  <!-- Footer-->
  <footer class="parallax-container footer-classic" data-parallax-img="/images/footer.jpg">
    <div class="parallax-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h2 class="text-center"><span class="font-weight-black">Contáctenos</span></h2>
            <p class="footer-address">Planta 1:<a href="#">{{ $configurations->address }}</a></p>
            <p class="footer-address">Planta 2: <a href="#"> AV. JULIO DÍAZ DÍAZ MZ. U LOTE 04 EL DORADO, PUENTE PIEDRA.</a></p>
            <div class="unit footer-contacts align-items-center justify-content-center flex-column flex-sm-row">
              <div class="unit-left">
                <div class="icon novi-icon fa fa-phone"></div>
              </div>
              <div class="unit-body">
                <ul>
                  <li><a class="footer-tel" href="tel:#">{{ $configurations->telephono }}</a></li>
                  <li><a class="footer-tel" href="tel:#">{{ $configurations->movil }}</a></li>
                </ul>
              </div>
            </div>
            <!-- Socialite-->
            <ul class="footer-social-list">
              <li><a class="footer-social-link icon novi-icon fa fa-facebook" href="{{ $configurations->facebook }}"></a></li>
              {{-- <li><a class="footer-social-link icon novi-icon fa fa-twitter" href="#"></a></li> --}}
            </ul>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>AMPUERO INGENIEROS </span><span>- LIMA -</span><a href="#"> PERÚ</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
