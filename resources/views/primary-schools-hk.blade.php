@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">Finding the Best Primary Schools in Hong Kong</span><br>
                    <span class="h1_titles">PRIMARY SCHOOLS IN HONG KONG</span>
                </h1>
            </header>
        </div>

        <section class="page-header page-header-modern page-header-md page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block">
                            <li>
                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                <a href="https://school.itseducation.asia/">Home</a>
                            @else
                                <a href="https://itseducation.asia/school/">Home</a>
                            @endif
                            </li>

                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                <li><a href="https://school.itseducation.asia/hong-kong">Hong Kong</a></li>
                            @else
                                <li><a href="https://itseducation.asia/school/hong-kong">Hong Kong</a></li>
                            @endif

                            <li class="active">Primary Schools in Hong Kong</li>
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
                        Getting into top primary schools in Hong Kong is a highly competitive process that requires early planning. Private primary schools do not simply accept a child based on the ability to afford the expensive annual fees. Some of the best primary schools in Hong Kong have gained their reputations due to student achievements, exam results, and the calibre of teachers they attract. Therefore, they want to ensure the students they admit can demonstrate strong potential and have the ability to cope within the school community.
                    </p>

                    <p>
                        The top primary schools in Hong Kong are the long-established schools which are in high demand. To name a few, English Schools Foundation (ESF), the Chinese International School (CIS), the Canadian International School (CDNIS), the German Swiss International School (GSIS), the Hong Kong International School (HKIS), and Kellett. Some of these schools have been in operation for 50+ years. Apart from these schools, some other new primary schools have gained great popularity for their unique teaching community and stellar programmes. Sending your child to a Hong Kong primary school is an outstanding experience, and the education in all of the schools is impressive.
                    </p>
                    
                    <h2>
                        Factors to Consider for School Admission in Hong Kong
                    </h2>

                    <p>
                        Several factors should be considered as these will impact the admission process. Selective schools focus on academic performance. A student’s ability to excel academically and meet the rigorous demands of the most selective schools is important for these schools. Additionally, extracurricular activities also hold weight during school admissions. Participation in sports and arts showcases a well-rounded personality and demonstrates skills beyond academics. Students must prove their English and Chinese language aptitude (only for bilingual schools).
                    </p>

                    <h2>
                        Strategies for Successfully Getting into Primary Schools in Hong Kong
                    </h2>

                    <p>
                        The first step is to research suitable schools based on individual needs and your child's learning capabilities, language ability, and personality. Depending on the school and curriculum offered, the contents and structure of interviews and assessments vary between schools and grade levels.
                    </p>

                    <p>
                        The following tests and assessments are similar among most schools. 
                        <ul>
                            <li>Pre-K-grade 2 (Year 3):</li>
                            <li>In-person screening assessment and play-based/group interview</li>
                            <li>Grades 3 – 5 (Year 4 - Year 6):</li>
                            <li>Measure of Academic Progress (MAP);</li>
                            <li>The Cognitive Abilities Test (CAT 4);</li>
                        </ul>
                    </p>

                    <p>
                        Finally, if your child is not offered a place, do not be discouraged. If you work with experts in the field, your chances of success are much higher. The education consultants at ITS Education Asia have the professional experience to help get those elusive spots.
                    </p>

                    <p>
                        Contact us at <a href="https://www.itseducation.asia/education-consultants.htm">ITS School Search</a> <br>
                        <a href="https://www.itseducation.asia/education-consultants.htm">Services Hong Kong - School Placement Consultancy (itseducation.asia)</a>
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/XoHaXBowC3rnV50k-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Quarry Bay School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Quarry+Bay+School" class="btn btn-primary s-btn">ESF Quarry Bay School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Quarry+Bay+School" class="btn btn-primary s-btn">ESF Quarry Bay School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/J4CI6JCM2nhYxNEg-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Beacon Hill School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Beacon+Hill+School" class="btn btn-primary s-btn">ESF Beacon Hill School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Beacon+Hill+School" class="btn btn-primary s-btn">ESF Beacon Hill School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/H00IVdIBzrmyJCaf-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Bradbury School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Bradbury+School" class="btn btn-primary s-btn">ESF Bradbury School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Bradbury+School" class="btn btn-primary s-btn">ESF Bradbury School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/tXgFh0J2xpjZ3w8f-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Kowloon Junior School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Kowloon+Junior+School" class="btn btn-primary s-btn">ESF Kowloon Junior School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Kowloon+Junior+School" class="btn btn-primary s-btn">ESF Kowloon Junior School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/4gnw5KweQKKuCRvU-primary.jpg); background-size: cover; background-position: center center;" alt="International College Hong Kong - Hong Lok Yuen">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/FARfv91JctszMdtQ-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Peak Primary School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Peak+Primary+School" class="btn btn-primary s-btn">ESF Peak Primary School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Peak+Primary+School" class="btn btn-primary s-btn">ESF Peak Primary School </a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Shrewsbury+International+School" class="btn btn-primary s-btn">Shrewsbury International School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Shrewsbury+International+School" class="btn btn-primary s-btn">Shrewsbury International School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/NRkerReWq2VX5qyt-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Clearwater Bay School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Clearwater+Bay++School" class="btn btn-primary s-btn">ESF Clearwater Bay School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Clearwater+Bay++School" class="btn btn-primary s-btn">ESF Clearwater Bay School </a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/christian-alliance-primary.jpg); background-size: cover; background-position: center center;" alt="Christian Alliance P.C. Lau Memorial International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Christian+Alliance+P.C.+Lau+Memorial+International+School" class="btn btn-primary s-btn">Christian Alliance P.C. Lau Memorial International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Christian+Alliance+P.C.+Lau+Memorial+International+School" class="btn btn-primary s-btn">Christian Alliance P.C. Lau Memorial International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/hzTHyv0ztXbMVUfP-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Discovery College">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Discovery+College" class="btn btn-primary s-btn">ESF Discovery College</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Discovery+College" class="btn btn-primary s-btn">ESF Discovery College</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/nS1ryBr2KBQkCObE-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Kennedy School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Kennedy+School" class="btn btn-primary s-btn">ESF Kennedy School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Kennedy+School" class="btn btn-primary s-btn">ESF Kennedy School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/yKLJcY3XMvNpgqWy-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Renaissance College">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Renaissance+College" class="btn btn-primary s-btn">ESF Renaissance College </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Renaissance+College" class="btn btn-primary s-btn">ESF Renaissance College </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/WOucJuuB1vpkS0O8-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Glenealy School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Glenealy+School" class="btn btn-primary s-btn">ESF Glenealy School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Glenealy+School" class="btn btn-primary s-btn">ESF Glenealy School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/kDhQkS4Jb0YyIEFl-primary.png); background-size: cover; background-position: center center;" alt="Woodland Pre-Schools">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Woodland+Pre-Schools" class="btn btn-primary s-btn">Woodland Pre-Schools</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Woodland+Pre-Schools" class="btn btn-primary s-btn">Woodland Pre-Schools</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/MQt77Z79XnOL30Wj-primary.jpg); background-size: cover; background-position: center center;" alt="Malvern College Hong Kong">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Malvern+College+Hong+Kong" class="btn btn-primary s-btn">Malvern College Hong Kong</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Malvern+College+Hong+Kong" class="btn btn-primary s-btn">Malvern College Hong Kong</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/qbQb4ykD0CS2jRwD-primary.jpg); background-size: cover; background-position: center center;" alt="Stamford American School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Stamford+American+School" class="btn btn-primary s-btn">Stamford American School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Stamford+American+School" class="btn btn-primary s-btn">Stamford American School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/dalton-school-primary.jpg); background-size: cover; background-position: center center;" alt="Dalton School Hong Kong">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Dalton+School+Hong+Kong" class="btn btn-primary s-btn">Dalton School Hong Kong</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Dalton+School+Hong+Kong" class="btn btn-primary s-btn">Dalton School Hong Kong</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/FelFPQ095VgOWaTO-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Sha Tin Junior">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Sha+Tin+Junior" class="btn btn-primary s-btn">ESF Sha Tin Junior</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Sha+Tin+Junior" class="btn btn-primary s-btn">ESF Sha Tin Junior</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/FblR6ohmeKzr0yM3-primary.jpg); background-size: cover; background-position: center center;" alt="Kingston International School - Lower Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Kingston+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Kingston International School - Lower Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Kingston+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Kingston International School - Lower Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/ToQkvYLqdLwaLP9l-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong International School - Lower Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Hong Kong International School - Lower Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+International+School+-+Lower+Primary" class="btn btn-primary s-btn">Hong Kong International School - Lower Primary</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Japanese+International+School" class="btn btn-primary s-btn">Japanese International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Japanese+International+School" class="btn btn-primary s-btn">Japanese International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/intl-montessori-hk-ssd-pr.jpg); background-size: cover; background-position: center center;" alt="International Montessori School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/N5m6f17b90cFrBd9-primary.jpg); background-size: cover; background-position: center center;" alt="The Harbour School - Upper Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/The+Harbour+School+-+Upper+Primary" class="btn btn-primary s-btn">The Harbour School - Upper Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/The+Harbour+School+-+Upper+Primary" class="btn btn-primary s-btn">The Harbour School - Upper Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/KYwN3yP8P3z9Fmbm-primary.jpg); background-size: cover; background-position: center center;" alt="Chinese International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/fQsOXTywOXUso8E3-primary.jpg); background-size: cover; background-position: center center;" alt="Lantau International School - Upper Primary Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Lantau+International+School+-+Upper+Primary+Campus" class="btn btn-primary s-btn">Lantau International School - Upper Primary Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Lantau+International+School+-+Upper+Primary+Campus" class="btn btn-primary s-btn">Lantau International School - Upper Primary Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/juKdRFlngKsrakl5-primary.jpg); background-size: cover; background-position: center center;" alt="Mount Kelly School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Mount+Kelly+School" class="btn btn-primary s-btn">Mount Kelly School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Mount+Kelly+School" class="btn btn-primary s-btn">Mount Kelly School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/G2qPry03IEKkT1XN-primary.jpg); background-size: cover; background-position: center center;" alt="Korean International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Korean+International+School" class="btn btn-primary s-btn">Korean International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Korean+International+School" class="btn btn-primary s-btn">Korean International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/g5di3iarYkI89tHr-primary.jpg); background-size: cover; background-position: center center;" alt="Delia School of Canada">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Delia+School+of+Canada" class="btn btn-primary s-btn">Delia School of Canada</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Delia+School+of+Canada" class="btn btn-primary s-btn">Delia School of Canada</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Harrow+International+School" class="btn btn-primary s-btn">Harrow International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Harrow+International+School" class="btn btn-primary s-btn">Harrow International School</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Discovery+Bay+International+School" class="btn btn-primary s-btn">Discovery Bay International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Discovery+Bay+International+School" class="btn btn-primary s-btn">Discovery Bay International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/hkca_po-leung-ssd-pr.jpg); background-size: cover; background-position: center center;" alt="HKCA Po Leung Kuk School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/HKCA+Po+Leung+Kuk+School" class="btn btn-primary s-btn">HKCA Po Leung Kuk School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/HKCA+Po+Leung+Kuk+School" class="btn btn-primary s-btn">HKCA Po Leung Kuk School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/wNwcXEm1Vg938Ggi-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong Adventist Academy - Day and Boarding">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+Adventist+Academy+-+Day+and+Boarding" class="btn btn-primary s-btn">Hong Kong Adventist Academy - Day and Boarding</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+Adventist+Academy+-+Day+and+Boarding" class="btn btn-primary s-btn">Hong Kong Adventist Academy - Day and Boarding</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/anfield-school-primary.jpg); background-size: cover; background-position: center center;" alt="Anfied Primary School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Anfied+Primary+School" class="btn btn-primary s-btn">Anfied Primary School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Anfied+Primary+School" class="btn btn-primary s-btn">Anfied Primary School</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Lantau+International+School" class="btn btn-primary s-btn">Lantau International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Lantau+International+School" class="btn btn-primary s-btn">Lantau International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/JjG31toahZUiVw3N-primary.jpg); background-size: cover; background-position: center center;" alt="Yew Chung International School - Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Yew+Chung+International+School+-+Primary" class="btn btn-primary s-btn">Yew Chung International School - Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Yew+Chung+International+School+-+Primary" class="btn btn-primary s-btn">Yew Chung International School - Primary</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nord+Anglia+International+School+-+Lam+Tin+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Lam Tin Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nord+Anglia+International+School+-+Lam+Tin+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Lam Tin Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/aBthVGVCV2591jCj-primary.jpg); background-size: cover; background-position: center center;" alt="Invictus School - Tseung Kwan O Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Invictus+School+-+Tseung+Kwan+O+Campus" class="btn btn-primary s-btn">Invictus School - Tseung Kwan O Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Invictus+School+-+Tseung+Kwan+O+Campus" class="btn btn-primary s-btn">Invictus School - Tseung Kwan O Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/bMZA1CeWuHRQlmuj-primary.jpg); background-size: cover; background-position: center center;" alt="Independent Schools Foundation - Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Independent+Schools+Foundation+-+Academy" class="btn btn-primary s-btn">Independent Schools Foundation - Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Independent+Schools+Foundation+-+Academy" class="btn btn-primary s-btn">Independent Schools Foundation - Academy</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/dmps-pr-2.jpg); background-size: cover; background-position: center center;" alt="Discovery Mind Primary School - Tung Chung Primary School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Discovery+Mind+Primary+School+-+Tung+Chung+Primary+School" class="btn btn-primary s-btn">Discovery Mind Primary School - Tung Chung Primary School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Discovery+Mind+Primary+School+-+Tung+Chung+Primary+School" class="btn btn-primary s-btn">Discovery Mind Primary School - Tung Chung Primary School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/mZUVsvVJjQEPY6N1-primary.jpg); background-size: cover; background-position: center center;" alt="Han Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Discovery+Mind+Primary+School+-+Tung+Chung+Primary+School" class="btn btn-primary s-btn">Han Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Discovery+Mind+Primary+School+-+Tung+Chung+Primary+School" class="btn btn-primary s-btn">Han Academy</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/IK1NxgL0P4wS7Sfg-primary.jpg); background-size: cover; background-position: center center;" alt="Australian International School Hong Kong">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Australian+International+School+Hong+Kong" class="btn btn-primary s-btn">Australian International School Hong Kong</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Australian+International+School+Hong+Kong" class="btn btn-primary s-btn">Australian International School Hong Kong</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/OtFEAoWtct7LHrfg-primary.jpg); background-size: cover; background-position: center center;" alt="French International School - Reception and Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/French+International+School+-+Reception+and+Primary" class="btn btn-primary s-btn">French International School - Reception and Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/French+International+School+-+Reception+and+Primary" class="btn btn-primary s-btn">French International School - Reception and Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/AG6cn8nfonppXYGp-primary.jpg); background-size: cover; background-position: center center;" alt="American International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/American+International+School" class="btn btn-primary s-btn">American International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/American+International+School" class="btn btn-primary s-btn">American International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/zHAbwcDuuxmg2COB-primary.jpg); background-size: cover; background-position: center center;" alt="The Harbour School - Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/The+Harbour+School+-+Primary" class="btn btn-primary s-btn">The Harbour School - Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/The+Harbour+School+-+Primary" class="btn btn-primary s-btn">The Harbour School - Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/fVpanEUwkB2RwzbS-primary.jpg); background-size: cover; background-position: center center;" alt="Nord Anglia International School - Tai Tam Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nord+Anglia+International+School+-+Tai+Tam+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Tai Tam Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nord+Anglia+International+School+-+Tai+Tam+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Tai Tam Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UebVVuP6rJch5wQT-primary.jpg); background-size: cover; background-position: center center;" alt="Canadian International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Canadian+International+School" class="btn btn-primary s-btn">Canadian International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Canadian+International+School" class="btn btn-primary s-btn">Canadian International School</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Nord+Anglia+International+School+-+Sai+Kung+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Sai Kung Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Nord+Anglia+International+School+-+Sai+Kung+Campus" class="btn btn-primary s-btn">Nord Anglia International School - Sai Kung Campus</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Kingston+International+School+-+Upper+Primary" class="btn btn-primary s-btn">Kingston International School - Upper Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Kingston+International+School+-+Upper+Primary" class="btn btn-primary s-btn">Kingston International School - Upper Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/9vBZvWS9O62IlClv-primary.jpg); background-size: cover; background-position: center center;" alt="Oxbridge School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Oxbridge+School" class="btn btn-primary s-btn">Oxbridge School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Oxbridge+School" class="btn btn-primary s-btn">Oxbridge School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/dmps-pr-2.jpg); background-size: cover; background-position: center center;" alt="Discovery Mind Primary School - Discovery Bay">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Discovery+Mind+Primary+School+-+Discovery+Bay" class="btn btn-primary s-btn">Discovery Mind Primary School - Discovery Bay</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Discovery+Mind+Primary+School+-+Discovery+Bay" class="btn btn-primary s-btn">Discovery Mind Primary School - Discovery Bay</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/PIFLcf1e26CfSHa8-primary.jpg); background-size: cover; background-position: center center;" alt="Norwegian International School - Primary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Norwegian+International+School+-+Primary" class="btn btn-primary s-btn">Norwegian International School - Primary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Norwegian+International+School+-+Primary" class="btn btn-primary s-btn">Norwegian International School - Primary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/o34RdJY0Af3JLz6t-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Hong+Kong+Academy" class="btn btn-primary s-btn">Hong Kong Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+Academy" class="btn btn-primary s-btn">Hong Kong Academy</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/BD1lRqdgv5qpj7pD-primary.jpg); background-size: cover; background-position: center center;" alt="Victoria Shanghai Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Victoria+Shanghai+Academy" class="btn btn-primary s-btn">Victoria Shanghai Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Victoria+Shanghai+Academy" class="btn btn-primary s-btn">Victoria Shanghai Academy</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/a60Zu097SHsOnYLG-primary.jpg); background-size: cover; background-position: center center;" alt="Chinese Academy Primary School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Chinese+Academy+Primary+School" class="btn btn-primary s-btn">Chinese Academy Primary School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Chinese+Academy+Primary+School" class="btn btn-primary s-btn">Chinese Academy Primary School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/wrhxbdL4d92OHgNs-primary.jpg); background-size: cover; background-position: center center;" alt="Island Christian Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Island+Christian+Academy" class="btn btn-primary s-btn">Island Christian Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Island+Christian+Academy" class="btn btn-primary s-btn">Island Christian Academy</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/american-school-hk-primary.jpg); background-size: cover; background-position: center center;" alt="American School Hong Kong">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/primary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/American+School+Hong+Kong" class="btn btn-primary s-btn">American School Hong Kong</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/American+School+Hong+Kong" class="btn btn-primary s-btn">American School Hong Kong</a></p>
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

    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">

    <link rel="stylesheet" href="/admin/vendor/select2/css/select2.css"/>

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

    <script src="/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/views/view.contact.js"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

@endsection

