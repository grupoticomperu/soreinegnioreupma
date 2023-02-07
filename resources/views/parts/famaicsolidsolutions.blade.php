	<!--====== Feature Section Start ======-->
	<section class="feature-section section-gap square-shape">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 col-md-10 order-2 order-lg-1">
					<div class="feature-text">
						<div class="section-title mb-40 wow fadeInLeft" data-wow-delay="300ms">
							<span class="title-tag">{{ $hometwo->title1 }}</span>
							<h2 class="title">
								{{ $hometwo->title2 }} <span>{{ $hometwo->title3 }}</span>
							</h2>
							<p>
								{!! $hometwo->texttitle !!}
							</p>
						</div>
						<ul class="feature-lists">
							<li class="wow fadeInUp" data-wow-delay="300ms">
								<div class="icon color-1">
									<i class="{{ $hometwo->iconsubtitle1 }}"></i>
								</div>
								<div class="desc">
									<h5>{{ $hometwo->subtitle1 }}</h5>
									<p>
										{{ $hometwo->textsubtitle1  }}
									</p>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-delay="400ms">
								<div class="icon color-2">
									<i class="{{ $hometwo->iconsubtitle2 }}"></i>
								</div>
								<div class="desc">
									<h5>{{ $hometwo->subtitle2 }}</h5>
									<p>
										{{ $hometwo->textsubtitle2  }}
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 order-1 order-lg-2">
					<div class="feature-gallery">
                        @if ($hometwo->image1)
                        <img src="{{ Storage::disk("s3")->url($hometwo->image1)}}" alt="Famaic" class="wow fadeInRight" data-wow-delay="400ms">
                        @endif

                        @if ($hometwo->image2)
						<img src="{{ Storage::disk("s3")->url($hometwo->image2)}}" alt="Famaic" class="wow fadeInRight" data-wow-delay="500ms">
                        @endif
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Feature Section End ======-->
