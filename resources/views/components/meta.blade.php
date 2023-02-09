{{-- facebook --}}
{{-- <meta property="fb:app_id" content="123456789"> --}}
<meta property="og:url" content="https://safiapp.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$title}}">
<meta property="og:image" content="https://safiapp.com/theme/img/feature-graphic.png">
<meta property="og:image:alt" content="{{$meta_desc}}">
<meta property="og:description" content="{{$meta_desc}}">
<meta property="og:site_name" content="{{$title}}">
<meta property="og:locale" content="en_US">

{{-- twitter --}}
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@thesafiapp">
<meta name="twitter:creator" content="@_mansourcodes_">
<meta name="twitter:url" content="https://safiapp.com/">
<meta name="twitter:title" content="{{$title}}">
<meta name="twitter:description" content="{{$meta_desc}}">
<meta name="twitter:image" content="https://safiapp.com/theme/img/feature-graphic.png">
<meta name="twitter:image:alt" content="{{$meta_desc}}">


{{-- icons --}}
<!-- Icon in the highest resolution we need it for -->
<link rel="icon" sizes="192x192" href="{{ asset('favicon.ico') }}">
<!-- Apple Touch Icon (reuse 192px icon.png) -->
<link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
<!-- Safari Pinned Tab Icon -->
<link rel="mask-icon" href="{{ asset('favicon.ico') }}" color="blue">