<!-- Start header data-bs-toggle="dropdown"
============================================= -->
<header class="header">
    <div class="main-navigation">
        <nav id="navbar_top" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/crypto/logo-white.png') }}" width="70" class="logo-display" alt="Itsol">
                    <img src="{{ asset('assets/img/crypto/logo-dark.png') }}" width="60" class="logo-scrolled" alt="Itsol">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="ti-menu-alt"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                    <ul id="top-menu" class="navbar-nav v-card-menu">
                        <li class="nav-item">
                            <a class="nav-link smooth-menu" href="{{ route('smart-contract') }}"> 
                                Smart Contracts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-menu" href="{{ route('partner-ships') }}"> 
                                Partnerships
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-menu" href="#service">
                                Tokenomics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-menu" href="#work"> 
                                Roadmap
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-menu" href="#blog"> 
                                Whitepaper
                            </a>
                        </li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
                <div class="side-menu">
                    <div class="d-flex"> 
                        <a href="#"><i class="fab fa-facebook-f text-white ms-5"></i></a>
                        <a href="#"><i class="fab fa-git text-white ms-5"></i></a>
                        <a href="#"><i class="fab fa-twitter text-white ms-5"></i></a>
                        <a href="#"><i class="fab fa-telegram text-white ms-5"></i></a>
                    </div>
                </div><!-- Side Menu -->
            </div> <!-- container -->
        </nav>
    </div>
</header>
<!-- End header -->