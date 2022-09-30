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
			<h3 class="style-text-head wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">SMART CONTRACT</h3>
			<div class="col-1"></div>
			<div class="col-xl-6 d-flex align-content-center">
				<div class="container">
					<div class="hero-content-2 wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">
						<div class="hero-desc">
							<div class="d-flex justify-content-between mb-0">
								<div class="">
									<p class="text-start style-text-p">Name Token</p>
									<h3 class="style-text-h3">Star Engine</h3>
								</div>
								<div class="">
									<p class="text-start style-text-p">Symbol Token</p>
									<h3 class="style-text-h3">STEGS</h3>
								</div>
							</div>
							<div class="d-flex align-items-start flex-column">
								<div class="mb-0">
									<p class="text-start style-text-p">Token Supply</p>
									<h3 class="style-text-h3">2.000.000.000.000 STEGS</h3>
								</div>
								<div class="mb-0">
									<p class="text-start style-text-p">Token Blokchain</p>
									<h3 class="style-text-h3">Binance Smart Chain (BEP-20)</h3>
								</div>
								<div class="mb-0">
									<p class="text-start style-text-p">Contract Address</p>
									<h3 class="style-text-h3">0xkaslndkjasbndjkabkwhbd877</h3>
								</div>
							</div>
							<div class="hero-btn d-flex justify-content-around mb-5">
								<a href="#" target="_blank" class="tm-btn-1 demo2">
									BscScan
								</a>
								<a href="#" target="_blank" class="tm-btn-1 demo2">
									Pancakeswap
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 d-flex flex-column">
				<h3 class="style-text-bottom">SMART CONTRACT</h3>
				<img src="{{ asset('assets/img/crypto/astro3.png') }}" class="my-auto" alt="">
			</div>
		</div>
	</div>
</div>
<!-- End Slider -->
@endsection

@push('js')
	
@endpush