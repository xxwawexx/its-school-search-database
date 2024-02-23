@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">Finding the Best Secondary Schools in Singapore</span><br>
                </h1>
            </header>
        </div>

        <section class="page-header page-header-modern page-header-md page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block">
                            <li>
                            @if( url()->current() == "https://school.itseducation.asia/singapore/secondary-schools-sg")
                                <a href="https://school.itseducation.asia/">Home</a>
                            @else
                                <a href="https://itseducation.asia/school/">Home</a>
                            @endif
                            </li>

                            @if( url()->current() == "https://school.itseducation.asia/singapore/secondary-schools-sg")
                                <li><a href="https://school.itseducation.asia/singapore">Singapore</a></li>
                            @else
                                <li><a href="https://itseducation.asia/school/singapore">Singapore</a></li>
                            @endif

                            <li class="active">Secondary Schools in Singapore</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section>
        <div class="container container-lg py-5">
            <div class="row">
                <div class="col-lg-9">
                    <p>
                        Are you looking for the top secondary school in Singapore? There are not just those catering to Singaporean nationals; there are world-renowned international secondary schools. The information which follows highlights the best local and international schools in Singapore. Beyond the local Singaporean curriculum with the IBDP pathway, there are French, Australian, Swiss, German, Dutch, Indian, Korean and Japanese. Here is how you can select the best secondary school in Singapore.
                    </p>

                    <h2>
                        List of Top Secondary Schools in Singapore
                    </h2>

                    <p>
                        Few international families send their children to local schools. Reasons vary, but the primary reasons are the stringent entrance process, rote learning, and pressure to do well academically, which can be enormous on a young adult. Also, getting into the top local schools can be difficult for expatriates as Singaporean citizens have priority on the waiting list. A high school Singapore life is more than academics; expanding creative skills, acquiring new languages and skills and building social confidence are all a massive part of secondary school education. Only some of the schools are listed here; you can find more on our school search database: <a href="https://www.itseducation.asia/school/">ITS Education Asia - School Search Database</a>
                    </p>

                    <p>
                        <strong>Local Schools:</strong> <br>
                        Methodist Girls’ Secondary School <br>
                        Raffles Girls’ Secondary School <br>
                        Raffles Institution Secondary <br>
                        Anglo-Chinese School (Independent) <br>
                        Hwa Chong Institution
                    </p>

                    <p>
                        <strong>International Schools:</strong> <br>
                        Australian International School <br>
                        Canadian International School <br>
                        Dover Court International School <br>
                        Dulwich College (Singapore) <br>
                        GESS <br>
                        GIIS SMART Campus  <br>
                        North London Collegiate School (Singapore) <br>
                        Singapore American School <br>
                        Stamford American International School <br>
                        Tanglin Trust School <br>
                        UWC South East Asia <br>
                    </p>

                    <h2>
                        Criteria for Choosing a Secondary School in Singapore
                    </h2>

                    <p>
                        When you begin your school search for a secondary school in Singapore, you will identify instantly that all the schools have impressive marketing techniques, glossy brochures, adverts in local magazines, and a strong presence on social media. In truth, no matter what you review on different platforms, there is no such thing as the perfect secondary school Singapore life. Honestly, this is an illusion. Therefore, it is essential to look beyond all this and examine the intricacies of all the schools which interest you. And there is certainly not one top-ranking school in Singapore over all the other excellent schools. What it is all about when your child is entering secondary school or even moving to another school is the ‘right fit’. Secondary-age students have different needs than primary-aged children. Their talents, interests, and academic preferences have surfaced, and their life choices and plans for their tertiary education are slowly creeping into their minds. With this said you will need to partner with your child to ensure that the school meets their academic needs and provides them with the opportunities to reach their full potential and ultimately enter the best universities. Lastly, the parental grapevine is remarkably rewarding when you need answers. Ignore the comments on social media and find parents who know the inside scoop. And there is no substitute for getting your feet in the doors of the schools. Meet the teachers, ask questions, talk to the other students and keep your eye open for everything you know your child needs to succeed and wants.
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/RlE6VwWmA83B7JvD-primary.jpg); background-size: cover; background-position: center center;" alt="HWA Chong International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/HWA+Chong+International+School" class="btn btn-primary s-btn">HWA Chong International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/HWA+Chong+International+School" class="btn btn-primary s-btn">HWA Chong International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/bPOlOFTeTW0jSj7p-primary.jpg); background-size: cover; background-position: center center;" alt="ISS International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ISS+International+School" class="btn btn-primary s-btn">ISS International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ISS+International+School" class="btn btn-primary s-btn">ISS International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/AJTvMsHCZz2gbhSU-primary.jpg); background-size: cover; background-position: center center;" alt="Canadian International School - Tanjong Katong Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Canadian+International+School+-+Tanjong+Katong+Campus" class="btn btn-primary s-btn">Canadian International School - Tanjong Katong Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Canadian+International+School+-+Tanjong+Katong+Campus" class="btn btn-primary s-btn">Canadian International School - Tanjong Katong Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/MasXuQAnDdJHZ3bk-primary.jpg); background-size: cover; background-position: center center;" alt="Tanglin Trust School Singapore">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Tanglin+Trust+School+Singapore" class="btn btn-primary s-btn">Tanglin Trust School Singapore</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Tanglin+Trust+School+Singapore" class="btn btn-primary s-btn">Tanglin Trust School Singapore</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/DRY4Q9q076igbx6T-primary.jpg); background-size: cover; background-position: center center;" alt="North London Collegiate School (Singapore)">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/North+London+Collegiate+School+%28Singapore%29" class="btn btn-primary s-btn">North London Collegiate School (Singapore)</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/North+London+Collegiate+School+%28Singapore%29" class="btn btn-primary s-btn">North London Collegiate School (Singapore)</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/3BauZBVLKtctP2Hs-primary.jpg); background-size: cover; background-position: center center;" alt="XCL World Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/XCL+World+Academy" class="btn btn-primary s-btn">XCL World Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/XCL+World+Academy" class="btn btn-primary s-btn">XCL World Academy</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/Jk4n1dRGVQHFE1cL-primary.jpg); background-size: cover; background-position: center center;" alt="Tanglin Trust School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Tanglin+Trust+School" class="btn btn-primary s-btn">Tanglin Trust School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Tanglin+Trust+School" class="btn btn-primary s-btn">Tanglin Trust School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/2CkdxSlDvrwWvruV-primary.jpg); background-size: cover; background-position: center center;" alt="Dover Court International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Dover+Court+International+School" class="btn btn-primary s-btn">Dover Court International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Dover+Court+International+School" class="btn btn-primary s-btn">Dover Court International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/ROE2wOephpPtf13V-primary.jpg); background-size: cover; background-position: center center;" alt="Canadian International School - Lakeside Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Canadian+International+School+-+Lakeside+Campus" class="btn btn-primary s-btn">Canadian International School - Lakeside Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Canadian+International+School+-+Lakeside+Campus" class="btn btn-primary s-btn">Canadian International School - Lakeside Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/e9PgD0OW9N0Ay1RA-primary.jpg); background-size: cover; background-position: center center;" alt="Dulwich College (SINGAPORE)">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Dulwich+College+%28SINGAPORE%29" class="btn btn-primary s-btn">Dulwich College (SINGAPORE)</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Dulwich+College+%28SINGAPORE%29" class="btn btn-primary s-btn">Dulwich College (SINGAPORE)</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/vENIJZIIlZ5aLcIB-primary.jpg); background-size: cover; background-position: center center;" alt="Nexus International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nexus+International+School" class="btn btn-primary s-btn">Nexus International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nexus+International+School" class="btn btn-primary s-btn">Nexus International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/IHSKmFXIP10v0X5Q-primary.jpg); background-size: cover; background-position: center center;" alt="International French School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/International+French+School" class="btn btn-primary s-btn">International French School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+French+School" class="btn btn-primary s-btn">International French School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UpQDLmTyS9smppFC-primary.jpg); background-size: cover; background-position: center center;" alt="Insworld Institute">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Insworld+Institute" class="btn btn-primary s-btn">Insworld Institute</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Insworld+Institute" class="btn btn-primary s-btn">Insworld Institute</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/9WRvMnSEXipmg4t9-primary.jpg); background-size: cover; background-position: center center;" alt="Hillside World Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hillside+World+Academy" class="btn btn-primary s-btn">Hillside World Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hillside+World+Academy" class="btn btn-primary s-btn">Hillside World Academy</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/Uo0O5HAtmbdhD8rw-primary.jpg); background-size: cover; background-position: center center;" alt="Global Indian International School - East Coast Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Global+Indian+International+School+-+East+Coast+Campus" class="btn btn-primary s-btn">Global Indian International School - East Coast Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Global+Indian+International+School+-+East+Coast+Campus" class="btn btn-primary s-btn">Global Indian International School - East Coast Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/0rZjeBM5VfjN8I3F-primary.jpg); background-size: cover; background-position: center center;" alt="St Joseph's Institution International">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/St+Joseph+Institution+International" class="btn btn-primary s-btn">St Joseph's Institution International</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/St+Joseph+Institution+International" class="btn btn-primary s-btn">St Joseph's Institution International</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/Xc9qbVr7rAqfDQOU-primary.jpg); background-size: cover; background-position: center center;" alt="Stamford American International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Stamford+American+International+School" class="btn btn-primary s-btn">Stamford American International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Stamford+American+International+School" class="btn btn-primary s-btn">Stamford American International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/5FAo1hRnhNUzzwu7-primary.jpg); background-size: cover; background-position: center center;" alt="Invictus International School - Sentosa Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Invictus+International+School+-+Sentosa+Campus" class="btn btn-primary s-btn">Invictus International School - Sentosa Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Invictus+International+School+-+Sentosa+Campus" class="btn btn-primary s-btn">Invictus International School - Sentosa Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/SDRy6a34Jx3GtsAU-primary.jpg); background-size: cover; background-position: center center;" alt="Singapore American School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Singapore+American+School" class="btn btn-primary s-btn">Singapore American School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Singapore+American+School" class="btn btn-primary s-btn">Singapore American School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/1pBTZQRhxQfJkOAv-primary.jpg); background-size: cover; background-position: center center;" alt="Sir Manasseh Meyer International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Sir+Manasseh+Meyer+International+School" class="btn btn-primary s-btn">Sir Manasseh Meyer International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Sir+Manasseh+Meyer+International+School" class="btn btn-primary s-btn">Sir Manasseh Meyer International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/KPUi4w941Xff3q2m-primary.jpg); background-size: cover; background-position: center center;" alt="One World International School - Nanyang Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/One+World+International+School+-+Nanyang+Campus" class="btn btn-primary s-btn">One World International School - Nanyang Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/One+World+International+School+-+Nanyang+Campus" class="btn btn-primary s-btn">One World International School - Nanyang Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/P69s5Ut0U4qa2Upk-primary.jpg); background-size: cover; background-position: center center;" alt="Global Indian International School - SMART Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Global+Indian+International+School+-+SMART+Campus" class="btn btn-primary s-btn">Global Indian International School - SMART Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Global+Indian+International+School+-+SMART+Campus" class="btn btn-primary s-btn">Global Indian International School - SMART Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/6532SCRNJhkS4QWH-primary.jpg); background-size: cover; background-position: center center;" alt="ISS International School - High School Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ISS+International+School+-+High+School+Campus" class="btn btn-primary s-btn">ISS International School - High School Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ISS+International+School+-+High+School+Campus" class="btn btn-primary s-btn">ISS International School - High School Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/ics_sg_pr.jpg); background-size: cover; background-position: center center;" alt="International Community School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/International+Community+School" class="btn btn-primary s-btn">International Community School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+Community+School" class="btn btn-primary s-btn">International Community School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/kaO1gXRu6NBCGZgD-primary.jpg); background-size: cover; background-position: center center;" alt="NPS International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/NPS+International+School" class="btn btn-primary s-btn">NPS International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/NPS+International+School" class="btn btn-primary s-btn">NPS International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/XpjpTui5z1XbVoxU-primary.jpg); background-size: cover; background-position: center center;" alt="Chatsworth International School - Bukit Timah Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Chatsworth+International+School+-+Bukit+Timah+Campus" class="btn btn-primary s-btn">Chatsworth International School - Bukit Timah Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Chatsworth+International+School+-+Bukit+Timah+Campus" class="btn btn-primary s-btn">Chatsworth International School - Bukit Timah Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/XD6FBVV95EsGV71d-primary.jpg); background-size: cover; background-position: center center;" alt="Middleton International School - Tampine Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Middleton+International+School+-+Tampine+Campus" class="btn btn-primary s-btn">Middleton International School - Tampine Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Middleton+International+School+-+Tampine+Campus" class="btn btn-primary s-btn">Middleton International School - Tampine Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/k1R3CzxPWz9H4fMs-primary.jpg); background-size: cover; background-position: center center;" alt="GESS">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/GESS" class="btn btn-primary s-btn">GESS</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/GESS" class="btn btn-primary s-btn">GESS</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/ofs_sg_pr.jpg); background-size: cover; background-position: center center;" alt="Overseas Family School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Overseas+Family+School" class="btn btn-primary s-btn">Overseas Family School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Overseas+Family+School" class="btn btn-primary s-btn">Overseas Family School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/p2wKV6M4XATWt6Ud-primary.jpg); background-size: cover; background-position: center center;" alt="Invictus International School - Dempsey Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-sg")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Invictus+International+School+-+Dempsey+Campus" class="btn btn-primary s-btn">Invictus International School - Dempsey Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Invictus+International+School+-+Dempsey+Campus" class="btn btn-primary s-btn">Invictus International School - Dempsey Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4">

                    <div class="cbg-white">
                        <a href="https://www.shrewsbury.edu.hk/events-community/events/talk-tour?utm_source=ITS%20Education%20Asia&amp;utm_medium=banner&amp;utm_campaign=Talk%20and%20Tour" target="_blank">
                            <img src="https://itseducation.asia/assets/images/banner-a10.jpg" alt="Shrewsbury International School">
                        </a>
                    </div>

                    <div class="cbg-white">
                        <a href="https://www.malverncollege.org.hk/" target="_blank">
                            <img src="https://itseducation.asia/assets/images/malvern_college_banner-oct-19.jpg" alt="Malvern College">
                        </a>
                    </div>

                    <div class="cbg-white">
                        <a href="https://nlcssingapore.sg/" target="_blank">
                            <img src="https://itseducation.asia/assets/images/Web-banner-for-ITS-Asia-Education1_21-02-22.jpg" alt="North London Collegiate School Singapore">
                        </a>
                    </div>

                    <p class="mt-4 mt-md-0"></p>
                    <div id="sb-bc" class="d-none bg-white atom-dv">
                        <a href="https://singapore.dulwich.org/" target="_blank">
                            <img src="https://itseducation.asia/assets/images/Dulwich_Banner.jpg" alt="Dulwich College Singapore">
                        </a>
                    </div>

                    <div id="sb-bc" class="bg-white atom-dv">
                        <a target="_blank" href="https://itseducation.asia/school/">
                            <img width="100%" src="https://itseducation.asia/assets/images/ITS_ssdb-v3.png" alt="ITS School Search Database">
                        </a>
                    </div>

                    <div id="sb-bc" class="bg-white atom-dv">
                        <a target="_blank" href="https://itseducation.asia/yci-lab.php">
                            <img width="100%" src="https://itseducation.asia/assets/images/yci-lab.png" alt="YCI Lab banner">
                        </a>
                    </div>

                    <div id="sb-menu" class="bg-white">
                        <a href="https://itseducation.asia/article-library">
                            <button class="sb_button" type="button" data-hover="View All List Of Articles" data-active="Article Librarys">
                                <span><i class="fa fa-rss-square" aria-hidden="true"></i> ITS Article Library</span>
                            </button>
                        </a>

                        <hr>

                        <a href="https://itseducation.asia/free-plagiarism-checker">
                            <button class="sb_button" type="button" data-hover="Try Our Plagiarism Checher" data-active="Free Plagiarism Checker">
                                <span><i class="fa fa-book" aria-hidden="true"></i>Free Plagiarism Checker</span>
                            </button>
                        </a>

                        <hr>

                        <a href="https://itseducation.asia/staff">
                            <button class="sb_button" type="button" data-hover="View Staff" data-active="Meet Our Staff">
                                <span><i class="fa fa-users" aria-hidden="true"></i> Meet Our Staff</span>
                            </button>
                        </a>

                        <hr>

                        <a href="https://itseducation.asia/services.htm">
                            <button class="sb_button" type="button" data-hover="View Fees &amp; Charges" data-active="View Fees &amp; Charges">
                                <span><i class="fa fa-usd" aria-hidden="true"></i>Fees &amp; Charges </span>
                            </button>
                        </a>

                        <hr>

                        <a href="https://school.itseducation.asia/">
                            <button class="sb_button" type="button" data-hover="Find Your School" data-active="School Search Database">
                                <span><i class="fa fa-home" aria-hidden="true"></i> School Search Database</span>
                            </button>
                        </a>
                    </div>


                    <div class="card rounded-10">
                        <div class="card-body bg-dark text-light p-0" style="background-color: #343a40 !important;">
                            <blockquote class="blockquote mb-0 px-3 pt-3">
                                <p>
                                    <span><i style="font-size: 1.8em;opacity: 0.5" class="fa fa-quote-left" aria-hidden="true"></i></span><span id="quote-text">We can only learn to love by loving.</span>
                                </p>
                            </blockquote>
                            <div class="card-footer bg-secondary" style="background-color: #6c757d !important;">
                                <footer style="font-size: 100%" id="quote-author" class="blockquote-footer text-white">Iris Murdoch, type.fit</footer>
                            </div>
                        </div>
                    </div>
                    <script>
                        var quoteText = document.getElementById("quote-text");
                        const myRequest = new Request('https://type.fit/api/quotes',{
                            method: 'GET',
                        })
                        setInterval(function(){
                            fetch(myRequest)
                                .then(response => {
                                    if(!response.ok){
                                        throw new Error('Network response was not ok')
                                    }
                                    return response.json()
                                })
                                .then(data => {
                                    data.forEach(element => {
                                        //random number for quote
                                        let randomQuote = Math.floor(Math.random() * data.length)
                                        document.getElementById("quote-text").innerHTML = data[randomQuote].text
                                        document.getElementById("quote-author").innerHTML = data[randomQuote].author
                                        // console.log(element.text)
                                    });
                                })
                        },10000)
                    </script>
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

    <link rel="canonical" href="https://itseducation.asia/school/singapore/secondary-schools-sg" />

    <style>
        /* landing page */

        #skl-div {
        position: relative;
        background: url(https://itseducation.asia/school/img/school-rev-bg1.jpg);
            background-position-x: 0%;
            background-position-y: 0%;
            background-repeat: repeat;
            background-size: auto;
        height: calc(100vh - 200px);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        #h-div {
        bottom: 100px;
        right: calc(100px - 20px);
        }

        .text-light {
        color: #f8f9fa !important;
        }

        .text-right {
        text-align: right !important;
        }

        .position-absolute {
        position: absolute !important;
        }

        header span {
        padding: 2px 10px;
        color: #fff;
        }

        .h1_titles {
            background: rgba(000 ,0 ,0 ,0.5);
        }

        .cbg-white {
        margin-bottom: 15px;
        border: 1px solid #d8d8d8;
        margin-bottom: 15px;
        box-shadow: 0 0 7px #bbb;
        border-radius: 2px;
        text-align: center;
        padding: 5px;
        margin-top: 1rem;
        }

        .cbg-white img {
        width: 100%;
        }

        #sb-menu {
        border: 1px solid #f0f0f0;
        margin-bottom: 15px;
        box-shadow: 0 0 5px #eaeaea;
        border-radius: 2px;
        padding: 16px 25px 16px 25px;
        text-align: center;
        }

        .sb_button {
        display: inline-block;
        position: relative;
        margin-bottom: 0;
        padding: 5px;
        border: 1px solid #b5b5b5;
        overflow: hidden;
        text-decoration: none;
        font-size: 20px;
        outline: none;
        color: #0092c8;
        background: transparent;
        font-family: 'raleway', sans-serif;
        width: 100%;
        border: none;
        text-align: left;
        }

        .bg-dark {
        background-color: #343a40 !important;
        }

        .text-light {
        color: #f8f9fa !important;
        }

        .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0,0,0,.03);
        border-top: 1px solid rgba(0,0,0,.125);
        }

        #quote-text{
            color: #fff;
        }

        .blockquote.mb-0.px-3.pt-3 {
            border-left: none;
        }

        .fa.fa-quote-left{
            color: #f8f9fa !important;
        }

        .outer-box {
        position: relative;
        width: 350px;
        height: 350px;
        max-width: 100%;
        }

        .content-b-desc {
        display: table;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        position: absolute;
        width: 100%;
        top: 0;
        height: 100%;
        max-width: 350px;
        }

        .content-wrap {
        display: table-cell;
        vertical-align: middle;
        background: rgba(79, 192, 238, 0.7);
        transition: .5s ease;
        height: 100%;
        }

        .page_title {
        color: #fff;
        text-align: center;
        width: 100%;
        z-index: 2;
        position: absolute !important;
        bottom: 0;
        font-size: 19px;
        line-height: 100%;
        padding: 15px !important;
        background: #00BCD4 !important;
        margin: 0 !important;
        }

        .page_title h2{
        color: #fff !important;
        }

        .container-fluid{
            padding-left: 0 !important;
        }

        .breadcrumb.d-block li a {
        color: #b3f6ff !important;
        }

        #h-div span {
        text-transform: uppercase;
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
