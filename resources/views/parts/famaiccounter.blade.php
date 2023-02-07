	<!--====== Service With counter Start ======-->
	<section class="service-section with-counter-box">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-2 col-lg-8">
					<div class="counter-boxes row">
						<div class="col-xl-12 col-sm-4 col-6 wow fadeInUp" data-wow-delay="300ms">
							<div class="counter-box">
								<span class="count">{{ $configurations->years }}</span>
								<span class="title">Años de Experiencia</span>
							</div>
						</div>
						<div class="col-xl-12 col-sm-4 col-6 wow fadeInUp" data-wow-delay="400ms">
							<div class="counter-box">
								<span class="count">{{ $configurations->works }}</span>
								<span class="title">Trabajos Realizados</span>
							</div>
						</div>
						<div class="col-xl-12 col-sm-4 col-6 wow fadeInUp" data-wow-delay="500ms">
							<div class="counter-box">
								<span class="count">{{ $configurations->customers }}</span>
								<span class="title">Clientes</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-10">
					<div class="service-boxes wow fadeInRight" data-wow-delay="400ms">

                    @foreach ( $offers->take(4) as $offer )
                        <div class="service-box">
                            <div class="icon">
                                <i class="{{ $offer->image }}"></i>
                            </div>
                            <h4 class="title">
                                <a href="#">{{ $offer->title }} <br> {{ $offer->description }}</a>
                            </h4>
                            <a href="#" class="service-link"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    @endforeach



					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Service With Fact End ======-->
