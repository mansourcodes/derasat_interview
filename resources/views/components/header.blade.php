<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
    <div class="container">
        <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Default Logo -->
            <a class="navbar-brand" href="{{ url('/') }}" aria-label="Space">
                <img class="navbar-brand-logo" src="{{ asset('theme/svg/logos/logo.svg') }}" alt="Image Description">
            </a>
            <!-- End Default Logo -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                </span>
                <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                </span>
            </button>
            <!-- End Toggler -->

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">


                    <!-- Menu -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="MegaMenu_4" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                            role="button" aria-expanded="false">Speakers</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="MegaMenu_4" style="min-width: 12rem;">
                            {{-- <a class="dropdown-item " href="./blog-classic.html">Blog</a> --}}
                            <a class="dropdown-item " href="{{ route('speakers') }}/a">Speaker A</a>
                            <a class="dropdown-item " href="{{ route('speakers') }}/b">Speaker B</a>
                            <a class="dropdown-item " href="{{ route('speakers') }}">All Speakers</a>

                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Menu -->




                    <li class="nav-divider"></li>

                    <!-- Log in -->
                    <li class="nav-item">


                        <a class=" btn btn-primary" href="{{ route('buy-ticket') }}">
                            <i class="bi-download me-1"></i> Buy Tickets
                        </a>
                    </li>
                    <!-- End Log in -->

                </ul>
            </div>
            <!-- End Collapse -->
        </nav>
    </div>
</header>
<!-- ========== END HEADER ========== -->
