@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="parallax section section-text-light section-parallax section-center section-overlay-opacity section-overlay-opacity-scale-8 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ $imageUrlBase }}school-database-bg.webp">
        <div class="container container-lg my-5 py-5">
            <div class="row">
                <div class="col-md-12 text-center">

                    <div class="container h-100">

                        <div class="row align-items-center justify-content-center h-100">
                            <div class="col-lg-7 text-center">
                                <h1 class="font-weight-bold text-color-light text-13 line-height-2 negative-ls-2 mb-4">
                                    Hong Kong & Singapore’s<strong
                                        class="text-cc-primary font-weight-extra-bold appear-animation"
                                        data-appear-animation="fadeIn"
                                        data-appear-animation-delay="200">
                                        Leading</strong> School Search Database</h1>

                                <div class="appear-animation" data-appear-animation="fadeIn"
                                     data-appear-animation-delay="500">
                                    <p class="font-weight-light text-color-light text-4 line-height-7 px-5 mb-0">
                                        Find, research, discover the top international schools in Hong Kong and
                                        Singapore. Compare up to 4 schools simultaneously</p>
                                </div>

                                <div class="row mt-5 search-sc">
                                    <div class="col">
                                        <form id="ss-param" method="get" action="{{ $urlBase }}school-search">
                                            <div class="form-row">
                                                <div class="col-md-3 col-3">
                                                    <select name="type" id="type" class="h-100 form-control">
                                                        <option
                                                            value="" {{ empty(app('request')->input('type')) || app('request')->input('type') == "" ? 'selected' : '' }}>
                                                            Any School Type
                                                        </option>
                                                        <option
                                                            value="Nursery" {{ app('request')->input('type') == "Nursery" ? 'selected' : '' }}>
                                                            Nursery
                                                        </option>
                                                        <option
                                                            value="Playgroup" {{ app('request')->input('type') == "Playgroup" ? 'selected' : '' }}>
                                                            Playgroup
                                                        </option>
                                                        <option
                                                            value="Reception" {{ app('request')->input('type') == "Reception" ? 'selected' : '' }}>
                                                            Reception
                                                        </option>
                                                        <option
                                                            value="Kindergarten" {{ app('request')->input('type') == "Kindergarten" ? 'selected' : '' }}>
                                                            Kindergarten
                                                        </option>
                                                        <option
                                                            value="Primary" {{ app('request')->input('type') == "Primary" ? 'selected' : '' }}>
                                                            Primary
                                                        </option>
                                                        <option
                                                            value="Secondary" {{ app('request')->input('type') == "Secondary" ? 'selected' : '' }}>
                                                            Secondary
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="country" id="country" class="form-control h-100">
                                                        <option
                                                            value="" {{ empty(app('request')->input('country')) || app('request')->input('country') == "" ? 'selected' : '' }}>
                                                            Any Country
                                                        </option>
                                                        <option
                                                            value="Hong Kong" {{ app('request')->input('country') == "Hong Kong" ? 'selected' : '' }}>
                                                            Hong Kong
                                                        </option>
                                                        <option
                                                            value="Singapore" {{ app('request')->input('country') == "Singapore" ? 'selected' : '' }}>
                                                            Singapore
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="curriculum" id="curriculum"
                                                            class="h-100 form-control">
                                                        <option
                                                            value="" {{ empty(app('request')->input('curriculum')) || app('request')->input('curriculum') == "" ? 'selected' : '' }}>
                                                            Any Curriculum
                                                        </option>
                                                        <option
                                                            value="Advanced Placements (AP)" {{ app('request')->input('curriculum') == "Advanced Placements (AP)" ? 'selected' : '' }}>
                                                            Advanced Placements (AP)
                                                        </option>
                                                        <option
                                                            value="Australian National Curriculum" {{ app('request')->input('curriculum') == "Australian National Curriculum" ? 'selected' : '' }}>
                                                            Australian National Curriculum
                                                        </option>
                                                        <option
                                                            value="American Curriculum" {{ app('request')->input('curriculum') == "American Curriculum" ? 'selected' : '' }}>
                                                            American Curriculum
                                                        </option>
                                                        <option
                                                            value="American High School Diploma" {{ app('request')->input('curriculum') == "American High School Diploma" ? 'selected' : '' }}>
                                                            American High School Diploma
                                                        </option>
                                                        <option
                                                            value="Alberta Programme" {{ app('request')->input('curriculum') == "Alberta Programme" ? 'selected' : '' }}>
                                                            Alberta Programme
                                                        </option>
                                                        <option
                                                            value="A-Levels" {{ app('request')->input('curriculum') == "A-Levels" ? 'selected' : '' }}>
                                                            A-Levels
                                                        </option>
                                                        <option
                                                            value="British National Curriculum" {{ app('request')->input('curriculum') == "British National Curriculum" ? 'selected' : '' }}>
                                                            British National Curriculum
                                                        </option>
                                                        <option
                                                            value="BTEC" {{ app('request')->input('curriculum') == "BTEC" ? 'selected' : '' }}>
                                                            BTEC
                                                        </option>
                                                        <option
                                                            value="CBSE" {{ app('request')->input('curriculum') == "CBSE" ? 'selected' : '' }}>
                                                            CBSE
                                                        </option>
                                                        <option
                                                            value="Cambridge Primary Curriculum" {{ app('request')->input('curriculum') == "Cambridge Primary Curriculum" ? 'selected' : '' }}>
                                                            Cambridge Primary Curriculum
                                                        </option>
                                                        <option
                                                            value="EYFS" {{ app('request')->input('curriculum') == "EYFS" ? 'selected' : '' }}>
                                                            EYFS
                                                        </option>
                                                        <option
                                                            value="English National Curriculum" {{ app('request')->input('curriculum') == "English National Curriculum" ? 'selected' : '' }}>
                                                            English National Curriculum
                                                        </option>
                                                        <option
                                                            value="French National Curriculum" {{ app('request')->input('curriculum') == "French National Curriculum" ? 'selected' : '' }}>
                                                            French National Curriculum
                                                        </option>
                                                        <option
                                                            value="Forest School Programme" {{ app('request')->input('curriculum') == "Forest School Programme" ? 'selected' : '' }}>
                                                            Forest School Programme
                                                        </option>
                                                        <option
                                                            value="German International Abitur" {{ app('request')->input('curriculum') == "German International Abitur" ? 'selected' : '' }}>
                                                            German International Abitur
                                                        </option>
                                                        <option
                                                            value="Gifted Programmes" {{ app('request')->input('curriculum') == "Gifted Programmes" ? 'selected' : '' }}>
                                                            Gifted Programmes
                                                        </option>
                                                        <option
                                                            value="Global Citizen Diploma" {{ app('request')->input('curriculum') == "Global Citizen Diploma" ? 'selected' : '' }}>
                                                            Global Citizen Diploma
                                                        </option>
                                                        <option
                                                            value="IGCSE" {{ app('request')->input('curriculum') == "IGCSE" ? 'selected' : '' }}>
                                                            IGCSE
                                                        </option>
                                                        <option
                                                            value="HKDSE" {{ app('request')->input('curriculum') == "HKDSE" ? 'selected' : '' }}>
                                                            HKDSE
                                                        </option>
                                                        <option
                                                            value="HSC (High School Certificate)" {{ app('request')->input('curriculum') == "HSC (High School Certificate)" ? 'selected' : '' }}>
                                                            HSC (High School Certificate)
                                                        </option>
                                                        <option
                                                            value="IB PYP" {{ app('request')->input('curriculum') == "IB PYP" ? 'selected' : '' }}>
                                                            IB PYP
                                                        </option>
                                                        <option
                                                            value="IB MYP" {{ app('request')->input('curriculum') == "IB MYP" ? 'selected' : '' }}>
                                                            IB MYP
                                                        </option>
                                                        <option
                                                            value="IB Diploma" {{ app('request')->input('curriculum') == "IB Diploma" ? 'selected' : '' }}>
                                                            IB Diploma
                                                        </option>
                                                        <option
                                                            value="IBCP" {{ app('request')->input('curriculum') == "IBCP" ? 'selected' : '' }}>
                                                            IBCP
                                                        </option>
                                                        <option
                                                            value="IEYC" {{ app('request')->input('curriculum') == "IEYC" ? 'selected' : '' }}>
                                                            IEYC
                                                        </option>
                                                        <option
                                                            value="IPC" {{ app('request')->input('curriculum') == "IPC" ? 'selected' : '' }}>
                                                            IPC
                                                        </option>
                                                        <option
                                                            value="IMYC" {{ app('request')->input('curriculum') == "IMYC" ? 'selected' : '' }}>
                                                            IMYC
                                                        </option>
                                                        <option
                                                            value="Key Stages 1 & 2" {{ app('request')->input('curriculum') == "Key Stages 1 & 2" ? 'selected' : '' }}>
                                                            Key Stages 1 & 2
                                                        </option>
                                                        <option
                                                            value="Key Stages 3 & 4" {{ app('request')->input('curriculum') == "Key Stages 3 & 4" ? 'selected' : '' }}>
                                                            Key Stages 3 & 4
                                                        </option>
                                                        <option
                                                            value="Montessori Programme" {{ app('request')->input('curriculum') == "Montessori Programme" ? 'selected' : '' }}>
                                                            Montessori Programme
                                                        </option>
                                                        <option
                                                            value="Ontario Programme" {{ app('request')->input('curriculum') == "Ontario Programme" ? 'selected' : '' }}>
                                                            Ontario Programme
                                                        </option>
                                                        <option
                                                            value="Ontario Secondary School Diploma (OSSD)" {{ app('request')->input('curriculum') == "Ontario Secondary School Diploma (OSSD)" ? 'selected' : '' }}>
                                                            Ontario Secondary School Diploma (OSSD)
                                                        </option>
                                                        <option
                                                            value="Reggio Emilia" {{ app('request')->input('curriculum') == "Reggio Emilia" ? 'selected' : '' }}>
                                                            Reggio Emilia
                                                        </option>
                                                        <option
                                                            value="Singaporean" {{ app('request')->input('curriculum') == "Singaporean" ? 'selected' : '' }}>
                                                            Singaporean
                                                        </option>
                                                        <option
                                                            value="Special Educational Needs (SEN)" {{ app('request')->input('curriculum') == "Special Educational Needs (SEN)" ? 'selected' : '' }}>
                                                            Special Educational Needs (SEN)
                                                        </option>
                                                        <option
                                                            value="STEAM" {{ app('request')->input('curriculum') == "STEAM" ? 'selected' : '' }}>
                                                            STEAM/STEM
                                                        </option>
                                                        <option
                                                            value="UK Curriculum" {{ app('request')->input('curriculum') == "UK Curriculum" ? 'selected' : '' }}>
                                                            UK Curriculum
                                                        </option>
                                                        <option
                                                            value="US Diploma" {{ app('request')->input('curriculum') == "US Diploma" ? 'selected' : '' }}>
                                                            US Diploma
                                                        </option>
                                                        <option
                                                            value="US-Standards Based" {{ app('request')->input('curriculum') == "US-Standards Based" ? 'selected' : '' }}>
                                                            US-Standards Based
                                                        </option>
                                                        <option
                                                            value="Waldorf Curriculum" {{ app('request')->input('curriculum') == "Waldorf Curriculum" ? 'selected' : '' }}>
                                                            Waldorf Curriculum
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-1">
                                                    <div class="btn-group w-100">
                                                        <button type="submit" class="btn btn-primary rounded-0 w-100">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="mt-5 appear-animation"
                                     data-appear-animation="fadeIn"
                                     data-appear-animation-delay="1300">

                                    <div class="trustpilot-widget" data-locale="en-US"
                                         data-template-id="5419b6ffb0d04a076446a9af"
                                         data-businessunit-id="5bff76bfb4f25a000185164e" data-style-height="20px"
                                         data-style-width="100%" data-theme="dark"><a
                                            href="https://www.trustpilot.com/review/itseducation.asia" target="_blank"
                                            rel="noopener">Trustpilot</a></div>

                                </div>


                                <div style="margin-top: 15vh">
                                    <p>
                                        All the information you need about international schools in Hong Kong and
                                        Singapore </p>
                                    <p>
                                        See all the facts about all the top schools from fees to facilities
                                    </p>
                                    <p>
                                        Compare international schools side by side with the school comparison tool
                                    </p>
                                    <ul class="list list-icons list-icons-style-2 list-icons-sm d-inline-block">
                                        <li class="text-left text-white"><i
                                                class="fas fa-check border-color-light text-white"></i> Search by
                                            Nursery
                                        </li>
                                        <li class="text-left text-white"><i
                                                class="fas fa-check border-color-light text-white"></i> Search by
                                            Reception
                                        </li>
                                        <li class="text-left text-white"><i
                                                class="fas fa-check border-color-light text-white"></i> Search by
                                            Kindergartens
                                        </li>
                                        <li class="text-left text-white"><i
                                                class="fas fa-check border-color-light text-white"></i> Search by
                                            Primary Schools
                                        </li>
                                        <li class="text-left text-white"><i
                                                class="fas fa-check border-color-light text-white"></i> Search by
                                            Secondary Schools
                                        </li>
                                        <li class="text-left text-white"><i
                                                class="fas fa-check border-color-light text-white"></i> Search by
                                            location and curriculum for all
                                        </li>
                                    </ul>
                                    <p>Our database provides comprehensive education data on private and international
                                        schools in Hong Kong & Singapore. Whether you are trying to find schools by
                                        academic results or the best school choices for your child’s particular
                                        interests and abilities, this database can help you. Answer questions such as:
                                        How much does international school cost? Which schools in Hong Kong or Singapore
                                        have bi-lingual programs? Are there boarding schools in Hong Kong and
                                        Singapore?</p>
                                    <p>Search results include details of international schools – including tuition fees,
                                        student numbers, languages of instruction and curriculum whether American,
                                        Australian, English National Curriculum, International Baccalaureate (IB),
                                        Montessori</p>
                                    <p>
                                        FEATURED SCHOOLS give even more detail including parent reviews and virtual
                                        tours and
                                        much, much more.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <div class="col-md-12 text-center top-schools">
                <a href="https://itseducation.asia/school/top-schools-hong-kong">School News Hong Kong</a>
                <a href="https://itseducation.asia/school/top-schools-singapore">School News Singapore</a>
             </div>
        </div>

        <div class="col-md-12 text-center top-schools">
            <a href="https://itseducation.asia/school/hong-kong">Hong Kong Schools</a>
            <a href="https://itseducation.asia/school/singapore">Singapore Schools</a>
        </div>
        <div class="school-guide-advert d-none d-md-block">
            <img src="{{ $imageUrlBase }}school-guide-front-cover_2022-2023-min-ssdb.webp" class="w-100" alt="">
            <div class="school-guide-advert-caption">
                <strong class="text-primary">The Unique Asia Schools Guide</strong>
                <p class="text-black-50 mb-0">Click here to complete our form to <a
                        href="https://www.itseducation.asia/school-guide/index.html#schools-guide-book-container"
                        target="_blank"><strong>Claim Your Free Digital Issue</strong></a></p>
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

        .col-md-12.top-schools a {
        background:#08c;
        padding: 27px;
        color: #fff;
        margin-right: 15px !important;
        }

        .col-md-12.top-schools a:hover {
        background:#00c4ff;
        }

        @media (max-width: 767px) {
        .top-schools a {
            display: flex;
            margin-top: 10px;
            }
        }




        .school-guide-advert {
            position: absolute;
            border-radius: 5px;
            padding: 8px;
            background-color: #ffffff;
            top: 1rem;
            right: 1rem;
            z-index: 999999999999999999999999;
            max-width: calc(50px + (100vw - 88vw));
            transition: 500ms;
            animation: pulse-animation 2s infinite;
        }

        .school-guide-advert-caption {
            display: block;
        }

        div.school-guide-advert:hover {
            animation-play-state: paused;
        }

        @keyframes pulse-animation {
            0% {
                box-shadow: 0 0 0 0px rgba(180, 217, 255, 0.3);
            }
            100% {
                box-shadow: 0 0 0 20px rgb(180, 217, 255, 0);
            }
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

    <link rel="canonical" href="https://itseducation.asia/school/

@endsection

@section('local-scripts')
    <script src="{{  $urlBase }}vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{  $urlBase }}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{  $urlBase }}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{  $urlBase }}js/views/view.contact.js"></script>
    <script src="{{  $urlBase }}admin/vendor/select2/js/select2.js"></script>

    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <script>
        function searchLocation() {
            if ($('#location').val() !== "") {
                var loc = $('#location').val().split(', ');
                window.location.href = '/school-search?country=' + loc[1] + '&location=' + loc[0];
            } else {
                window.location.href = '/school-search';
            }
        }

    </script>


    <script>
        (function (admin, $) {

            admin = admin || {};

            var instanceName = '__select2';

            var PluginSelect2 = function ($el, opts) {
                return this.initialize($el, opts);
            };

            PluginSelect2.defaults = {};

            PluginSelect2.prototype = {
                initialize: function ($el, opts) {
                    if ($el.data(instanceName)) {
                        return this;
                    }

                    this.$el = $el;

                    this
                        .setData()
                        .setOptions(opts)
                        .build();

                    return this;
                },

                setData: function () {
                    this.$el.data(instanceName, this);

                    return this;
                },

                setOptions: function (opts) {
                    this.options = $.extend(true, {}, PluginSelect2.defaults, opts);

                    return this;
                },

                build: function () {
                    this.$el.select2(this.options);

                    return this;
                }
            };

            // expose to scope
            $.extend(admin, {
                PluginSelect2: PluginSelect2
            });

            // jquery plugin
            $.fn.adminPluginSelect2 = function (opts) {
                console.log(1);

                return this.each(function () {
                    var $this = $(this);

                    if ($this.data(instanceName)) {
                        return $this.data(instanceName);
                    } else {
                        return new PluginSelect2($this, opts);
                    }

                });
            }

        }).apply(this, [window.admin, jQuery]);


        // Select2
        (function ($) {

            'use strict';

            if ($.isFunction($.fn['select2'])) {

                $('[data-plugin-selectTwo]').each(function () {

                    console.log(111);

                    var $this = $(this),
                        opts = {};

                    var pluginOptions = $this.data('plugin-options');
                    if (pluginOptions)
                        opts = pluginOptions;

                    console.log(0);

                    $this.adminPluginSelect2(opts);
                });

            }

        }).apply(this, [jQuery]);
    </script>

@endsection

