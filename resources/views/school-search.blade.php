@php
    $isSchoolSubPath = request()->header('X-Test-Header') === 'ssdb';

    $imageUrlBase = $isSchoolSubPath ? '/school/img/' : '/img/';
    $urlBase = $isSchoolSubPath ? '/school' : '';

    $urlContainsHK = false;
    foreach (['Hong', 'Kong'] as $substring) {
        if (str_contains(url()->full(), $substring)) {
            $urlContainsHK = true;
            break;
        }
    }
@endphp

@extends('layouts.main')

@section('title', $title)

@section('content')

    <div class="container container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="row mt-5">
                    <div class="col text-center">
                        <h2 class="font-weight-normal mb-2">
                            <strong class="text-color-secondary font-weight-extra-bold">Search</strong> the best
                            <strong class="text-color-secondary font-weight-extra-bold">School</strong> in your
                            location.
                        </h2>
                        <p class="mb-4">Find the best school that is suitable for your child by using our school compare
                            tool.<br>Click + symbol on up to 4 schools and press compare.</p>

                    </div>

                </div>
                <hr class="my-5">
                <div class="row mb-3">
                    <div class="col">
                        <form action="{{ $urlBase }}/school-search" id="ss-param" method="get">
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
                                    <select name="curriculum" id="curriculum" class="h-100 form-control">
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
                                <div class="col">
                                    <div class="btn-group w-100">
                                        <a class="popup-with-form" href="#school-search-filter">
                                            <button type="button" class="btn btn-light rounded-0 mr-2"><i
                                                    class="fas fa-cog"></i></button>
                                        </a>
                                        <button type="submit" class="btn btn-secondary rounded-0 w-100">Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0"
                     data-total-pages="2">

                    @foreach($schools as $sc)
                        <div class="col-md-6 col-lg-4 p-3 isotope-item">
                            <div class="listing-item">
                                <div class="thumb-info thumb-info-lighten border">
                                    <div class="thumb-info-wrapper m-0">
                                        <img
                                            src="{{ $sc->fimg['filename'] !== '' ? $imageUrlBase.'school/'.$sc->fimg['filename'] : 'https://via.placeholder.com/342x300.jpg?text=No+Image+Found' }}"
                                            class="img-fluid"
                                            alt="">

                                        @if(strpos($sc->status, "premier") !== false)
                                            <span class="premier-border"></span>
                                            <span class="premier-tag" data-width="50" data-height="50">
                                                        Featured
                                                    </span>
                                        @endif

                                        <div
                                            class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            {{ $sc->country }}
                                        </div>

                                        <div class="compare-icon"><a href="javascript:void(0)"
                                                                     onclick="appendQs('compare', {{$sc->id}})"
                                                                     data-toggle="tooltip"
                                                                     title="Compare To Other School"><i
                                                    class="fa fa-plus"
                                                    aria-hidden="true"></i></a></div>
                                    </div>

                                    <a href="{{ $urlBase }}/school-profile/{{ $sc->slug }}" class="text-decoration-none">
                                        <div
                                            class="thumb-info-price bg-color-primary text-color-light text-1 p-2 pl-3 pr-4">
                                            {{ $sc->type && is_array(json_decode($sc->type)) ? implode(", ", json_decode($sc->type)) : '' }}
                                            <i class="fas fa-caret-right text-color-secondary float-right"></i>
                                        </div>
                                        <div class="custom-thumb-info-title b-normal p-3 d-flex align-items-center">
                                            <div>
                                                <div class="thumb-info-inner text-3 font-weight-bold">
                                                    {{ $sc->name }}
                                                </div>
                                                <div class="text-1"
                                                     style="line-height: 1.4;color: #000;">{{ $sc->address }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <ul class="pagination float-right mt-5">

                    @if( $schools->currentPage() - 1 != 0)
                        <li class="page-item"><a class="page-link"
                                                 href="{{$schools->url($schools->currentPage() - 1)}}"><i
                                    class="fas fa-angle-left"></i></a></li>
                    @endif

                    @for($x = 1 ; $x <= $schools->lastPage(); $x++)
                        <li class="page-item {{ $x == $schools->currentPage() ? 'active' : '' }}"><a class="page-link"
                                                                                                     href="{{$x != 1 ? $schools->url($x) : str_replace(["?page=1","&page=1"],"",$schools->url($x))}}">{{$x}}</a>
                        </li>
                    @endfor

                    @if( $schools->currentPage() < $schools->lastPage())
                        <a class="page-link" href="{{$schools->url($schools->currentPage() + 1)}}"><i
                                class="fas fa-angle-right"></i></a>
                    @endif

                </ul>

            </div>
            <div class="col-lg-3 mt-3">

                @if($compare)
                    <div class="row cs-compare-widget">
                        <div class="col-md-6 col-lg-12 mb-4">
                            <div class="bg-color-light-scale-1 px-3 py-3 pb-1 text-center">
                                <form id="cmp-frm" action="{{ $urlBase }}/compare-school" method="get">
                                    <ul>
                                        @foreach($compare as $key => $cs)
                                            <li>
                                                <a href="{{ $urlBase }}/school-profile/{{ $cs['slug'] }}"
                                                   target="_blank">{{$cs['name']}}</a>
                                                <span data-toggle="tooltip" title="Remove School"
                                                      onclick="rmParam('compare', {{$cs['id']}})"><i class="fa fa-times"
                                                                                                     aria-hidden="true"></i></span>
                                                <input type="hidden" name="sc[]" value="{{$cs['id']}}">
                                            </li>
                                        @endforeach
                                    </ul>
                                    <input type="button" class="btn btn-secondary"
                                           onclick="{{ count($compare) <= 4 ? 'submitForm()' : 'maxSchoolCP()' }}"
                                           value="Compare">
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6 col-lg-12 mb-4">
                        <a href="https://itseducation.asia/from-the-chalkface/" target="_blank">
                            <img src="{{ $imageUrlBase }}yci-lab.png" class="w-100">
                        </a>
                    </div>
                </div>
                <div>
                    <aside class="sidebar">
                        <div class="row">
                            <div class="col-md-6 col-lg-12 mb-4">
                                @if(app('request')->input('country') == "Singapore")
                                    <div class="bg-color-light-scale-1 mt-4">
                                        <a target="_blank"
                                           href="https://www.itseducation.asia/singapore/inside-news-on-schools-singapore.php">
                                            <img src="{{ $imageUrlBase }}sg-insidenews-banner-a1.jpg" class="w-100">
                                        </a>
                                    </div>
                                    <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mt-4">
                                        <div class="owl-carousel owl-theme carousel-center-active-item mb-0"
                                             data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'autoplay': true, 'autoplayTimeout': 5000, 'dots': false}">
                                            <div>
                                                <a href="http://nlcssingapore.sg/" target="_blank"><img
                                                        src="{{ $imageUrlBase }}Web-banner-for-ITS-Asia-Education1_21-02-22.jpg" class="w-100"></a>
                                            </div>


                                            @if(app('request')->input('type') !== "Primary" || app('request')->input('country') !== "Singapore" || app('request')->input('curriculum') !== "UK Curriculum")
                                                @if(app('request')->input('type') !== "Primary" || app('request')->input('country') !== "Singapore" || app('request')->input('curriculum') !== "IB PYP")
                                                    @if(app('request')->input('type') !== "Primary" || app('request')->input('country') !== "Singapore" || app('request')->input('curriculum') !== "IB PYP")
                                                        @if(app('request')->input('type') !== "Secondary" || app('request')->input('country') !== "Singapore" || app('request')->input('curriculum') !== "IGCSE")
                                                            @if(app('request')->input('country') !== "Singapore")
                                                                <div>
                                                                    <a target="_blank" href="https://singapore.dulwich.org/">
                                                                        <img src="{{ $imageUrlBase }}dulwich_banner_39.jpg" class="w-100">
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        @else
                                                            <div>
                                                                <a target="_blank" href="https://www.cis.edu.sg/experiential-learning?utm_campaign=Experiential%20Learning%20OH%2018%20May%202023&utm_source=itseducation&utm_medium=Partner%20web%20banners">
                                                                    <img src="{{ $imageUrlBase }}ITS-350x350px-Artefact.gif" class="w-100">
                                                                </a>
                                                            </div>
                                                        @endif
                                                    @endif

                                                    @if(app('request')->input('type') !== "Secondary" || app('request')->input('country') !== "Singapore" || app('request')->input('curriculum') !== "IGCSE")
                                                        <div>
                                                            <a href="https://www.cis.edu.sg/admissions/book-a-tour?utm_campaign=Partner%20Web%20Banners%20-%20Jun-Jul%202022&utm_source=itseducation&utm_medium=webbanner_bookatour&utm_content=webbanner_bookatour" target="_blank"><img
                                                                    src="{{ $imageUrlBase }}CIS_APRIL_2023.gif" class="w-100"></a>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div>
                                                        <a href="https://www.cis.edu.sg/admissions/book-a-tour?utm_campaign=Graduates%202023&utm_source=itseducation&utm_medium=Partner%20web%20banners" target="_blank"><img
                                                                src="{{ $imageUrlBase }}ITS-350x350px---University-Acceptance.gif" class="w-100"></a>
                                                    </div>
                                                @endif
                                            @endif





                                            <div>
                                                <a href="https://www.nordangliaeducation.com/our-schools/singapore" target="_blank"><img
                                                        src="{{ $imageUrlBase }}dover_court-banner.jpg" class="w-100"></a>
                                            </div>
                                            <div>
                                                <a href="https://www.xwa.edu.sg/?utm_source=digital&utm_medium=banner&utm_campaign=Its_hk_350x350_st_awareness_92021" target="_blank"><img
                                                        src="{{ $imageUrlBase }}XCL_World_Academy_banner-02-21-22.jpg" class="w-100"></a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($urlContainsHK)
                                    <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mb-4">
                                        <div>
                                            <a href="https://www.kellettschool.com/" alt="Kellet"
                                               target="_blank"><img
                                                    src="{{ $imageUrlBase }}0_advert_sb-a1.gif" class="w-100"></a>
                                        </div>
                                    </div>
                                    <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mb-4">
                                        <div>
                                            <a href="https://www.malverncollege.org.hk/" alt="Malvern College HK"
                                               target="_blank"><img
                                                    src="{{ $imageUrlBase }}malvern_college_banner-oct-19.jpg" class="w-100"></a>
                                        </div>
                                    </div>
                                    <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mb-4">
                                        <div>
                                            <a href="https://www.was.edu.hk/" alt="Wycombe"
                                               target="_blank"><img
                                                    src="{{ $imageUrlBase }}Wycombe_Abbey_banner_a2-19.gif" class="w-100"></a>
                                        </div>
                                    </div>
                                    <div class="px-3">
                                        <div class="owl-carousel owl-theme carousel-center-active-item mb-0"
                                             data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'autoplay': true, 'autoplayTimeout': 7000, 'dots': false}">
                                            <div>
                                                <a href="http://nlcssingapore.sg/" target="_blank"><img
                                                        src="{{ $imageUrlBase }}school-banner-1.jpg" class="w-100"></a>
                                            </div>
                                            <div>
                                                <a href="https://www.tts.edu.sg/" target="_blank"><img
                                                        src="{{ $imageUrlBase }}slides/SB-Tanglin_trust-2021.jpg" class="w-100"></a>
                                            </div>
                                            <div>
                                                <a target="_blank"
                                                   href="https://www.nordangliaeducation.com/our-schools/singapore"><img
                                                        src="{{ $imageUrlBase }}slides/sbar-4.jpg" class="w-100"></a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif(app('request')->input('type') == "Reception")
                                    <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mt-4">
                                        <a target="_blank" href="https://www.kellettschool.com/">
                                            <img src="{{ $imageUrlBase }}0_advert_sb-a1.gif" class="w-100">
                                        </a>
                                    </div>
                                @else
                                    <div class="bg-color-light-scale-1 mt-4">
                                        <a target="_blank"
                                           href="https://www.itseducation.asia/inside-news-on-schools-hong-kong.php">
                                            <img src="{{ $imageUrlBase }}hk-insidenews-banner-a1.jpg" class="w-100">
                                        </a>
                                    </div>

                                    <div class="bg-color-light-scale-1 mt-4">
                                        <a target="_blank"
                                           href="https://www.itseducation.asia/singapore/inside-news-on-schools-singapore.php">
                                            <img src="{{ $imageUrlBase }}sg-insidenews-banner-a1.jpg" class="w-100">
                                        </a>
                                    </div>
                                    <div class="bg-color-light-scale-1 px-3 py-3 mt-4">
                                        <a alt="School Guide" target="_blank"
                                           href="https://www.itseducation.asia/school-guide/">
                                            <img src="{{ $imageUrlBase }}sbar-5-a1.jpg" class="w-100">
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <!-- Advance Search -->
    <form id="school-search-filter" class="white-popup-block mfp-hide">
        <div class="form-row mt-2">
            <div class="col-sm-12">
                <h2 class="text-center" style="font-weight: 900;">Advance School Filter</h2>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-lg-12">
                <input type="text" placeholder="School Name" class="form-control h-100" name="schoolName"
                       value="{{app('request')->input('schoolName')}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-lg-6">
                <select name="country" id="ad-country" class="form-control h-100">
                    <option
                        value="" {{ empty(app('request')->input('country')) || app('request')->input('country') == "" ? 'selected' : '' }}>
                        Any Country
                    </option>
                    <option value="Hong Kong" {{ app('request')->input('country') == "Hong Kong" ? 'selected' : '' }}>
                        Hong Kong
                    </option>
                    <option value="Singapore" {{ app('request')->input('country') == "Singapore" ? 'selected' : '' }}>
                        Singapore
                    </option>
                </select>
            </div>
            <div class="form-group col-lg-6">
                <select name="location" id="ad-location" class="h-100 form-control">
                    <option
                        value="" {{ empty(app('request')->input('location')) || app('request')->input('location') == "" ? 'selected' : '' }}>
                        All Areas
                    </option>
                    <option value="">-- select country to show locations --</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-lg-6">
                <select name="type" id="type" class="h-100 form-control">
                    <option
                        value="" {{ empty(app('request')->input('type')) || app('request')->input('type') == "" ? 'selected' : '' }}>
                        Any School Type
                    </option>
                    <option value="Nursery" {{ app('request')->input('type') == "Nursery" ? 'selected' : '' }}>Nursery
                    </option>
                    <option value="Pre-Prep" {{ app('request')->input('type') == "Pre-Prep" ? 'selected' : '' }}>
                        Pre-Prep
                    </option>
                    <option value="Prep" {{ app('request')->input('type') == "Prep" ? 'selected' : '' }}>Prep</option>
                    <option value="Senior" {{ app('request')->input('type') == "Senior" ? 'selected' : '' }}>Senior
                    </option>
                    <option value="Sixth Form" {{ app('request')->input('type') == "Sixth Form" ? 'selected' : '' }}>
                        Sixth Form
                    </option>
                </select>
            </div>

            <div class="form-group col-lg-6">
                <select name="gender" id="gender" class="form-control h-100">
                    <option
                        value="" {{ empty(app('request')->input('gender')) || app('request')->input('gender') == "" ? 'selected' : '' }}>
                        Any Gender
                    </option>
                    <option value="Co-ed" {{ app('request')->input('gender') == "Co-Educational" ? 'selected' : '' }}>
                        Co-Educational
                    </option>
                    <option value="Boys" {{ app('request')->input('gender') == "Boys" ? 'selected' : '' }}>Boys</option>
                    <option value="Girls" {{ app('request')->input('gender') == "Girls" ? 'selected' : '' }}>Girls
                    </option>
                </select>
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="form-group col text-center">
                <button type="submit" class="smbtbn btn btn-secondary mr-1 px-5">Search Now</button>
                <input type="button" value="Clear Search" class="smbtbn btn btn-light px-5"
                       onclick="window.location = '/school-search';">
            </div>
        </div>

    </form>

@endsection

@section('local-assets')

    <link rel="stylesheet" href="{{ $urlBase }}/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{ $urlBase }}/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{ $urlBase }}/vendor/rs-plugin/css/navigation.css">


    <link rel="stylesheet" href="{{ $urlBase }}/admin/vendor/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="{{ $urlBase }}/admin/vendor/jquery-ui/jquery-ui.theme.css"/>

    <style>

        .cs-compare-widget {

        }

        .cs-compare-widget ul {
            padding-left: 0;
            margin-bottom: 1px;
        }

        .cs-compare-widget ul li {
            list-style: none;
            padding: 18px 10px;
            border: 1px solid #ececec;
            margin-bottom: 8px;
            position: relative;
            font-weight: 700;
            background: #333b48;
            font-size: 12px;
        }

        .cs-compare-widget ul li a {
            color: #fff;
            transition: .5s;
        }

        .cs-compare-widget ul li a:hover {
            color: #59ccff;
        }

        .cs-compare-widget ul li span {
            position: absolute;
            top: 0;
            right: 10px;
            color: #ff2d2d;
            cursor: pointer;
        }

        .custom-thumb-info-title {
            min-height: 120px !important;
        }

        .thumb-info .thumb-info-inner {
            margin-bottom: 5px;
            line-height: 1.1;
        }

        .thumb-info img {
            width: 105% !important;
            max-width: 105% !important;
        }

        .premier-tag {
            background: rgb(253, 151, 47);
            color: rgb(255, 255, 255);
            text-transform: uppercase;
            padding: 2px 102px;
            position: absolute;
            right: -78px;
            top: 44px;
            transform: rotate(45deg);
        }

        .premier-border {
            border: 2px solid rgb(220, 221, 224);
            width: 90%;
            position: absolute;
            height: 90%;
            top: 5%;
            left: 5%;
        }

        .compare-icon {
            position: absolute;
            z-index: 999;
            right: 8px;
            background: #fff;
            bottom: 8px;
            padding: 5px 10px;
        }

    </style>

@endsection

@section('local-scripts')

    <script src="{{ $urlBase }}/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{ $urlBase }}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ $urlBase }}/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ $urlBase }}/js/views/view.contact.js"></script>
    <script src="{{ $urlBase }}/js/demos/demo-real-estate.js"></script>

    <script src="{{ $urlBase }}/admin/vendor/jquery-ui/jquery-ui.js"></script>
    <script src="{{ $urlBase }}/admin/js/theme.admin.extension.js"></script>
    <script src="{{ $urlBase }}/admin/js/examples/examples.advanced.form.js"></script>

    <script>
        function appendQs(key, value) {
            var url = location.href;
            window.location.href = url + (url.indexOf('?') >= 0 ? "&" : '?') + encodeURIComponent(key + '[]') + "=" + encodeURIComponent(value);
        }

        function rmParam(key, value) {
            var url = location.href;
            var inV = "&" + encodeURIComponent(key + '[]') + "=" + encodeURIComponent(value);

            if (url.indexOf(inV) >= 0)
                url = url.replace(inV, "");
            else
                url = url.replace("?" + encodeURIComponent(key + '[]') + "=" + encodeURIComponent(value), "");

            window.location.href = url;
        }

        function submitForm() {
            document.getElementById("cmp-frm").submit();
        }


        function maxSchoolCP() {
            alert('You can only compare up to 4 schools. Please reduce the school to proceed.');
        }
    </script>

@endsection

