<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Crypto - Home </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	@include('layout.partials.head')
  
</head>

<body id="bdy" style="background-image: url({{ asset('assets/img/crypto/bg1.png') }})">		

	<!-- Start PreLoader 
    ============================================= -->
	<div class="se-pre-con"></div>
	<!-- Start PreLoader-->
	
	@include('layout.partials.header')
    
    <main class="main">
        @yield('content')
	</main>	

    @include('layout.partials.foot')
</body>

</html>