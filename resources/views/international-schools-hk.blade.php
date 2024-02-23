@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">Finding the Best International School in Hong Kong</span><br>
                    {{-- <span>SCHOOLS IN HONGKONG</span> --}}
                </h1>
            </header>
        </div>

        <section class="page-header page-header-modern page-header-md page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block">
                            <li>
                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                <a href="https://school.itseducation.asia/">Home</a>
                            @else
                                <a href="https://itseducation.asia/school/">Home</a>
                            @endif
                            </li>

                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                <li><a href="https://school.itseducation.asia/hong-kong">Hong Kong</a></li>
                            @else
                                <li><a href="https://itseducation.asia/school/hong-kong">Hong Kong</a></li>
                            @endif

                            <li class="active">International Schools in Hong Kong</li>
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
                    <h2>International Schools in Hong Kong</h2>
                    <p>
                        There are over 54 international schools in Hong Kong, defined as Private International Schools, Private Independent Schools and the English Schools Foundation (ESF). The long-established schools are very competitive and have long waitlists. Each Hong Kong international school has different admission requirements, so contacting the preferred schools directly before applying is essential. Learn more about the best international schools in Hong Kong below.
                    </p>

                    <h2>List of Top International Schools in Hong Kong</h2>
                    <p>
                        There are many schools to choose from in Hong Kong and some have been established for over 50 years. These are recognised as the top schools and the most sought-after schools. There are many applications every year for these schools so it is advisable to apply early. Over the past 10-years, many new schools have opened, even British schools from the UK have opened campuses, such as Harrow International School, Malvern College and Shrewsbury. These schools are gaining huge popularity and offer an excellent education.
                    </p>

                    <p>
                        Some of  the top schools accept applications from birth, these are:
                        <ul>
                            <li>Discovery Bay International School</li>
                            <li>French International School</li>
                            <li>German Swiss International School</li>
                            <li>Kellett School (The British International School in Hong Kong)</li>
                            <li>Kiang Su & Chekiang School</li>
                        </ul>
                    </p>

                    <p>
                        Once the application is submitted, your child’s name will go on the waiting list. Applying to these schools listed above is crucial if they are your preferred schools. Why? Your number on the waitlist counts in order to be offered an interview in the first round. Other schools will only accept an application, 1-2 years in advance.
                    </p>

                    <p>
                        HK international school fees are amongst some of the highest in Asia. Annual tuition fees range for a primary education from HK$110,000 to HK$225,000. There are also additional  fees which include: acceptance fees, entry fees, annual capital levy and facility fees.
                    </p>

                    <h2>Criteria for Choosing an International School in Hong Kong</h2>
                    <p>
                        When deciding on which hong kong international school, it is essential to consider specific needs, such as your child's interests, capabilities, interests and personality. Each type of international school has a similar – but different approach to education. Ensure the school resonates with educational beliefs and personal values. Examine the curriculum and programmes offered. Ask yourself questions such as: "Would my child be happy at this school?", "Will the school offer your child the education he or she deserves?".
                    </p>

                    <p>
                        If you need help navigating the international schools in Hong Kong, give us a call at ITS Education Asia, we can help you choose the best school. <br>
                        <a href="https://itseducation.asia/">ITS Education Asia - International schooling and educational services for Hong Kong and Asia</a>
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/4gnw5KweQKKuCRvU-primary.jpg); background-size: cover; background-position: center center;" alt="International College Hong Kong - Hong Lok Yuen">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/International+College+Hong+Kong+-+Hong+Lok+Yuen" class="btn btn-primary s-btn">International College Hong Kong - Hong Lok Yuen</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+College+Hong+Kong+-+Hong+Lok+Yuen" class="btn btn-primary s-btn">International College Hong Kong - Hong Lok Yuen</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UCR4ISAmFoqMkBQn-primary.jpg); background-size: cover; background-position: center center;" alt="Shrewsbury International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Shrewsbury+International+School" class="btn btn-primary s-btn">Shrewsbury International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Shrewsbury+International+School" class="btn btn-primary s-btn">Shrewsbury International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/4gnw5KweQKKuCRvU-primary.jpg); background-size: cover; background-position: center center;" alt="International College Hong Kong - Secondary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school/itseducation.asia/school-profile/International+College+Hong+Kong+-+Secondary" class="btn btn-primary s-btn">International College Hong Kong - Secondary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+College+Hong+Kong+-+Secondary" class="btn btn-primary s-btn">International College Hong Kong - Secondary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/pmAcR25PLhlma4XZ-primary.jpg); background-size: cover; background-position: center center;" alt="Harrow International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Harrow+International+School" class="btn btn-primary s-btn">Harrow International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Harrow+International+School" class="btn btn-primary s-btn">Harrow International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/intl-montessori-hk-ssd-pr.webp); background-size: cover; background-position: center center;" alt="International Montessori School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/International+Montessori+School" class="btn btn-primary s-btn">International Montessori School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+Montessori+School" class="btn btn-primary s-btn">International Montessori School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/GaHbX742uMJTnG0p-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong International School - Upper Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+International+School+-+Upper+Primary" class="btn btn-primary s-btn">Hong Kong International School - Upper Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+International+School+-+Upper+Primary" class="btn btn-primary s-btn">Hong Kong International School - Upper Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UebVVuP6rJch5wQT-primary.webp); background-size: cover; background-position: center center;" alt="Canadian International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Canadian+International+School" class="btn btn-primary s-btn">Canadian International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Canadian+International+School" class="btn btn-primary s-btn">Canadian International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/eRhEeqoNyvSUnfjD-primary.webp); background-size: cover; background-position: center center;" alt="French International School - Secondary - International and French Section">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/French+International+School+-+Secondary+-+International+and+French+Section" class="btn btn-primary s-btn">French International School - Secondary - International and French Section </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/French+International+School+-+Secondary+-+International+and+French+Section" class="btn btn-primary s-btn">French International School - Secondary - International and French Section </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/1yVFwGm675hjkvVk-primary.jpg); background-size: cover; background-position: center center;" alt="Yew Chung International School - Secondary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Yew+Chung+International+School+-+Secondary" class="btn btn-primary s-btn">Yew Chung International School - Secondary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Yew+Chung+International+School+-+Secondary" class="btn btn-primary s-btn">Yew Chung International School - Secondary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/3Eqtf5SPgcZ5soSr-primary.jpg); background-size: cover; background-position: center center;" alt="Lantau International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Lantau+International+School" class="btn btn-primary s-btn">Lantau International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Lantau+International+School" class="btn btn-primary s-btn">Lantau International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/V0EGDK4yKzuzTlSM-primary.jpg); background-size: cover; background-position: center center;" alt="Nord Anglia International School - Lam Tin Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nord+Anglia+International+School+-+Lam+Tin+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Lam Tin Campus </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nord+Anglia+International+School+-+Lam+Tin+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Lam Tin Campus </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/fVpanEUwkB2RwzbS-primary.webp); background-size: cover; background-position: center center;" alt="Nord Anglia International School - Tai Tam Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nord+Anglia+International+School+-+Tai+Tam+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Tai Tam Campus </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nord+Anglia+International+School+-+Tai+Tam+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Tai Tam Campus </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/german-swiss-hk-ssd-pr.jpg); background-size: cover; background-position: center center;" alt="German Swiss International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/German+Swiss+International+School" class="btn btn-primary s-btn">German Swiss International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/German+Swiss+International+School" class="btn btn-primary s-btn">German Swiss International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/ToQkvYLqdLwaLP9l-primary.webp); background-size: cover; background-position: center center;" alt="Hong Kong International School - Lower Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Hong Kong International School - Lower Primary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Hong Kong International School - Lower Primary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://school.itseducation.asia/img/school/IK1NxgL0P4wS7Sfg-primary.webp); background-size: cover; background-position: center center;" alt="Australian International School Hong Kong">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Australian+International+School+Hong+Kong" class="btn btn-primary s-btn">Australian International School Hong Kong </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Australian+International+School+Hong+Kong" class="btn btn-primary s-btn">Australian International School Hong Kong </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/kraibiBCZJrCvmfT-primary.jpg); background-size: cover; background-position: center center;" alt="Kingston International School - Upper Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Kingston+International+School+-+Upper+Primary" class="btn btn-primary s-btn">Kingston International School - Upper Primary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Kingston+International+School+-+Upper+Primary" class="btn btn-primary s-btn">Kingston International School - Upper Primary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/FblR6ohmeKzr0yM3-primary.webp); background-size: cover; background-position: center center;" alt="Kingston International School - Lower Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Kingston+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Kingston International School - Lower Primary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Kingston+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Kingston International School - Lower Primary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://school.itseducation.asia/img/school/G2qPry03IEKkT1XN-primary.webp); background-size: cover; background-position: center center;" alt="Korean International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Korean+International+School" class="btn btn-primary s-btn">Korean International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Korean+International+School" class="btn btn-primary s-btn">Korean International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://school.itseducation.asia/img/school/KYwN3yP8P3z9Fmbm-primary.webp); background-size: cover; background-position: center center;" alt="Chinese International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Chinese+International+School" class="btn btn-primary s-btn">Chinese International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Chinese+International+School" class="btn btn-primary s-btn">Chinese International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/JjG31toahZUiVw3N-primary.webp); background-size: cover; background-position: center center;" alt="Yew Chung International School - Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Yew+Chung+International+School+-+Primary" class="btn btn-primary s-btn">Yew Chung International School - Primary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Yew+Chung+International+School+-+Primary" class="btn btn-primary s-btn">Yew Chung International School - Primary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/japanese-intl-schl-ssd-pr.jpg); background-size: cover; background-position: center center;" alt="Japanese International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Japanese+International+School" class="btn btn-primary s-btn">Japanese International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Japanese+International+School" class="btn btn-primary s-btn">Japanese International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/fQsOXTywOXUso8E3-primary.jpg); background-size: cover; background-position: center center;" alt="Lantau International School - Upper Primary Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Lantau+International+School+-+Upper+Primary+Campus" class="btn btn-primary s-btn">Lantau International School - Upper Primary Campus </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Lantau+International+School+-+Upper+Primary+Campus" class="btn btn-primary s-btn">Lantau International School - Upper Primary Campus </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/WxGAxeyY3EhTxeno-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong International School - Middle School Tai Tam Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+International+School+-+Middle+School+Tai+Tam+Campus" class="btn btn-primary s-btn">Hong Kong International School - Middle School Tai Tam Campus </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+International+School+-+Middle+School+Tai+Tam+Campus" class="btn btn-primary s-btn">Hong Kong International School - Middle School Tai Tam Campus </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/XRUT7cflW537qf9v-primary.jpg); background-size: cover; background-position: center center;" alt="Nord Anglia International School - Sai Kung Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nord+Anglia+International+School+-+Sai+Kung+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Sai Kung Campus </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nord+Anglia+International+School+-+Sai+Kung+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Sai Kung Campus </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/PIFLcf1e26CfSHa8-primary.webp); background-size: cover; background-position: center center;" alt="Norwegian International School - Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Norwegian+International+School+-+Primary" class="btn btn-primary s-btn">Norwegian International School - Primary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Norwegian+International+School+-+Primary" class="btn btn-primary s-btn">Norwegian International School - Primary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/7f46PLK4bW9ks8Gw-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong International School - High School Tai Tam Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+International+School+-+High+School+Tai+Tam+Campus" class="btn btn-primary s-btn">Hong Kong International School - High School Tai Tam Campus </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+International+School+-+High+School+Tai+Tam+Campus" class="btn btn-primary s-btn">Hong Kong International School - High School Tai Tam Campus </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/OtFEAoWtct7LHrfg-primary.webp); background-size: cover; background-position: center center;" alt="French International School - Reception and Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/French+International+School+-+Reception+and+Primary" class="btn btn-primary s-btn">French International School - Reception and Primary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/French+International+School+-+Reception+and+Primary" class="btn btn-primary s-btn">French International School - Reception and Primary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UcbZ0JQSOU0FkUCm-primary.jpg); background-size: cover; background-position: center center;" alt="Discovery Bay International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Discovery+Bay+International+School" class="btn btn-primary s-btn">Discovery Bay International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Discovery+Bay+International+School" class="btn btn-primary s-btn">Discovery Bay International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://school.itseducation.asia/img/school/christian-alliance-primary.webp); background-size: cover; background-position: center center;" alt="Christian Alliance P.C. Lau Memorial International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Christian+Alliance+P.C.+Lau+Memorial+International+School" class="btn btn-primary s-btn">Christian Alliance P.C. Lau Memorial International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Christian+Alliance+P.C.+Lau+Memorial+International+School" class="btn btn-primary s-btn">Christian Alliance P.C. Lau Memorial International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://school.itseducation.asia/img/school/AG6cn8nfonppXYGp-primary.jpg); background-size: cover; background-position: center center;" alt="American International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/international-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/American+International+School" class="btn btn-primary s-btn">American International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/American+International+School" class="btn btn-primary s-btn">American International School </a></p>
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
                            <img src="https://itseducation.asia/school/images/banner/banner-a10.webp" alt="Shrewsbury International School">
                        </a>
                    </div>

                    <div class="cbg-white">
                        <a href="https://www.malverncollege.org.hk/" target="_blank">
                            <img src="https://itseducation.asia/school/images/banner/malvern_college_banner-oct-19.webp" alt="Malvern College">
                        </a>
                    </div>

                    <div class="cbg-white">
                        <a href="https://nlcssingapore.sg/" target="_blank">
                            <img src="https://itseducation.asia/school/images/banner/Web-banner-for-ITS-Asia-Education1_21-02-22.webp" alt="North London Collegiate School Singapore">
                        </a>
                    </div>

                    <p class="mt-4 mt-md-0"></p>
                    <div id="sb-bc" class="d-none bg-white atom-dv">
                        <a href="https://singapore.dulwich.org/" target="_blank">
                            <img src="https://itseducation.asia/school/img/banner/Dulwich_Banner.webp" alt="Dulwich College Singapore">
                        </a>
                    </div>

                    <div id="sb-bc" class="bg-white atom-dv">
                        <a target="_blank" href="https://itseducation.asia/school/">
                            <img width="100%" src="https://itseducation.asia/assets/images/ITS_ssdb-v3.png" alt="ITS School Search Database">
                        </a>
                    </div>

                    <div id="sb-bc" class="bg-white atom-dv">
                        <a target="_blank" href="https://itseducation.asia/yci-lab.php">
                            <img width="100%" srcset="https://itseducation.asia/school/img/banner/yci-lab.webp" alt="YCI Lab banner">
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
                    <script type="application/javascript">
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

    <link rel="canonical" href="https://itseducation.asia/school/hong-kong/international-schools-hk" />

    <style>
        /* landing page */

        #skl-div {
        position: relative;
        background: url(https://itseducation.asia/school/img/school-rev-bg1.webp);
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

