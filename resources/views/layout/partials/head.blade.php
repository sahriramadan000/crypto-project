<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">
<!-- ========== Start Stylesheet ========== -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
<!-- ========== End Stylesheet ========== -->

<style>
    .img-animation{
        position: relative;
        animation-name: animation1;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    @keyframes animation1 {
        0%   {bottom:0px; top:0px;}
        50%  {bottom:0px; top:20px;}
        100% {bottom:0px; top:0px;}
    }
</style>

@stack('css')