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
                        <a id="MegaMenu_1" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                            role="button" aria-expanded="false">Sell</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="MegaMenu_1" style="min-width: 12rem;">
                            <a class="dropdown-item " href="{{ url('/') }}#sell">Point of sale</a>
                            <a class="dropdown-item " href="{{ url('/') }}#sell">Online menu</a>
                            <a class="dropdown-item " href="{{ url('/') }}#sell">Receipt</a>
                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Menu -->

                    <!-- Menu -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="MegaMenu_2" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                            role="button" aria-expanded="false">Manage</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="MegaMenu_2" style="min-width: 12rem;">
                            <a class="dropdown-item " href="{{ url('/') }}#manage">Reports</a>
                            <a class="dropdown-item " href="{{ url('/') }}#manage">Multi users</a>
                            <a class="dropdown-item " href="{{ url('/') }}#manage">Customers Profiles</a>
                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Menu -->

                    <!-- Menu -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="MegaMenu_3" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                            role="button" aria-expanded="false">Engage</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="MegaMenu_3" style="min-width: 12rem;">
                            <a class="dropdown-item " href="{{ url('/') }}#engage">Online Menu</a>
                            <a class="dropdown-item " href="{{ url('/') }}#engage">Digital Catalog</a>
                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Menu -->

                    <!-- Menu -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="MegaMenu_4" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                            role="button" aria-expanded="false">Support</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="MegaMenu_4" style="min-width: 12rem;">
                            {{-- <a class="dropdown-item " href="./blog-classic.html">Blog</a> --}}
                            <a class="dropdown-item " href="https://blog.safiapp.com/">Blog</a>
                            <a class="dropdown-item " href="{{ url('/help') }}">Help</a>

                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Menu -->

                    <!-- Menu -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="MegaMenu_4" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                            role="button" aria-expanded="false">Pricing</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="MegaMenu_4" style="min-width: 12rem;">
                            {{-- <a class="dropdown-item " href="./blog-classic.html">Blog</a> --}}
                            <a class="dropdown-item " href="{{ url('/') }}#price">Safi Free</a>
                            <a class="dropdown-item " href="{{ url('/') }}#price">Safi PRO</a>
                            <a class="dropdown-item " href="https://subscribe.safiapp.com/">Subscribe
                                <i class="bi-box-arrow-up-right ms-1"></i>
                            </a>
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
