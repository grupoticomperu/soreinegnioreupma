      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->





          <li class="nav-item menu-open">
            <a href="{{ route('admin.product.index') }}" class="nav-link
            @if (request()->is('admin/product'))
            active
            @elseif(request()->is('admin/categoria'))
              active
            @elseif(request()->is('admin/marca'))
              active
            @endif
            ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRODUCTOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('admin.product.index')}} " class="nav-link {{ request()->is('admin/product') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Ver los Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('categoria.index')}} " class="nav-link {{ request()->is('admin/categoria') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Categorias de productos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('subcategory.list')}} " class="nav-link {{ request()->is('admin/subcategoriaslist') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Sub-Categorias de productos</p>
                </a>
              </li>


              <li class="nav-item">
                <a href=" {{ route('marca.index')}} " class="nav-link {{ request()->is('admin/marca') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Marcas</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('marca.index')}} " class="nav-link {{ request()->is('admin/marca') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Modelos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('marca.index')}} " class="nav-link {{ request()->is('admin/marca') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Unidad de Medida</p>
                </a>
              </li>

            {{-- <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#exampleModalp" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Crear Productos</p>
                </a>
              </li> --}}

            </ul>
          </li>




          <li class="nav-item menu-open">
            <a href="{{ route('sliders.index') }}" class="nav-link

            @if (request()->is('admin/configurations/1/edit'))
            active
            @elseif(request()->is('admin/sliders'))
              active
            @elseif(request()->is('admin/offers'))
              active
            @elseif(request()->is('admin/homeservices'))
              active

            @endif
            ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HOME
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('configurations.edit', 1)}} " class="nav-link {{ request()->is('admin/configurations/1/edit') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Configuraciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('sliders.index')}} " class="nav-link {{ request()->is('admin/sliders') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Slider</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('admin.hometwo.edit', 1)}} " class="nav-link {{ request()->is('admin/hometwo/1') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Home de 2 imagenes</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('admin.homethree.edit', 1)}} " class="nav-link {{ request()->is('admin/homethree/1') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Home de 4 imagenes</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('offers.index')}} " class="nav-link {{ request()->is('admin/offers') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Ofrecemos</p>
                </a>
              </li>


              <li class="nav-item">
                <a href=" {{ route('homeservices.index')}} " class="nav-link {{ request()->is('admin/homeservices') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Servicios del Home</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item menu-open">
            <a href="{{ route('admin.product.index') }}" class="nav-link
            @if (request()->is('admin/abouts/1/edit'))
              active
            @elseif(request()->is('admin/whies'))
              active
            @elseif(request()->is('admin/questions'))
              active
            @elseif(request()->is('admin/works'))
              active
            @elseif(request()->is('admin/teams'))
              active
            @elseif(request()->is('admin/testimonies'))
              active
            @elseif(request()->is('admin/pagecontacts/1/edit'))
              active
            @endif ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                NOSOTROS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('abouts.edit', 1)}} " class="nav-link {{ request()->is('admin/abouts/1/edit') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Nosotros</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('whies.index')}} " class="nav-link {{ request()->is('admin/whies') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Porque Nosotros</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('questions.index')}} " class="nav-link {{ request()->is('admin/questions') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Preguntas Frecuentes</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('works.index')}} " class="nav-link {{ request()->is('admin/works') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Trabajos</p>
                </a>
              </li>


              <li class="nav-item">
                <a href=" {{ route('teams.index')}} " class="nav-link {{ request()->is('admin/teams') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Equipo</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('testimonies.index')}} " class="nav-link {{ request()->is('admin/testimonies') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Testimonio</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('pagecontacts.edit', 1)}} " class="nav-link {{ request()->is('admin/pagecontacts/1/edit') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Página de Contactos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('pageservices.edit', 1)}} " class="nav-link {{ request()->is('admin/pageservices/1/edit') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Página de Servicios</p>
                </a>
              </li>

            </ul>
          </li>







          <li class="nav-item menu-open">
            <a href="#" class="nav-link
            @if (request()->is('admin/services'))
              active
            @endif
            ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Servicios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href=" {{ route('services.index')}} " class="nav-link {{ request()->is('admin/services') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Servicios</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link
            @if (request()->is('admin/contactos'))
              active
            @endif
            ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contactos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href=" {{ route('contact.index')}} " class="nav-link {{ request()->is('admin/contact') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Contactos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('orders.index')}} " class="nav-link {{ request()->is('admin/orders') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Pedidos</p>
                </a>
              </li>

            </ul>
          </li>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
