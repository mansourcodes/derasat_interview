<!-- Hero -->
<div class="">
    <div class="container content-space-1 content-space-md-2">
        <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-8 col-lg-7">
                <!-- Heading -->
                <div class="text-center mb-7">
                    <img class="w-100" src="{{ asset('theme/svg/logos/fourm_logo.svg') }}" alt="Image Description">

                    <h1 class="display-4 text-primary"
                        style="
                    text-transform: uppercase;
                    font-size: 3rem;
                ">
                        The role of women in policy and think tanks</h1>
                    <p class="lead">Examining the Underrepresentation of Women in Think Tanks: Addressing the
                        Imbalance for a More Equitable Future</p>
                </div>
                <!-- End Heading -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="position-relative mb-5">
            <!-- FancyBox -->
            <a href="https://www.youtube.com/" role="button" data-fslightbox="youtube-video">
                <img class="img-fluid" src="{{ asset('theme/svg/logos/hero.jpeg') }}" alt="Image Description">

                <div class="position-absolute top-50 start-50 translate-middle">
                    <!-- Fancybox -->
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <span class="btn btn-icon btn-white text-primary">
                                <i class="bi-play-circle-fill"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Fancybox -->
                </div>
            </a>
            <!-- End FancyBox -->

            <!-- Background Shapes -->
            <div class="position-absolute zi-n1" style="top: -2rem; left: -6rem;">
                <img src="{{ asset('theme/svg/logos/1.png') }}" alt="SVG" style="width: 200px">
            </div>
            <div class="position-absolute zi-n1" style="bottom: -6rem; right: -7rem;">
                <img src="{{ asset('theme/svg/logos/2.png') }}" alt="SVG" style="width: 200px">
            </div>
            <!-- End Background Shapes -->
        </div>

        <div class="text-center">
            <a class="btn btn-outline-primary" href="{{ route('speakers') }}">
                Explore Speakers <i class="bi-chevron-right small ms-1"></i>
            </a>
        </div>
    </div>
</div>
<!-- End Hero -->
