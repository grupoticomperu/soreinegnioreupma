	<!--====== About Section Start ======-->
	<section class="about-section section-gap">
		<div class="container">
			<div class="row justify-content-lg-between align-items-center justify-content-center">
				<div class="col-lg-5 col-md-8">
					<div class="about-tag-img wow fadeInLeft">
						<img src="{{ Storage::disk("s3")->url($homeservice->image)}}" alt="Image">
						<div class="experience-tag">
							<div>
								<span class="big">{{ $configurations->years }}</span>
								Años de Experiencia
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="about-text p-left wow fadeInRight">
						<div class="section-title mb-30">
							<span class="title-tag">Nosotros</span>
							<h2 class="title">
								{{ $homeservice->title }} <span>FAMAIC</span>
							</h2>
							<p>
								{{ $homeservice->texto }}
							</p>
						</div>
						<p>
							{!! $homeservice->description !!}
						</p>

						<a href="{{ route('pagecontacs.index') }}" class="main-btn main-btn-2 mt-30">Ver más <span class="icon">+</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== About Section End ======-->
