	<!--====== Banner Slider Start ======-->
	<section class="banner-section">
		<div id="bannerSlider">
            @foreach ( $slider as $slide )
			<div class="single-banner" style="background-image: url({{ Storage::disk("s3")->url($slide->image)}});">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="banner-text">
								<ul class="banner-tags">
									<li data-animation="fadeInLeft" data-delay="0.3s">{{ $slide->title1 }}</li>
									<li data-animation="fadeInDown" data-delay="0.4s">{{ $slide->title2 }}</li>
									<li data-animation="fadeInRight" data-delay="0.5s">{{ $slide->title3 }}</li>
								</ul>
								<h1 class="title" data-animation="fadeInUp" data-delay="0.6s">{{ $slide->title4 }}
									<span>FAMAIC</span></h1>
								<ul class="banner-btns">
									<li data-animation="fadeInLeft" data-delay="0.9s"><a href="{{ route('pagecontacs.index') }}" class="main-btn">Contáctenos <span class="icon">+</span></a></li>
									<li data-animation="fadeInRight" data-delay="1.2s">
										@if($slide->url)
                                            <a href="{{ $slide->url }}"
                                                class="video-btn popup-video"><i class="fas fa-play"></i>
                                            </a>
                                        @endif

									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach

			{{-- <div class="single-banner" style="background-image: url(assets/img/banner/banner-01.jpg);">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="banner-text">
								<ul class="banner-tags">
									<li data-animation="fadeInLeft" data-delay="0.3s">digital product</li>
									<li data-animation="fadeInDown" data-delay="0.4s">uix solutions</li>
									<li data-animation="fadeInRight" data-delay="0.5s">onsultancy</li>
								</ul>
								<h1 class="title" data-animation="fadeInUp" data-delay="0.6s">Digital Agency
									<span>Solutions</span></h1>
								<ul class="banner-btns">
									<li data-animation="fadeInLeft" data-delay="0.9s"><a href="#" class="main-btn">Our
											Services <span class="icon">+</span></a></li>
									<li data-animation="fadeInRight" data-delay="1.2s">
										<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ&feature=youtu.be"
											class="video-btn popup-video"><i class="fas fa-play"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</section>
	<!--====== Banner Slider End ======-->
