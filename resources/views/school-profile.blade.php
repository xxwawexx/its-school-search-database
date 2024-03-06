@extends('layouts.main')

@section('title', $title)

@section('content')

    <div id="sc-profile-wrapper">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container container-lg">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        @if(strpos($school['status'], "premier") !== false)
                            <img src="{{ $imageUrlBase }}blue-ribbon.png" class="mw-100 fs-icon">
                        @endif
                        <h1 class="text-dark"><strong>{{ $school['name'] }}
                                @if(strpos($school['status'], "premier") !== false)<br> <small
                                    style="white-space: nowrap;">( Featured School
                                    )</small>@endif
                            </strong>
                        </h1>

                        <div class="col-md-12 px-0 mt-2">
                            <a href="#school-details" data-hash data-hash-offset="100">
                                <input type="button" value="School Details" class="btr-btn px-2 mr-2 mb-2">
                            </a>

                            @if(strpos($school['status'], "premier") === false)
                                <a href="#about-the-school" data-hash data-hash-offset="100">
                                    <input type="button" value="About The School" class="btr-btn px-2 mr-2 mb-2">
                                </a>
                            @endif

                            <a href="#contact-details" data-hash data-hash-offset="100">
                                <input type="button" value="Contact Details" class="btr-btn px-2 mr-2 mb-2">
                            </a>
                            <a href="#map" data-hash data-hash-offset="100">
                                <input type="button" value="Map Location" class="btr-btn px-2 mr-2 mb-2">
                            </a>

                            @if(strpos($school['status'], "premier") !== false)
                                <a href="#featured-section" data-hash data-hash-offset="100">
                                    <input type="button" value="About The School" class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                                <a href="#premier-curriculum" data-hash data-hash-offset="100">
                                    <input type="button" value="Curriculum" class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                                <a href="#video-gallery" data-hash data-hash-offset="100">
                                    <input type="button" value="Video Gallery" class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                                <a href="#inside-the-school" data-hash data-hash-offset="100">
                                    <input type="button" value="Parents Review" class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                                <a href="#inside-the-school" data-hash data-hash-offset="100">
                                    <input type="button" value="Specialist Programmes"
                                           class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                                <a href="#inside-the-school" data-hash data-hash-offset="100">
                                    <input type="button" value="Inside The School"
                                           class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                                <a href="#inside-the-school" data-hash data-hash-offset="100">
                                    <input type="button" value="Education Philosophy"
                                           class="btr-btn px-2 mr-2 mb-2 pt-btn">
                                </a>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right">
                            <li id="haha"></li>
                            <li class="active">{{ $school['name'] }} Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container container-lg">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">

                        <span
                            class="thumb-info-listing-type thumb-info-listing-type-detail bg-color-secondary text-uppercase text-color-light font-weight-semibold p-2 pl-3 pr-3">
                            {{ $school['country'] }}
                        </span>

                            <div class="thumb-gallery">
                                <div class="lightbox"
                                     data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                                    <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover"
                                         id="thumbGalleryDetail">
                                        @if($simg)
                                            @foreach($simg as $si)
                                                <div>
                                                    <a href="{{ $imageUrlBase }}school/{{ $si['filename'] }}">
                                                <span
                                                    class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
                                                    <span class="thumb-info-wrapper text-4">
                                                        <img alt="Property Detail"
                                                             src="{{ $imageUrlBase }}school/{{ $si['filename'] }}"
                                                             class="img-fluid">
                                                        <span class="thumb-info-title text-4">
                                                            <span class="thumb-info-inner text-4"><i
                                                                    class="fas fa-search text-4"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div>
                                                <a href="https://via.placeholder.com/1050x560?text=No+Image+Found">
                                                <span
                                                    class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
                                                    <span class="thumb-info-wrapper text-4">
                                                        <img alt="Property Detail"
                                                             src="https://via.placeholder.com/1050x560?text=No+Image+Found"
                                                             class="img-fluid">
                                                        <span class="thumb-info-title text-4">
                                                            <span class="thumb-info-inner text-4"><i
                                                                    class="fas fa-search text-4"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt"
                                     id="thumbGalleryThumbs">
                                    @if($simg)
                                        @foreach($simg as $si)
                                            <div>
                                                <img alt="Property Detail"
                                                     src="{{ $imageUrlBase }}school/{{ $si['filename'] }}"
                                                     class="img-fluid cur-pointer">
                                            </div>
                                        @endforeach
                                    @else
                                        <div>
                                            <img alt="Property Detail"
                                                 src="https://via.placeholder.com/1050x560?text=No+Image+Found"
                                                 class="img-fluid cur-pointer">
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 mt-3">

                            <table class="table table-striped sinfo" id="school-details">
                                <colgroup>
                                    <col width="30%">
                                    <col width="70%">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <td class="font-weight-bold bg-color-primary text-light align-middle">
                                        Head of School
                                    </td>
                                    <td class="font-weight-bold align-middle bg-color-primary text-light">
                                        {!! $school['info']['principal'] ? $school['info']['principal'] : '<span data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="The school does not make this information public."><i class="fas fa-question-circle"></i></span>' !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gender
                                    </td>
                                    <td>
                                        {{ $school['info']['gender'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        School Type
                                    </td>
                                    <td>
                                        {{ $school['type'] && is_array(json_decode($school['type'])) ? implode(", ", json_decode($school['type'])) : '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ages
                                    </td>
                                    <td>
                                        {{ $school['info']['agesMin'] && $school['info']['agesMax'] ? $school['info']['agesMin'] . ' - ' . $school['info']['agesMax'] : '' }}
                                    </td>
                                </tr>
                                @if($school['info']['pupils'])
                                    <tr>
                                        <td>
                                            Number of Pupils
                                        </td>
                                        <td>
                                            {{ $school['info']['pupils'] }}
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>
                                        Curriculum
                                    </td>
                                    <td>
                                        {{ $school['info']['curriculum'] && is_array(json_decode($school['info']['curriculum'])) ? implode(", ", json_decode($school['info']['curriculum'])) : '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Fees
                                    </td>
                                    <td>
                                        {!! $school['info']['fee_a'] ? 'Nursery: <strong>' . $school['info']['fee_a'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_b'] ? 'K1-K2: <strong>' . $school['info']['fee_b'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_c'] ? 'Reception: <strong>' . $school['info']['fee_c'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_d'] ? 'Year 1-6: <strong>' . $school['info']['fee_d'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_e'] ? 'Years 7-8: <strong>' . $school['info']['fee_e'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_f'] ? 'Years 9-11: <strong>' . $school['info']['fee_f'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_g'] ? 'Years 12: <strong>' . $school['info']['fee_g'] .'</strong>; ' : '' !!}
                                        {!! $school['info']['fee_h'] ? 'Years 13: <strong>' . $school['info']['fee_h'] .'</strong>; ' : '' !!}
                                    </td>
                                </tr>
                                @if($school['info']['feesInfo'])
                                    <tr>
                                        <td>
                                            Fees Additional Info
                                        </td>
                                        <td>
                                            <a class="font-weight-bold" target="_blank"
                                               href="{{ $school['info']['feesInfo'] }}">
                                                Click Here</a>
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>
                                        Debenture
                                    </td>
                                    <td>
                                        {{ $school['info']['debenture'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Language of Instruction
                                    </td>
                                    <td>
                                        {{ $school['info']['language'] ? implode(", ", json_decode($school['info']['language'])) : '' }}
                                    </td>
                                </tr>
                                @if($school['info']['applicationDates'])
                                    <tr>
                                        <td>
                                            Application Dates
                                        </td>
                                        <td>
                                            {{ $school['info']['applicationDates'] }}
                                        </td>
                                    </tr>
                                @endif
                                @if($school['info']['website'])
                                    <tr>
                                        <td>
                                            Website
                                        </td>
                                        <td>
                                            <a class="font-weight-bold" target="_blank"
                                               href="{{ $school['info']['website'] }}">
                                                Click Here</a>
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>
                                        Address
                                    </td>
                                    <td>
                                        <a href="#map" data-hash
                                           data-hash-offset="100">{{ $school['address'] }}</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    @if(strpos($school['status'], "premier") === false)
                        <hr class="mb-3">
                    @endif

                    <div class="row">
                        <div class="col">

                            @if(strpos($school['status'], "premier") === false)

                                <h4 id="about-the-school">About The School</h4>

                                <p>{!! htmlspecialchars_decode($school['info']['description']) !!}</p>

                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div>
                        <aside class="sidebar">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 mb-4">

                                    @if($school['info']['id'] == 10058)
                                    <div class="bg-color-light-scale-1 p-3">
                                        <div>
                                            <a href="https://bit.ly/3rzXFi9" target="_blank"><img src="{{ $imageUrlBase }}ITS-Banner_stamford.webp" class="w-100"></a>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="bg-color-light-scale-1 px-3 pb-3 pt-2 mt-4">

                                        <h3 class="font-weight-extra-bold text-4 text-center mb-3">Filter School</h3>

                                        <input type="button" value="Back To Results" style="font-size: 17px !important;" class="w-100 btr-btn mb-2 text-2"
                                               onClick="javascript:history.go(-1)">

                                        <hr>

                                        <form action="{{ $urlBase }}school-search" method="get" id="ss-search">

                                            <label class="font-weight-bold mb-1 mt-2">School Name</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" name="schoolName" placeholder="Name of School"
                                                           class="w-100 form-control">
                                                </div>
                                            </div>

                                            <label class="font-weight-bold mb-1 mt-3">Country</label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <select name="country" id="country" class="form-control h-100">
                                                        <option value="" selected>Any Country</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Singapore">Singapore</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <label class="font-weight-bold mb-1 mt-3">Location</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select name="location" id="location" class="w-100 form-control">
                                                        <option value="" selected>All Areas</option>
                                                        <option value="">-- select country to show locations --</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <label class="font-weight-bold mb-1 mt-3">School Type</label>
                                            <div class="row">
                                                <div class="col-12">
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
                                            </div>

                                            <label class="font-weight-bold mb-1 mt-3">Curriculum</label>
                                            <div class="row">
                                                <div class="col-12">
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
                                            </div>

                                            <label class="font-weight-bold mb-1 mt-3">Gender</label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <select name="gender" id="gender" class="form-control h-100">
                                                        <option value="" selected>Any Gender</option>
                                                        <option value="Co-Educational">Co-Educational</option>
                                                        <option value="Boys">Boys</option>
                                                        <option value="Girls">Girls</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-100 text-center mt-4">
                                                <input type="submit" class="smbtbn btn btn-secondary mr-1"
                                                       value="Search">
                                                <input type="button" class="smbtbn btn btn-light" value="Clear Search" onclick="window.location = '{{  url('') }}/school-search';" id="tests">
                                            </div>

                                        </form>

                                    </div>

                                    @if(str_contains(url()->full(), 'Kellet'))
                                        <div class="bg-color-light-scale-1 px-3 pt-3 mt-4">
                                            <div class="owl-carousel owl-theme carousel-center-active-item mb-0"
                                                 data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'autoplay': true, 'autoplayTimeout': 8000, 'dots': true}">
                                                <div>
                                                    <a href="https://www.kellettschool.com/" alt="Kellet"
                                                       target="_blank"><img
                                                            src="{{ $imageUrlBase }}0_advert_sb-a1.gif" class="w-100"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif(str_contains(url()->full(),'Malvern'))
                                        <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mt-4">
                                            <div>
                                                <a href="https://www.malverncollege.org.hk/" alt="Malvern College HK"
                                                   target="_blank"><img
                                                        src="{{ $imageUrlBase }}malvern_college_banner-oct-19.webp" class="w-100"></a>
                                            </div>
                                        </div>
                                    @elseif(str_contains(url()->full(),'North+London+Collegiate+School+%28Singapore%29'))
                                        <div class="bg-color-light-scale-1 px-3 py-3 pb-1 mt-4">
                                            <div>
                                                <a href="http://nlcssingapore.sg/" target="_blank"><img
                                                        src="{{ $imageUrlBase }}Web-banner-for-ITS-Asia-Education1_21-02-22.webp" class="w-100"></a>
                                            </div>
                                        </div>
                                   @endif


                                    @if(strpos($school['status'], "premier") === true)

                                        <div class="bg-color-light-scale-1 px-3 py-3 mt-4">

                                            @if($school['country'] == "Hong Kong")

                                                @php $randrange = rand(1,1); @endphp

                                                @if($randrange == 1)
                                                    <a href="https://www.sais.edu.sg/virtual-admissions-tour/">
                                                        <img src="{{ $imageUrlBase }}stamford-ssd-profile-1001.webp" class="w-100">
                                                    </a>
                                                @endif

                                            @else

                                                @php $randrange = rand(1,1); @endphp

                                                @if($randrange == 1)
                                                    <a href="https://www.gwa.edu.sg/">
                                                        <img src="{{ $imageUrlBase }}1-sg-banner-a22.gif" class="w-100">
                                                    </a>
                                                @endif
                                            @endif


                                        </div>

                                    @endif

                                </div>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </div>

        @if(strpos($school['status'], "premier") !== false)

            <div class="mt-5">

                {!! htmlspecialchars_decode($school['info']['premierContent']) !!}
                {{--                @include('layouts.static')--}}


            </div>

        @endif

        <div
            class="container container-lg mt-5 {{strpos($school['status'], "premier") !== false ? 'bg-color-grey' : '' }}"
            id="map">
            <div class="row">

                @if(strpos($school['status'], "premier") === false)
                    <div class="col-md-12">
                        <hr style="margin: 4rem auto;">
                    </div>
                @endif

                <div class="container container-xl mb-5" id="contact-details">
                    <div class="row justify-content-center featured-boxes featured-boxes-style-4">
                        @if(url()->current() != 'https://school.itseducation.asia/school-profile/SSDB+Tanglin+Trust+School' || url()->current() != 'https://itseducation.asia/school-profile/SSDB+Tanglin+Trust+School')
                            <div class="col-md-4">
                                <div class="featured-box featured-box-primary" style="height: 117px;">
                                    <div class="box-content appear-animation animated fadeInUp appear-animation-visible"
                                         data-appear-animation="fadeInUp" data-appear-animation-delay="200"
                                         style="animation-delay: 200ms;">
                                        <i class="icon-featured icons icon-location-pin mb-3 text-secondary"></i>
                                        <span class="d-block opacity-7 line-height-1">SCHOOL EMAIL</span>
                                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">
                                            @if($school['info']['email'] != '')
                                                <a class="text-dark" href="mailto:{{ $school['info']['email'] }}">
                                                    {{ $school['info']['email'] }}
                                                </a>
                                            @else
                                                Not Available
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="featured-box featured-box-primary mx-5" style="height: 117px;">
                                    <div class="box-content appear-animation animated fadeInUp appear-animation-visible"
                                         data-appear-animation="fadeInUp" data-appear-animation-delay="600"
                                         style="animation-delay: 600ms;">
                                        <i class="icon-featured icons icon-call-in mb-3 text-secondary"></i>
                                        <span class="d-block opacity-7 line-height-1">SCHOOL NUMBER</span>

                                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">
                                            @if($school['info']['telNos'] != '')
                                                <a class="text-dark"
                                                   href="tel:{{ str_replace(' ', '', $school['info']['telNos']) }}">
                                                    {{ $school['info']['telNos'] }}
                                                </a>

                                            @else
                                                Not Available
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-3">
                                <div class="featured-box featured-box-primary" style="height: 117px;">
                                    <div class="box-content appear-animation animated fadeInUp appear-animation-visible"
                                         data-appear-animation="fadeInUp" data-appear-animation-delay="200"
                                         style="animation-delay: 200ms;">
                                        <i class="icon-featured icons icon-call-in mb-3 text-secondary"></i>
                                        <span class="d-block opacity-7 line-height-1">INFANT SCHOOL</span>
                                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">
                                            @if($school['info']['email'] != '')
                                                +65 6778 5577
                                                <a class="text-dark" href="mailto:infant.school@tts.edu.sg">
                                                    infant.school@tts.edu.sg
                                                </a>
                                            @else
                                                Not Available
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-box featured-box-primary" style="height: 117px;">
                                    <div class="box-content appear-animation animated fadeInUp appear-animation-visible"
                                         data-appear-animation="fadeInUp" data-appear-animation-delay="200"
                                         style="animation-delay: 200ms;">
                                        <i class="icon-featured icons icon-call-in mb-3 text-secondary"></i>
                                        <span class="d-block opacity-7 line-height-1">JUNIOR SCHOOL</span>
                                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">
                                            @if($school['info']['email'] != '')
                                                +65 6778 9000
                                                <a class="text-dark" href="mailto:junior.school@tts.edu.sg">
                                                    junior.school@tts.edu.sg
                                                </a>
                                            @else
                                                Not Available
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-box featured-box-primary" style="height: 117px;">
                                    <div class="box-content appear-animation animated fadeInUp appear-animation-visible"
                                         data-appear-animation="fadeInUp" data-appear-animation-delay="200"
                                         style="animation-delay: 200ms;">
                                        <i class="icon-featured icons icon-call-in mb-3 text-secondary"></i>
                                        <span class="d-block opacity-7 line-height-1">SENIOR SCHOOL</span>
                                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">
                                            @if($school['info']['email'] != '')
                                                +65 6770 3181/38
                                                <a class="text-dark" href="mailto:senior.school@tts.edu.sg">
                                                    senior.school@tts.edu.sg
                                                </a>
                                            @else
                                                Not Available
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="col-lg-12">
                    {!! htmlspecialchars_decode($school['info']['gmapLoc']) !!}
                </div>

            </div>
        </div>

    </div>

@endsection

@section('local-assets')
    <link rel="stylesheet" href="{{ $urlBase }}vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{ $urlBase }}vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{ $urlBase }}vendor/rs-plugin/css/navigation.css">

    <link rel="stylesheet" href="{{ $urlBase }}admin/vendor/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="{{ $urlBase }}admin/vendor/jquery-ui/jquery-ui.theme.css"/>
    <link rel="stylesheet" href="{{ $urlBase }}vendor/simple-line-icons/css/simple-line-icons.min.css">

    <link rel="canonical" href="{{ $urlBase . request()->path() }}" />

    <style>
        #sc-profile-wrapper td a {
            color: #255a92 !important;
        }

        .custom-thumb-info-title {
            min-height: 89px;
        }

        .sinfo i {
            color: #b5b5b5;
            font-size: 21px;
            cursor: pointer;
        }

        .btr-btn {
            background-color: transparent;
            border: 1px solid #333b48;
            color: #333b48;
            transition: .3s;
            /*font-size: 11px;*/
            font-size: 17px;
        }

        .btr-btn:hover {
            background-color: #333b48;
            border-color: #333b48;
            color: #fff
        }

        input.smbtbn {
            min-width: 100px;
        }

        .pt-btn {
            background: #cc1d2e;
            color: #ffffff;
            border-color: #cc1d2e;
        }

        .fs-icon {
            width: 31px;
            position: relative;
            top: -7px;
            margin-right: 3px;
        }

    </style>



@endsection

@section('local-scripts')

        <script src="{{ $urlBase }}vendor/isotope/jquery.isotope.min.js"></script>
        <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="{{ $urlBase }}js/views/view.contact.js"></script>
        <script src="{{ $urlBase }}js/demos/demo-real-estate.js"></script>

        <script src="{{ $urlBase }}admin/vendor/jquery-ui/jquery-ui.js"></script>
        <script src="{{ $urlBase }}admin/js/theme.admin.extension.js"></script>
        <script src="{{ $urlBase }}admin/js/examples/examples.advanced.form.js"></script>

    <script defer>
        $('#tests').click(function() {

            var form = document.getElementById('tests');
            if (window.location.href.includes('https://itseducation.asia/school')) {
                form.action = '/school/school-search';
            } else {
                form.action = '/school-search';
            }
            $('#ss-search').submit();
        });

        if (window.location.href.includes('https://itseducation.asia/school')) {
            var abc = '/school/school-search';
            } else {
                var abc = '/school-search';
            }
        document.getElementById('haha').innerHTML = '<a href="' + abc + '">SCHOOL</a>';


    </script>

    <script>
        var hkOption = {
            "Central and Western": "Central and Western",
            "Eastern District": "Eastern District",
            "Southern District": "Southern District",
            "Wan Chai": "Wan Chai",
            "Sham Shui Po": "Sham Shui Po",
            "Kowloon City": "Kowloon City",
            "Kwun Tong": "Kwun Tong",
            "Wong Tai Sin": "Wong Tai Sin",
            "Yau Tsim Mong": "Yau Tsim Mong",
            "Islands District": "Islands District",
            "Kwai Tsing": "Kwai Tsing",
            "North District": "North District",
            "Sai Kung": "Sai Kung",
            "Sha Tin": "Sha Tin",
            "Tai Po": "Tai Po",
            "Tsuen Wan": "Tsuen Wan",
            "Tuen Mun": "Tuen Mun",
            "Yuen Long": "Yuen Long"
        };

        var sgOption = {
            "Central Singapore CDC": "Central Singapore CDC",
            "North East CDC": "North East CDC",
            "North West CDC": "North West CDC",
            "South East CDC": "South East CDC",
            "South West CDC": "South West CDC"
        };

        var $el = $("#location");

        $(document).ready(function () {

            if ($("#country option:selected").text() === "Hong Kong") {
                $('#location option:gt(0)').remove();
                $.each(hkOption, function (key, value) {
                    $el.append($("<option></option>")
                        .attr("value", value).text(key));
                });
            } else if ($("#country option:selected").text() === "Singapore") {
                $('#location option:gt(0)').remove();
                $.each(sgOption, function (key, value) {
                    $el.append($("<option></option>")
                        .attr("value", value).text(key));
                });
            } else if ($("#country option:selected").text() === "") {
                $('#location option:gt(0)').remove();
                $el.append($("<option></option>")
                    .attr("value", "").text("-- select country to show locations --"));
            }

        });

        $("#country").change(function () {

            $('#location option:gt(0)').remove();

            if ($("#country option:selected").text() === "Hong Kong") {
                $.each(hkOption, function (key, value) {
                    $el.append($("<option></option>")
                        .attr("value", value).text(key));

                    if ($("#location option:selected").text() === "{{ app('request')->input('location') }}") {
                        $el.attr("selected", "selected");
                    }
                });
            } else if ($("#country option:selected").text() === "Singapore") {
                $.each(sgOption, function (key, value) {
                    $el.append($("<option></option>")
                        .attr("value", value).text(key));

                    if ($("#location option:selected").text() === "{{ app('request')->input('location') }}") {
                        $el.attr("selected", "selected");
                    }

                });
            } else {
                $el.append($("<option></option>")
                    .attr("value", "").text("-- select country to show locations --"));
            }

        });


    </script>

@endsection

