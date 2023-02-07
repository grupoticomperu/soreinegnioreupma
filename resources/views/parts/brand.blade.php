<section class="section section-lg bg-200 text-center novi-background" data-preset='{"title":"Clients","category":"partner","reload":true,"id":"clients-2"}'>
    <div class="container">
      <h2 data-animate='{"class":"fadeInUp"}'>Marcas que<br><span class="text-primary"></span> Representamos</h2>
    </div>
    <div class="owl-carousel owl-style-4" data-owl="{&quot;margin&quot;:80,&quot;loop&quot;:true,&quot;autoWidth&quot;:true,&quot;autoplayTimeout&quot;:4500,&quot;autoplaySpeed&quot;:4500,&quot;slideTransition&quot;:&quot;linear&quot;}" data-items="9">
        @foreach ( $marcas as $marca )
        <img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::url($marca->imagen) }}" alt="" width="180" height="49">

        @endforeach
    </div>
  </section>
