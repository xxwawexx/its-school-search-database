<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ custom_asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ custom_asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ custom_asset('img/favicon/favicon-16x16.png') }}">
<link rel="mask-icon" href="{{ custom_asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ custom_asset('img/favicon/favicon.ico') }}">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- Head Libs -->
<script src="{{ custom_asset('vendor/modernizr/modernizr.min.js') }}"></script>

<!-- Main CSS -->
<link href="{{ custom_asset('css/app.css') }}" rel="stylesheet">

<!-- Vendor CSS -->
<link href="{{ custom_asset('css/vendor.css') }}" rel="stylesheet">
<link href="{{ custom_asset('css/all.css') }}" rel="stylesheet">

<!-- Theme CSS -->
<link href="{{ custom_asset('css/theme.css') }}" rel="stylesheet">

<!-- Skin CSS -->
<link href="{{ custom_asset(Request::segment(1) == 'school-search' || Request::segment(1) == 'school-profile' ? 'css/skin-listing.css' : 'css/default.css') }}" rel="stylesheet">

<!-- Theme Custom CSS -->
<link href="{{ custom_asset('css/custom.css') }}" rel="stylesheet">

<!-- Google Search Console -->
<meta name="google-site-verification" content="IJYj_qgKmnhsl0kvWzhiI_q-wDHGz8KT4WiktlPMpV4" />

<!-- Google Analytics and Google TM Code -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E4D2VWKZN4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-E4D2VWKZN4');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43810120-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-43810120-1');
</script>
