@extends('layout.app')

@push('css')
	
@endpush

@section('content')
<!-- Start Slider
============================================= -->
<div id="home" class="hero-section">
	<div class="hero-single-2 jarallax" data-jarallax='{"speed": 0.2}'>
		<div class="row hero-row-style">
			<div class="col-xl-3 d-flex align-items-end">
					<img src="{{ asset('assets/img/crypto/astro2.png') }}" class="img-animation" width="300" style="transform: matrix(-0.99, 0.13, 0.13, 0.99, 0, 0);" alt="">
			</div>
			<div class="col-xl-6 d-flex align-content-center">
				<div class="container">
					<div class="hero-content-2 wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">
						<div class="hero-desc">
							<h2 class="hero-title text-center mb-0">
								STAR ENGINE									
							</h2>

							<h2 class="hero-sub text-center mt-0">
								With AR Technology								
							</h2>
							
							<div class="mb-5">
								<p class="text-justify">
									This is a secret non-government agency that researches various planets, extraterrestrial objects, and various alien creatures from outside the earth.
								</p>									
								<p class="text-justify">information that will be presented in the form of Augmented Reality (AR) and you can enjoy and read the story if you have the NFT.</p>
							</div>

							<div class="hero-btn d-flex justify-content-around mb-5">
								<a href="#" target="_blank" class="tm-btn-1 demo2">
									Whitepaper
								</a>
								<a href="#" target="_blank" class="tm-btn-1 demo2">
									Pancakeswap
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 d-flex align-items-start mt-5 mb-5">
				<img src="{{ asset('assets/img/crypto/astro1.png') }}" width="250"  alt="">
			</div>
		</div>
	</div>
</div>
<!-- End Slider -->
@endsection

@push('js')
	
@endpush