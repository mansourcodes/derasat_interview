<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ Config('settings.site_name') }}</title>



    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/favicon/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ asset('theme/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('theme/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#0145f5">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- CSS Space Template -->
    <link rel="stylesheet" href="{{ asset('theme/css/theme.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('style')

</head>

<body>

    @include('components.header')


    <!-- ========== MAIN CONTENT ========== -->

    <main id="content" role="main">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-5">
                    @if (Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
        </div>


        @yield('content')

    </main>
    <!-- ========== end MAIN CONTENT ========== -->


    @include('components.footer')

    <!-- ========== SECONDARY CONTENTS ========== -->

    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": "2rem"
           },
           "show": {
             "bottom": "2rem"
           },
           "hide": {
             "bottom": "-2rem"
           }
         }
       }'>
        <i class="bi-chevron-up"></i>
    </a>
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('theme/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/hs-show-animation/dist/hs-show-animation.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/typed.js/lib/typed.min.js') }}"></script>

    <!-- JS Space -->
    <script src="{{ asset('theme/js/theme.min.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            // INITIALIZATION OF MEGA MENU
            // =======================================================
            const megaMenu = new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            new HSShowAnimation('.js-animation-link')


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF SWIPER
            // =======================================================
            var sliderThumbs = new Swiper('.js-swiper-thumbs', {
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                history: false,
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                },
                on: {
                    'afterInit': function(swiper) {
                        swiper.el.querySelectorAll('.js-swiper-pagination-progress-body-helper')
                            .forEach($progress => $progress.style.transitionDuration =
                                `${swiper.params.autoplay.delay}ms`)
                    }
                }
            });

            var sliderMain = new Swiper('.js-swiper-main', {
                effect: 'fade',
                autoplay: true,
                loop: true,
                thumbs: {
                    swiper: sliderThumbs
                }
            })


            // INITIALIZATION OF TEXT ANIMATION (TYPING)
            // =======================================================
            const typed = HSCore.components.HSTyped.init('.js-typedjs')
        })()
    </script>


    @yield('javascript')

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            @yield('jquery')
        });
    </script>

    @include('components.pixel')
    @include('components.help-pixel')

</body>

</html>
