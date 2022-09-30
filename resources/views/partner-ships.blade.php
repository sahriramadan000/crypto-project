@extends('layout.app')

@push('css')
<link href="{{ asset('assets/css/custome-page/styles.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- Start Slider
============================================= -->
<div id="home" class="hero-section">
	<div class="hero-single-2 jarallax" data-jarallax='{"speed": 0.2}'>
		<div class="row hero-row-style">
			<h3 class="style-text-head wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">PARTNERSHIPS</h3>
			<div class="col-1"></div>
			<div class="col-xl-7 d-flex align-content-center">
				<div class="container">
					<div class="hero-content-2 wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">
						<div class="hero-desc">
							<div class="row mb-5 partnerships">
								<div class="col-6 d-flex justify-content-end align-content-center">
									<h3 class="style-text-h3 my-auto">Pancake swap</h3>
									<img src="{{ asset('assets/img/crypto/partner1.png') }}" class="img-partner1 my-auto" alt="">
								</div>
								<div class="col-6 d-flex justify-content-start align-content-center">
									<img src="{{ asset('assets/img/crypto/partner2.png') }}" class="img-partner2 my-auto" alt="">
									<h3 class="style-text-h3 my-auto">Open Sea</h3>
								</div>
							</div>
							<div class="row partnerships">
								<div class="col-6 d-flex justify-content-end align-content-center">
									<h3 class="style-text-h3 my-auto">CoinGecko</h3>
									<img src="{{ asset('assets/img/crypto/partner3.png') }}" class="img-partner3 my-auto" alt="">
								</div>
								<div class="col-6 d-flex justify-content-start align-content-center">
									<img src="{{ asset('assets/img/crypto/partner4.png') }}" class="img-partner4 my-auto" alt="">
									<h3 class="style-text-h3 my-auto">CoinMarketCap</h3>
								</div>
							</div>
							<div class="partnerships-mobile">
								<div class="row d-flex">
									<div class="col-6">
										<img src="{{ asset('assets/img/crypto/partner1.png') }}" class="img-partner4 d-block mx-auto" alt="">
										<h3 class="style-text-h3 text-center">Pancake Swap</h3>
									</div>
									<div class="col-6">
										<img src="{{ asset('assets/img/crypto/partner2.png') }}" class="img-partner4 d-block mx-auto" alt="">
										<h3 class="style-text-h3 text-center">Open Sea</h3>
									</div>
									<div class="col-6">
										<img src="{{ asset('assets/img/crypto/partner3.png') }}" class="img-partner4 d-block mx-auto" alt="">
										<h3 class="style-text-h3 text-center">CoinGecko</h3>
									</div>
									<div class="col-6">
										<img src="{{ asset('assets/img/crypto/partner4.png') }}" class="img-partner4 d-block mx-auto" alt="">
										<h3 class="style-text-h3 text-center">CoinMarketCap</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 d-flex flex-column">
				<h3 class="style-text-bottom">PARTNERSHIPS</h3>
				<img src="{{ asset('assets/img/crypto/Earth1.png') }}" width="290" class="my-auto ms-auto" alt="">
			</div>
		</div>
		<div class="row wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">
			<div class="col-1"></div>
			<div class="col-11 d-flex">
				<img src="{{ asset('assets/img/crypto/Earth2.png') }}" class="img-foot" alt="">
				<div class="d-block my-auto ms-3">
					<p class="style-text-p-foot mb-0">Open for Partnership</p>
					<h3 class="style-text-h3-foot">team.strangine@gmail.com</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Slider -->
@endsection

@push('js')
	
@endpush