@extends('layouts.main')

@section('title', $title)

@section('content')

    <section>
        <div class="container container-lg py-5">

            <h1 class="text-primary font-weight-bold m-0 mb-3">Top Schools in Singapore</h1>

            <div class="d-grid pb-1">
                <a href="{{ $urlBase }}affordable-international-schools-in-singapore">
                    <article>
                        <div
                            class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                            <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                <img src="{{ $urlBase }}img/front-cover-0203.webp" class="img-fluid"
                                     alt="How To Take Better Concert Pictures in 30 Seconds">
                                <div class="thumb-info-title bg-transparent p-4">
                                    <div class="thumb-info-type bg-color-primary px-2 mb-1">Feb 2022</div>
                                    <div class="thumb-info-inner mt-1">
                                        <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">
                                            Affordable International Schools in Singapore </h2>
                                    </div>
                                    <div class="thumb-info-show-more-content">
                                        <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Are high
                                            international school fees causing you stress? Here’s a list of
                                            affordable, low-cost school choices in Singapore. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
                <a href="{{ $urlBase }}student-wellbeing-is-just-as-important-as-academic-achievement">
                    <article>
                        <div
                            class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                            <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                <img src="{{ $urlBase }}img/front-cover-sg-051222.webp" class="img-fluid"
                                     alt="How To Take Better Concert Pictures in 30 Seconds">
                                <div class="thumb-info-title bg-transparent p-4">
                                    <div class="thumb-info-type bg-color-primary px-2 mb-1">May 2022</div>
                                    <div class="thumb-info-inner mt-1">
                                        <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">
                                            Student Wellbeing Is Just as Important as Academic Achievement  </h2>
                                    </div>
                                    <div class="thumb-info-show-more-content">
                                        <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">As a society, we are beginning to take our mental and emotional wellbeing more seriously than we have done in recent years. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('local-assets')

    <link rel="stylesheet" href="{{ $urlBase }}vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{ $urlBase }}vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{ $urlBase }}vendor/rs-plugin/css/navigation.css">

    <link rel="stylesheet" href="{{ $urlBase }}admin/vendor/select2/css/select2.css"/>

    <style>
        .d-grid{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 1rem;
        }

        .search-sc button {
            min-width: 43px !important;
        }

        .search-sc select {
            border-radius: 0;
        }

        .select2-container {
            width: 74% !important;
        }

        .sd-btn {
            background: #0088cc !important;;
            color: white !important;
            line-height: 0 !important;;
            border-radius: 0 !important;;
            font-weight: 600 !important;;
        }

        .text-cc-primary {
            color: #00c4ff !important;
        }

        @media (max-width: 767px) {

        }

        #footer {
            margin-top: 0 !important;
        }

        /*Select*/
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 5px;
        }

        .select2-container--default .select2-selection--single {
            height: 36px;
            border: none;
            padding-top: 4px;
            border-radius: 0;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            text-align: left;
        }

        .select2-container:focus, .select2-container--default .select2-selection--single {
            outline: none !important;
        }

        .select2-selection__arrow {
            display: none;
        }
    </style>

@endsection

@section('local-scripts')

    <script src="{{ $urlBase }}vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ $urlBase }}js/views/view.contact.js"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

@endsection

