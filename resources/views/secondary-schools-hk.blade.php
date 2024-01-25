@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">Finding the Best Secondary School in Hong Kong</span><br>
                </h1>
            </header>
        </div>

        <section class="page-header page-header-modern page-header-md page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block">
                            <li>
                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                <a href="https://school.itseducation.asia/">Home</a>
                            @else
                                <a href="https://itseducation.asia/school/">Home</a>
                            @endif
                            </li>

                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                <li><a href="https://school.itseducation.asia/hong-kong">Hong Kong</a></li>
                            @else
                                <li><a href="https://itseducation.asia/school/hong-kong">Hong Kong</a></li>
                            @endif

                            <li class="active">Secondary Schools in Hong Kong</li>
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
                        Hong Kong secondary schools include the Direct Subsidy Scheme (DSS), private independent schools, and international schools. Secondary schools in Hong Kong offer a range of curriculum. The most widely offered are the International Baccalaureate, the English National Curriculum, and the American National Curriculum. Finding the best secondary school in Hong Kong depends on various factors, such as the student’s learning style, future academic and professional aspirations, and personal preferences. The best schools in Hong Kong provide a well-rounded education, prepare students for future success, and foster critical thinking and creativity.
                    </p>

                    <h2>
                        List of Top Secondary Schools in Hong Kong
                    </h2>

                    <p>
                        There are many choices of secondary schools in Hong Kong. These schools provide students with various curriculum choices, academic programmes, and diverse learning environments. There is an extensive list of top schools in Hong Kong.
                    </p>

                    <p>
                        You can find a list of Secondary Schools in Hong Kong here: <br>
                        English Schools Foundation (ESF), the Chinese International School (CIS), the Canadian International School (CDNIS), the German Swiss International School (GSIS), the French International School (FIS), the Hong Kong International School (HKIS), Kellett School and Singapore International School Hong Kong (SISHK). Other popular schools include Australian International School, American International School, American School Hong Kong, Discovery Bay International School, Discovery College, Hong Kong Academy, Harrow International School, International College Hong Kong, Invictus School Hong Kong, Malvern College Hong Kong, Nord Anglia International School, Renaissance College, Stamford American School Hong Kong, Wycombe Abbey School Hong Kong, Yew Chung International School, YMCA Christian College. 
                    </p>

                    <h2>Criteria for Choosing a Secondary School in Hong Kong</h2>
                    <p>
                        Parents should adopt various strategies to gain admission to the best schools in Hong Kong. The best secondary schools in Hong Kong have extensive waitlists and practice different application policies. First and foremost, be aware of the application openings and deadlines and prepare the correct supporting materials before beginning an online application. Always visit the preferred schools before you apply.
                    </p>

                    <p>
                        The next step is entrance test preparation. As a parent, you will weigh many factors in choosing the right school for your child. However, apart from the criteria you agreed on, it is essential to consider the testing procedures and interviews for these top schools in Hong Kong. What entrance test is required? Do you have relevant materials and practice sample tests to help your child prepare? Depending on the school and curriculum offered, the contents and structure of interviews and assessments vary between schools and grade levels. Many secondary schools in Hong Kong use these tests: <br>
                        <ul>
                            <li>The Measures of Academic Progress (MAP)</li>
                            <li>The Cognitive Abilities Test (CAT 4)</li>
                            <li>The Independent Schools Entrance Exam (ISEE)</li>
                            <li>The International Diagnostic and Admissions Test (iDAT assessment).</li>
                        </ul>
                    </p>

                    <p>
                        The education consultants at ITS Education Asia have the professional experience that is needed to prepare for secondary school admission. We can also help navigate the various selection processes used by different schools. Contact us today, and you won’t regret it!
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/hzTHyv0ztXbMVUfP-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Discovery College">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Discovery+College" class="btn btn-primary s-btn">ESF Discovery College </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Discovery+College" class="btn btn-primary s-btn">ESF Discovery College </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/SOJWoSEb4NkEh7dM-primary.jpg); background-size: cover; background-position: center center;" alt="International College Hong Kong - Secondary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+College+Hong+Kong+-+Secondary" class="btn btn-primary s-btn">International College Hong Kong - Secondary </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+College+Hong+Kong+-+Secondary" class="btn btn-primary s-btn">International College Hong Kong - Secondary </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/xQO52gppknGwvwOI-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Island School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Island+School" class="btn btn-primary s-btn">ESF Island School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Island+School" class="btn btn-primary s-btn">ESF Island School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/Q5knXsRIGseo96Kg-primary.jpg); background-size: cover; background-position: center center;" alt="ESF West Island School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+West+Island+School" class="btn btn-primary s-btn">ESF West Island School </a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+West+Island+School" class="btn btn-primary s-btn">ESF West Island School </a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/c3Tf2wJvNPDjcIoU-primary.jpg); background-size: cover; background-position: center center;" alt="ESF South Island School ">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+South+Island+School" class="btn btn-primary s-btn">ESF South Island School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+South+Island+School" class="btn btn-primary s-btn">ESF South Island School</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/shffUlN25hIIb2XS-primary.jpg); background-size: cover; background-position: center center;" alt="ITS Tutorial School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ITS+Tutorial+School" class="btn btn-primary s-btn">ITS Tutorial School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ITS+Tutorial+School" class="btn btn-primary s-btn">ITS Tutorial School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/8FpTynmN8NjnjOQu-primary.jpg); background-size: cover; background-position: center center;" alt="ESF King George V School - KGV">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+King+George+V+School+-+KGV" class="btn btn-primary s-btn">ESF King George V School - KGV</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+King+George+V+School+-+KGV" class="btn btn-primary s-btn">ESF King George V School - KGV</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Renaissance+College" class="btn btn-primary s-btn">ESF Renaissance College</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Renaissance+College" class="btn btn-primary s-btn">ESF Renaissance College</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Han+Academy" class="btn btn-primary s-btn">Han Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Han+Academy" class="btn btn-primary s-btn">Han Academy</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UcbZ0JQSOU0FkUCm-primary.jpg); background-size: cover; background-position: center center;" alt="Discovery Bay International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/g5di3iarYkI89tHr-primary.jpg); background-size: cover; background-position: center center;" alt="Delia School of Canada">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/bMZA1CeWuHRQlmuj-primary.jpg); background-size: cover; background-position: center center;" alt="Independent Schools Foundation - Academy">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/german-swiss-hk-ssd-pr.jpg); background-size: cover; background-position: center center;" alt="German Swiss International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/German+Swiss+International+School" class="btn btn-primary s-btn">German Swiss International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/German+Swiss+International+School" class="btn btn-primary s-btn">German Swiss International School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/r0nSxGiqhZiO8oRt-primary.jpg); background-size: cover; background-position: center center;" alt="ESF Sha Tin College">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/ESF+Sha+Tin+College" class="btn btn-primary s-btn">ESF Sha Tin College</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/ESF+Sha+Tin+College" class="btn btn-primary s-btn">ESF Sha Tin College</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/qiWBvkMpp3Czmoef-primary.jpg); background-size: cover; background-position: center center;" alt="Wycombe Abbey School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Wycombe+Abbey+School" class="btn btn-primary s-btn">Wycombe Abbey School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Wycombe+Abbey+School" class="btn btn-primary s-btn">Wycombe Abbey School</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Stamford+American+School" class="btn btn-primary s-btn">Stamford American School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Stamford+American+School" class="btn btn-primary s-btn">Stamford American School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/li-po-chun-hk-ssd-pr.jpg); background-size: cover; background-position: center center;" alt="Li Po Chun United World College">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Li+Po+Chun+United+World+College" class="btn btn-primary s-btn">Li Po Chun United World College</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Li+Po+Chun+United+World+College" class="btn btn-primary s-btn">Li Po Chun United World College</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/V0EGDK4yKzuzTlSM-primary.jpg); background-size: cover; background-position: center center;" alt="Nord Anglia International School - Lam Tin Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/IK1NxgL0P4wS7Sfg-primary.jpg); background-size: cover; background-position: center center;" alt="Australian International School Hong Kong">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/juKdRFlngKsrakl5-primary.jpg); background-size: cover; background-position: center center;" alt="Mount Kelly School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Mount+Kelly+School" class="btn btn-primary s-btn">Mount Kelly School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Mount+Kelly+School" class="btn btn-primary s-btn">Mount Kelly School</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://school.itseducation.asia/img/school/eRhEeqoNyvSUnfjD-primary.jpg); background-size: cover; background-position: center center;" alt="French International School - Secondary - International and French Section">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/French+International+School+-+Secondary+-+International+and+French+Section" class="btn btn-primary s-btn">French International School - Secondary - International and French Section</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/French+International+School+-+Secondary+-+International+and+French+Section" class="btn btn-primary s-btn">French International School - Secondary - International and French Section</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/BWkA4lFaf7C2eZMD-primary.jpg); background-size: cover; background-position: center center;" alt="The Harbour School - Secondary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/The+Harbour+School+-+Secondary" class="btn btn-primary s-btn">The Harbour School - Secondary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/The+Harbour+School+-+Secondary" class="btn btn-primary s-btn">The Harbour School - Secondary</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/7f46PLK4bW9ks8Gw-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong International School - High School Tai Tam Campus ">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/christian-alliance-primary.jpg); background-size: cover; background-position: center center;" alt="Christian Alliance P.C. Lau Memorial International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/UebVVuP6rJch5wQT-primary.jpg); background-size: cover; background-position: center center;" alt="Canadian International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/wNwcXEm1Vg938Ggi-primary.jpg); background-size: cover; background-position: center center;" alt="Hong Kong Adventist Academy - Day and Boarding">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Hong+Kong+Adventist+Academy+-+Day+and+Boarding" class="btn btn-primary s-btn">Hong Kong Adventist Academy - Day and Boarding</a></p>
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/1yVFwGm675hjkvVk-primary.jpg); background-size: cover; background-position: center center;" alt="Yew Chung International School - Secondary">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Yew+Chung+International+School+-+Secondary" class="btn btn-primary s-btn">Yew Chung International School - Secondary</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Yew+Chung+International+School+-+Secondary" class="btn btn-primary s-btn">Yew Chung International School - Secondary</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/AG6cn8nfonppXYGp-primary.jpg); background-size: cover; background-position: center center;" alt="American International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/JVdDqXbH5g0Xe04f-primary.jpg); background-size: cover; background-position: center center;" alt="Invictus School - Chai Wan Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Invictus+School+-+Chai+Wan+Campus" class="btn btn-primary s-btn">Invictus School - Chai Wan Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Invictus+School+-+Chai+Wan+Campus" class="btn btn-primary s-btn">Invictus School - Chai Wan Campus</a></p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/RDg4ORRVS65G0Mme-primary.jpg); background-size: cover; background-position: center center;" alt="YMCA of Hong Kong Christian College">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/YMCA+of+Hong+Kong+Christian+College" class="btn btn-primary s-btn">YMCA of Hong Kong Christian College</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/YMCA+of+Hong+Kong+Christian+College" class="btn btn-primary s-btn">YMCA of Hong Kong Christian College</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Chinese+International+School" class="btn btn-primary s-btn">Chinese International School</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Chinese+International+School" class="btn btn-primary s-btn">Chinese International School</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/secondary-schools-hk")
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

