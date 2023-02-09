<nav class="navbar fixed-top bg-white">
    <div class="container-fluid">

        <button type="button" class="btn navbar-toggler " data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <i class="fas fa-bars"></i>
        </button>

        <span class="navbar-brand mb-0 h1 text-primary">
            <a href="{{ route('home') }}">
                {{ $info_name }}
            </a>
        </span>

        @livewire('cart-counter')


    </div>
</nav>
