<!--====== Call to section Start ======-->
@if($homethree->image1)
    <section class="cta-section" style="background-image: url({{ Storage::disk("s3")->url($homethree->image1)}});">
@else
    <section class="cta-section" style="background-image: url();">
@endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cta-text text-center ">
                    <div class="section-title white-color mb-40 wow fadeInLeft" data-wow-delay="400ms">
                        <span class="title-tag">{{ $homethree->title1 }}</span>
                        <h2 class="title">
                            {{ $homethree->title2 }} <span>{{ $homethree->title3 }}</span>
                        </h2>
                    </div>
                    <ul class="cta-btns">
                        <li class="wow fadeInLeft" data-wow-delay="400ms">
                            <a href="{{ route('pagecontacs.index') }}" class="main-btn"><span class="icon-left far fa-envelope"></span>Contáctenos Ahora </a>
                        </li>
                        <li class="wow fadeInRight" data-wow-delay="400ms">
                            <a href="{{ route('about.index') }}" class="main-btn main-btn-2">Nosotros <span class="icon">+</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Call to section End ======-->
