<section class="section section-md bg-white text-center">
    <div class="container">
        <h2>Hosting de Páginas Web</h2>
        <h6 class="text-default">Hosting Especial para Empresas.</h6>
  
      <div class="row row-30 justify-content-md-center">

        @foreach ($hostings as $hosting)
        <div class="col-md-6 col-lg-4">
          <!-- Pricing table item-->
          
            <article class="pricing-table__item pricing-table-modern__item pricing-table-modern__item_prefered">

            <div class="pricing-table__item-header">
              <div class="pricing-table__item-header-bg">
                <div class="pricing-table__item-header-bg-inner"></div>
              </div>
              <p class="pricing-table__item-title">{{ $hosting->title }}</p>
            </div>

            <div class="pricing-table__item-main">
              <div class="pricing-table__item-price"><span class="pricing-table__item-price-currency">S/ </span><span class="pricing-table__item-price-value">{{ $hosting->price}}</span>
                <div class="pricing-table__item-price-aside"></div>
              </div>
              <div class="pricing-table__item-divider"></div>
              <ul class="pricing-table__item-features">
                <li><span class="pricing-table__item-title">Espacio:</span> {{ $hosting->storage }}</li>
                <li><span class="pricing-table__item-title">Ancho de Banda:</span> {{ $hosting->bandwidth }}</li>
                <li><span class="pricing-table__item-title">Cpanel:</span> {{ $hosting->cpanel }}</li>
                <li><span class="pricing-table__item-title">Correos:</span> {{ $hosting->emails }}</li>
                <li><span class="pricing-table__item-title">Base de datos:</span> {{ $hosting->bd }}</li>
              </ul>
              <div class="pricing-table__item-control"><a class="button button-default button-ujarak" href="{{ route('hostingss.show', $hosting) }}">Ver Más</a></div>
            </div>
          </article>
        </div>
        @endforeach


      </div>

    </div>
  </section>