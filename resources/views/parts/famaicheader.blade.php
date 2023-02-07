<header class="sticky-header">
    <!-- Header Menu  -->
    <div class="container-fluid container-1500">
        <div class="header-nav">
            <div class="nav-container">
                <!-- Site Logo -->
                <div class="site-logo">
                    <a href="/"><img width="140px" src="{{ Storage::disk("s3")->url($configurations->logo) }}" alt="Famaic"></a>
                </div>

                <!-- Menu Items -->
                <div class="menu-items">
                    <ul>
                        <li class="{{ request()->is('/') ? 'current' : ''}}"><a href="/">Inicio</a></li>
                        <li class="{{ request()->is('nosotros') ? 'current' : ''}}"><a href="{{ route('about.index') }}">Nosotros</a></li>

                        <li class="{{ request()->is('productos/*') ? 'current' : ''}}">
                            <a href="#">Productos</a>
                            <ul class="submenu">
                                @foreach ( $subcategories as $subcategoryy)
                                <li><a href="{{ route('sucategoryproducts.show', $subcategoryy)}}">{{ $subcategoryy->name}}</a></li>
                                @endforeach


                            </ul>
                        </li>

                        <li class="{{ request()->is('servicios') ? 'current' : ''}}"><a href="{{ route('pages.servicios') }}">Servicios</a></li>


                        <li class="{{ request()->is('contactenos') ? 'current' : ''}}"><a href="{{ route('pagecontacs.index') }}">Contáctenos</a></li>
                    </ul>
                </div>

                <!-- Navbar Extra  -->
                    <!-- Navbar Extra  -->
                <div class="d-flex align-items-center">
                    {{-- <div class="serach-wrap">
                        <a href="#" class="search-icon">
                            <i class="fal fa-search"></i>
                        </a>
                         <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search your keyword...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div> --}}
                    <!-- Navbar Toggler -->
                    <div class="navbar-toggler">
                        <span></span><span></span><span></span>
                    </div>
                </div>

            </div>





            <!-- Contact button -->
            <div class="contact-btn">
                <div class="contact-info">
                    <i class="fal fa-phone"></i>
                    <span class="title">Movil</span>
                    <span class="info">{{ $configurations->movil }}</span>
                </div>
            </div>

          <!-- Mobile Menu  -->
				<div class="mobile-menu">
					<!-- Navbar Close -->
					<div class="navbar-close">
						<div class="cross-wrap"><span></span><span></span></div>
					</div>

					<div class="site-logo">
						<a href="/"><img width="100px" src="{{ Storage::disk("s3")->url($configurations->logo) }}" alt="FAMAIC"></a>

					</div>

					<div class="menu-items">
						<ul>
							<li class="{{ request()->is('/') ? 'current' : ''}}"><a href="/">Inicio</a></li>
                        <li class="{{ request()->is('nosotros') ? 'current' : ''}}"><a href="{{ route('about.index') }}">Nosotros</a></li>

                        <li class="{{ request()->is('productos/*') ? 'current' : ''}}">
                            <a href="#">Productos</a>
                            <ul class="submenu">
                                @foreach ( $subcategories as $subcategoryy)
                                <li><a href="{{ route('sucategoryproducts.show', $subcategoryy)}}">{{ $subcategoryy->name}}</a></li>
                                @endforeach


                            </ul>
                        </li>

                        <li class="{{ request()->is('servicios') ? 'current' : ''}}"><a href="{{ route('pages.servicios') }}">Servicios</a></li>


                        <li class="{{ request()->is('contactenos') ? 'current' : ''}}"><a href="{{ route('pagecontacs.index') }}">Contáctenos</a></li>
						</ul>
					</div>




					<div class="contact-btn">
						<div class="contact-info">
							<i class="fal fa-phone"></i>
							<span class="title">Movil</span>
							<span class="info">{{ $configurations->movil }}</span>
						</div>
					</div>
				</div>

        </div>
    </div>
</header>






