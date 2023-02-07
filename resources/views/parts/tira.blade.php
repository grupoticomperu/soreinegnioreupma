<section class="section section-lg bg-transparent text-center overflow-hidden novi-background" data-preset='{"title":"Why Us","category":"carousel, blurb","reload":true,"id":"why-us-2"}'>
    <div class="container">
      <h2 data-animate='{"class":"fadeInUp"}'>Beneficios de Nuestrps productos</h2>
      <div class="owl-carousel owl-style-3" data-owl="{&quot;center&quot;:true,&quot;dots&quot;:true,&quot;autoplayTimeout&quot;:4500,&quot;autoplaySpeed&quot;:4500,&quot;slideTransition&quot;:&quot;linear&quot;,&quot;dotsClass&quot;:&quot;owl-dots text-center&quot;}" data-items="1" data-xs-items="2" data-lg-items="3">


              <!-- Blurb-->
              @foreach($offers as $offer)
              <article class="blurb blurb-boxed blurb-warning">
                <div class="blurb-embed"><span class="blurb-icon ith-layers novi-icon"></span></div>
                <div class="blurb-title h5"><a href="">{{ $offer->title }}</a></div>
                <div class="blurb-text">{{ $offer->description }}.</div>
              </article>
              @endforeach


      </div>
    </div>
  </section>
