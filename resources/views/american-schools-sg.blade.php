@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">Finding the Best American International Schools in Singapore</span><br>
                </h1>
            </header>
        </div>

        <section class="page-header page-header-modern page-header-md page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block">
                            <li>
                                <a href="{{ $urlBase }}">Home</a>
                            </li>

                            <li><a href="{{ $urlBase }}singapore">Singapore</a></li>

                            <li class="active">American International Schools in Singapore</li>
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
                        <strong>Singapore American School was founded in 1956 by a group of expatriates who invested money to create an American school Singapore experience. It opened with 200 students. It expanded year after year and now hosts remarkable and state-of-the-art facilities, including a rainforest and impressive marker spaces. It is no longer one of Singapore’s only American schools. In fact, there are four in total. How do you know which school is right fit for your child? Find out more here.</strong>
                    </p>

                    <h2>
                        List of Top American International Schools in Singapore
                    </h2>

                    <p>
                        <h2>Singapore American School</h2>
                        <strong>
                            Singapore American School (SAS) is one of the largest schools in Asia, set within a 36-acre site. The academic focus is flexibility, personalized learning, new course offerings, and passion pathways. SAS Singapore offers 25 Advanced Placement (A.P.) courses, the A.P. Capstone Diploma program. SAS is one of the largest single-campus K-12 schools in the world.
                        </strong> <br><br>

                        <h2>Stamford American International School</h2>
                        <strong>
                            SAIS is part of the Cognita Group of international schools. It is a large school on two campuses with almost 3,000 children aged two months to 18 years. It is part of the Cognita Group of international schools. It is an International Baccalaureate (I.B.). It offers the American Education Reaches Out (AERO) multiple graduation pathways, either the IB Diploma or A.P. Diploma, along with an accredited Stamford High School Diploma.
                        </strong> <br><br>

                        <h2>International Community School (ICS)</h2>
                        <strong>ICS is a medium-sized Christian school with 450 students for students from 4 to 18 years. It offers a broad American curriculum that assists students in accessing top universities in the U.S.</strong> <br><br>

                        <h2>XCL American Academy</h2>
                        <strong>XCL American Academy opened in 2022 - Singapore's newest American school. It caters to students aged 2 to 14. The school plans to offer a high-quality, rigorous American education.</strong>
                    </p>

                    <p>
                        The American international schools in Singapore devise a core curriculum. Students can achieve high school credits to enter universities in the US. These schools have many similar themes and practices, even though they don't all follow the same curriculum. There is no American National Curriculum as such.
                    </p>

                    <h2>Criteria for Choosing a American International School in Singapore</h2>

                    <p>
                        There are many factors to consider when choosing an American school. What differentiates one from the other? What qualifications will my child leave school with? All of these questions are important, and before you take the plunge and apply, it is best to get all your questions answered. Ensure the schools are accredited by the Western Association of Schools and Colleges (WASC). Any school which does not publish its GPA scores or university acceptance is not worth considering. The US learning style is inquiry-based, with ample opportunities for students to explore specific interests and talents. The learning experiences are excellent. Ensure the school you visit has all of these incredible opportunities.
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/ics_sg_pr.webp); background-size: cover; background-position: center center;" alt="International Community School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/International+Community+School" class="btn btn-primary s-btn">International Community School</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/Xc9qbVr7rAqfDQOU-primary.webp); background-size: cover; background-position: center center;" alt="Stamford American International School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Stamford+American+International+School" class="btn btn-primary s-btn">Stamford American International School</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/SDRy6a34Jx3GtsAU-primary.webp); background-size: cover; background-position: center center;" alt="Singapore American School">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Singapore+American+School" class="btn btn-primary s-btn">Singapore American School</a></p>
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

                        <a href="https://itseducation.asia/school">
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

    <link rel="stylesheet" href="{{  $urlBase }}vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{  $urlBase }}vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{  $urlBase }}vendor/rs-plugin/css/navigation.css">

    <link rel="stylesheet" href="{{  $urlBase }}admin/vendor/select2/css/select2.css"/>

    <link rel="canonical" href="https://itseducation.asia/school/singapore/international-schools-sg/american-schools-sg" />

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

    <script src="{{  $urlBase }}vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{  $urlBase }}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{  $urlBase }}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{  $urlBase }}js/views/view.contact.js"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

@endsection
