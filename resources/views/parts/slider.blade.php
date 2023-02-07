        {{-- slider --}}
        <div class="swiper-container swiper-slider" data-loop="true" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper text-center">


            @forelse ($slider as $slide)
                <div class="swiper-slide context-dark" data-slide-bg="{{ Storage::disk("s3")->url($slide->image)}}">
                    <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 data-caption-animate="fadeInUp" data-caption-delay="100"><span class="font-weight-black">{{ $slide->title1 }}</span></h2>
                            <p class="big font-weight-light px-lg-2 d-none d-md-block text-white-8" data-caption-animate="fadeInUp" data-caption-delay="250"></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            @empty

            <div>Ampuero Ingenieros</div>

            @endforelse





            </div>
            <!--Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!--Swiper Navigation-->
            <div class="swiper-button-prev fa-arrow-left"></div>
            <div class="swiper-button-next fa-arrow-right"></div>
          </div>
          {{-- slider --}}
