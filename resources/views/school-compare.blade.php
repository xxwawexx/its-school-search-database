@extends('layouts.main')

@section('title', $title)

@section('content')

    <section
            class="parallax section section-text-light section-parallax section-center section-overlay-opacity section-overlay-opacity-scale-8 my-0"
            data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ $imageUrlBase }}school-database-bg.webp">

        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme carousel-center-active-item"
                     data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'autoplay': true, 'autoplayTimeout': 10000, 'dots': false}">
                    @if($school[0]['main']['country'] == "Hong Kong")
                        <div>
                            <a href="https://www.itseducation.asia/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}slides/SG_banner-ga1.jpg" alt=""></a>
                        </div>
                        <div>
                            <a href="https://www.kellettschool.com/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}kellet-advert-comp.gif" alt=""></a>
                        </div>
                        <div>
                            <a href="https://www.shrewsbury.edu.hk/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}shrewburry-ssd-compare.webp" alt=""></a>
                        </div>
                        <div>
                            <a href="https://www.malverncollege.org.hk/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}HK_banner-fa1.gif" alt=""></a>
                        </div>
                    @else
                        <div>
                            <a href="https://www.itseducation.asia/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}slides/SG_banner-ga1.jpg" alt=""></a>
                        </div>
                        <div>
                            <a href="http://nlcssingapore.sg/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}nlcs-comp.webp" alt=""></a>
                        </div>
                        <div>
                            <a href="https://www.tts.edu.sg/" target="_blank"><img class="img-fluid" src="{{ $imageUrlBase }}top_slider-fa1.webp" alt=""></a>
                        </div>
                    @endif
                </div>

                <div class="col-md-12">

                    <h1 class="mb-4">ITS Education School Comparison Tool</h1>

                    <p>Finding the right school for your child is a complicated process, but ITS Education is here to
                        help! A great way to research schools and start to build your list is to compare schools
                        side-by-side. With
                        the ability to research over 100,000 schools, ITS Education School Comparison Tool allows you to
                        view up to <strong>four schools at a time</strong> and examine key factors such as academic
                        quality, diversity, teacher
                        quality, student-teacher ratio, and school size. </p>

                    <p>
                        Looking for a school in Hong Kong? We can guide you in the right direction. <a
                                href="https://itseducation.asia/online-form-eds.htm" target="_blank" class="cus-btn">Contact
                            Us Today!</a>
                    </p>

                    <div class="tbtn-cta">
                        <form action="{{ $urlBase }}school-search" method="get" class="d-inline-block mr-2">
                            @if($rq)
                                @foreach($rq as $key => $cs)
                                    <input type="hidden" name="compare[]" value="{{$cs}}">
                                @endforeach
                            @endif
                            <button class="btn btn-primary" type="submit">Add School To Compare</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container container-lg py-5">
            <div class="row">

                @if($school)
                    @foreach($school as $sc)
                        <div class="col-3 mx-auto">
                            <div class="sr-table">
                                <div class="sr-table-head">
                                    <a href="javascript:void(0)" onclick="rmParam('sc', {{$sc['main']['id']}})"
                                       data-toggle="tooltip" title="Remove School" class="rm-school"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                    <h3>{{$sc['main']['name']}}</h3>
                                    <p><a class="popup-gmaps"
                                          href="{{$sc['info']['gmapLoc'] ? str_replace(['&quot;', '&amp;', 'src='], ['', '', ''], explode(' ',  $sc['info']['gmapLoc'])[1]) : '#'}}">{{$sc['main']['address'].', '.$sc['main']['country']}}</a>
                                    </p>
                                </div>
                                <div class="sr-table-body">
                                    <div class="sr-table-body-item">
                                        <p>Gender:</p>
                                        <ul>
                                            <li>{{$sc['info']['gender'] ? $sc['info']['gender'] : 'N/A'}}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>School Type:</p>
                                        <ul>
                                            <li>{{$sc['main']['type'] ? implode(", ", json_decode($sc['main']['type'])) : ''}}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Curriculum:</p>
                                        <ul>
                                            <li>{{ $sc['info']['curriculum'] ? implode(", ", json_decode($sc['info']['curriculum'])) : '' }}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Ages:</p>
                                        <ul>
                                            <li>{{ $sc['info']['agesMin'] && $sc['info']['agesMax'] ? $sc['info']['agesMin'] . ' - ' . $sc['info']['agesMax'] : 'N/A' }}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Number of Pupils:</p>
                                        <ul>
                                            <li>{{$sc['info']['pupils'] ? $sc['info']['pupils'] : 'N/A'}}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Fees:</p>
                                        <ul>
                                            <li>Nursery: {{ $sc['info']['fee_a'] ? $sc['info']['fee_a'] : 'N/A' }}</li>
                                            <li>K1-K2: {{ $sc['info']['fee_b'] ? $sc['info']['fee_b'] : 'N/A' }}</li>
                                            <li>
                                                Reception: {{ $sc['info']['fee_c'] ? $sc['info']['fee_c'] : 'N/A' }}</li>
                                            <li>Year 1-6: {{ $sc['info']['fee_d'] ? $sc['info']['fee_d'] : 'N/A' }}</li>
                                            <li>Years
                                                7-8: {{ $sc['info']['fee_e'] ? $sc['info']['fee_e'] : 'N/A' }}</li>
                                            <li>Years
                                                9-11: {{ $sc['info']['fee_f'] ? $sc['info']['fee_f'] : 'N/A' }}</li>
                                            <li>Years 12: {{ $sc['info']['fee_g'] ? $sc['info']['fee_g'] : 'N/A' }}</li>
                                            <li>Years 13: {{ $sc['info']['fee_h'] ? $sc['info']['fee_h'] : 'N/A' }}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Language of Instruction:</p>
                                        <ul>
                                            <li>{{ $sc['info']['language'] ? implode(", ", json_decode($sc['info']['language'])) : 'N/A' }}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Application Dates:</p>
                                        <ul>
                                            <li>{{ $sc['info']['applicationDates'] ? $sc['info']['applicationDates'] : 'N/A' }}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Debenture:</p>
                                        <ul>
                                            <li>{{ $sc['info']['debenture'] ? $sc['info']['debenture'] : 'N/A' }}</li>
                                        </ul>
                                    </div>
                                    <div class="sr-table-body-item">
                                        <p>Website:</p>
                                        <ul>
                                            <li>{{ $sc['info']['website'] ? $sc['info']['website'] : 'N/A' }}</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="sr-table-footer">
                                    <a href="{{ $urlBase }}school-profile/{{ $sc['main']['slug'] }}" target="_blank">
                                        <button class="btn btn-primary mb-4">View Full Profile</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </section>

@endsection

@section('local-assets')

    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">

    <link rel="stylesheet" href="/admin/vendor/select2/css/select2.css"/>

    <style>
        .mfp-close:focus {
            outline: none !important;
        }

        .cus-btn {
            color: #fff !important;
            border: 1px solid #fff;
            padding: 2px 9px 5px;
            margin-left: 6px;
            transition: .5s;
        }

        .cus-btn:hover {
            background: #0092c8;
            color: #fff;
        }

        .sr-table h3, .sr-table p {
            color: #000 !important;
        }

        .sr-table {
            border: 1px solid #ababab;
            padding: 10px;
            background: #ffffffde;
            border-radius: 18px;
        }

        .sr-table-head {
            border-bottom: 1px solid #ababab;
            padding: 30px 0px 15px;
        }

        .sr-table-head h3 {
            font-size: 20px;
            font-weight: bold;
            min-height: 50px;
        }

        .sr-table-head p {
            font-size: 12px;
            min-height: 55px;
        }

        .sr-table-body {
            padding: 20px 0px 10px;
        }

        .sr-table-body-item p {
            font-weight: 500;
            margin-bottom: 0 !important;

        }

        .sr-table-body ul {
            margin-bottom: 16px;
            padding-left: 0;
            border: 1px solid #cacaca;
        }

        .sr-table-body ul li {
            list-style: none;
            padding: 5px 0px;
        }

        .sr-table-head .rm-school {
            position: absolute;
            right: 30px;
            top: 10px;
            border: 1px solid #c55d5d;
            padding: 0px 5px;
            color: #c55d5d;
            transition: .5s;
        }

        .sr-table-head a:hover {
            color: #b34242 !important;
            border-color: #b34242 !important;
        }

        footer {
            margin-top: 0px !important;
        }

        .tbtn-cta button {
            min-width: 198px;
        }
    </style>

@endsection

@section('local-scripts')

    <script src="{{ $urlBase }}vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ $urlBase }}js/views/view.contact.js"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

    <script>


        function rmParam(key, value) {
            var url = location.href;
            var inV = "&" + encodeURIComponent(key + '[]') + "=" + encodeURIComponent(value);

            if (url.indexOf(inV) >= 0)
                url = url.replace(inV, "");
            else
                url = url.replace("?" + encodeURIComponent(key + '[]') + "=" + encodeURIComponent(value), "");

            window.location.href = url;
        }

    </script>

@endsection

