<section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Case Studies","category":"content box, counter","reload":true,"id":"case-studies"}'>
    <div class="container">
      <h2 class="text-center" data-animate='{"class":"fadeInUp"}'>Nuestros Servicios</h2>
      <div class="row row-50 row-lg-60">

            <div class="col-12" data-animate='{"class":"fadeInUp"}'>
                <article class="shadow-sm">
                <div class="row justify-content-center flex-md-row-reverse justify-content-md-start novi-disabled">
                    <div class="col-md-6 text-end">
                    <svg class="image-mask" width="97.2%" height="490" viewBox="0 0 603 490" preserveAspectRatio="xMidYMid slice">
                        <defs>
                        <mask id="mask3">
                            <path d="M603 474.871C399.28 503.917 171.274 502.112 63.2662 369.071C-34.9479 248.094 -15.9947 89.1755 100.569 0H603V474.871Z" fill="#fff"></path>
                        </mask>
                        </defs>
                        <image mask="url(#mask3)" xlink:href="{{ Storage::url($homeservice[0]->image) }}" height="100%" width="100%" preserveAspectRatio="xMidYMid slice"></image>
                    </svg>
                    </div>
                    <div class="col-10 col-md-5">
                    <div class="section-md">
                        <div>
                        <h3>{{ $homeservice[0]->title }}</h3>
                        <p class="d-none d-lg-block">{!! $homeservice[0]->description !!}</p>
                        </div>
                        <div class="row row-offset-md row-lg-40">

                        </div>
                    </div>
                    </div>
                </div>
                </article>
            </div>



            <div class="col-12" data-animate='{"class":"fadeInUp"}'>
            <article class="shadow-sm">
                <div class="row justify-content-center flex-md-row-reverse justify-content-md-end align-items-md-end novi-disabled">
                <div class="col-10 col-md-5">
                    <div class="section-md">
                    <div>
                        <h3>{{ $homeservice[1]->title }}</h3>
                        <p class="d-none d-lg-block">{!! $homeservice[1]->description !!}</p>
                    </div>
                    <div class="row row-offset-md row-lg-40">

                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <svg class="image-mask" width="97.2%" height="490" viewBox="0 0 603 490" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <mask id="mask4">
                        <path d="M0 15.1286C203.72 -13.9173 431.726 -12.1121 539.734 120.929C637.948 241.906 618.995 400.824 502.431 490H0V15.1286Z" fill="#fff"></path>
                        </mask>
                    </defs>
                    <image mask="url(#mask4)" xlink:href="{{ Storage::url($homeservice[1]->image) }}" height="100%" width="100%" preserveAspectRatio="xMidYMid slice"></image>
                    </svg>
                </div>
                </div>
            </article>
            </div>

      </div>
    </div>
  </section>



