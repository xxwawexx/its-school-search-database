<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
<link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- Head Libs -->
<script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43810120-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-43810120-2');
</script> --}} <!-- commented by alex -->

<!-- Main CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Vendor CSS -->
<link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
<link href="{{ asset('css/all.css') }}" rel="stylesheet">

<!-- Theme CSS -->
<link href="{{ asset('css/theme.css') }}" rel="stylesheet">

<!-- Skin CSS -->
<link href="{{ asset(Request::segment(1) == 'school-search' || Request::segment(1) == 'school-profile' ? 'css/skin-listing.css' : 'css/default.css') }}" rel="stylesheet">

<!-- Theme Custom CSS -->
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

