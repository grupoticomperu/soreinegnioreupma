      <!-- Header-->
      <header>
        <!--RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-wrap-absolute">
          <nav class="rd-navbar novi-bg" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/"><img src="{{ Storage::disk("s3")->url($configurations->logo) }}" alt="AMPUERO INGENIEROS" width="300" height="70"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item  {{ request()->is('/') ? 'active' : ''}}"><a class="rd-nav-link" href="/">INICIO </a>
                      </li>
                      <li class="rd-nav-item {{ request()->is('nosotros') ? 'active' : ''}}"><a class="rd-nav-link" href="{{ route('about.index') }}">NOSOTROS </a>
                      </li>
                  {{--     <li class="rd-nav-item"><a class="rd-nav-link" href="prices.html">REPRESENTACIONES</a>
                      </li> --}}

                      <li class="rd-nav-item {{ request()->is('productos/*') ? 'active' : ''}}"><a class="rd-nav-link">FABRICACION DE PRODUCTOS</a>
                        <ul class="rd-menu rd-navbar-dropdown">
                            @foreach ( $subcategories as $subcategoryy)

                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('sucategoryproducts.show', $subcategoryy)}}">{{ $subcategoryy->name}}</a></li>
                            @endforeach


                        </ul>
                      </li>

                      <li class="rd-nav-item {{ request()->is('contactenos') ? 'active' : ''}}"><a class="rd-nav-link" href="{{ route('pagecontacs.index') }}">CONTÁCTENOS</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
    </header>


