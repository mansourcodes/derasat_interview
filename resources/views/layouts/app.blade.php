<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('style')
</head>

<body>



    @include('layouts.components.sidebar', ['info_name' => config('app.name', 'Laravel')])
    @include('layouts.components.mainmenu', ['info_name' => config('app.name', 'Laravel')])


    <main id="main" class="py-4 ">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col col-md-5">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>


        @yield('content')

    </main>
    <!-- End #main -->



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('javascript')

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            @yield('jquery')

        });
    </script>

</body>

</html>
