@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">Finding the Best Private Schools in Hong Kong</span><br>
                </h1>
            </header>
        </div>

        <section class="page-header page-header-modern page-header-md page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block">
                            <li>
                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/private-schools-hk")
                                <a href="https://school.itseducation.asia/">Home</a>
                            @else
                                <a href="https://itseducation.asia/school/">Home</a>
                            @endif
                            </li>

                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/private-schools-hk")
                                <li><a href="https://school.itseducation.asia/hong-kong">Hong Kong</a></li>
                            @else
                                <li><a href="https://itseducation.asia/school/hong-kong">Hong Kong</a></li>
                            @endif

                            <li class="active">Private Schools in Hong Kong</li>
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
                        Getting into private schools in Hong Kong is highly competitive and requires careful planning and preparation. Private schools in Hong Kong are in high demand, and students are not accepted purely on the ability to afford the expensive annual fees. The best private schools have earned a reputation not only based on their ability to offer an exceptional education but also because of student achievements, exam results, and the caliber of teachers they attract. If you want to learn more about planning and preparing for success in a private school in Hong Kong, read on.
                    </p>

                    <h2>
                        List of Private Schools in Hong Kong
                    </h2>

                    <p>
                        There is an extensive list of private schools in Hong Kong, and many English private schools have opened campuses over the past few years in Hong Kong. There are some excellent options, and they are ranked the best in Asia. The long-established private international schools have always been in high demand and remain to be. To name a few, the English Schools Foundation (ESF), Chinese International School (CIS), Canadian International School (CDNIS), the German Swiss International School (GSIS), Hong Kong International School (HKIS), and Kellett School. Other private schools in Hong Kong include American International School, American School Hong Kong, Discovery Bay International School, French International School, Harrow International School, International College Hong Kong, Japanese International School, Lantau International School, Malvern College, Shrewsbury International School, Hong Kong Academy, Stamford American School, The Harbour School and Nord Anglia International School.
                    </p>

                    <h2>
                        Criteria for Choosing the Best Private School in Hong Kong
                    </h2>

                    <p>
                        Each school has a unique ethos and teaching philosophy; hence, finding one that aligns with personal interests, curriculum choice, and educational values can lead to better outcomes. When applying to schools in Hong Kong, it is essential to consider several factors. These considerations can impact the admission process. Firstly, academic performance is crucial in choosing the best school, and although location is a factor, the teaching staff and learning environment are more important. Additionally, consider what extracurricular activities and other outstanding programs are offered, such as sports, the arts, innovation, and language courses. A school that provides a well-balanced education is critical to success for all students. The education consultants at ITS Education Asia have the professional experience on what is needed to get those elusive spots. We can also help navigate the various selection processes used by different schools. Contact us today: <br>
                        <a href="https://www.itseducation.asia/education-consultants.htm">ITS School Search Services Hong Kong - School Placement Consultancy (itseducation. asia)</a>
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(https://itseducation.asia/school/img/school/VMav4UdFKC4ybLJp-primary.jpg); background-size: cover; background-position: center center;" alt="Independent Schools Foundation - Pre-school Campus">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/igcse-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Independent+Schools+Foundation+-+Pre-school+Campus" class="btn btn-primary s-btn">Independent Schools Foundation - Pre-school Campus</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Independent+Schools+Foundation+-+Pre-school+Campus" class="btn btn-primary s-btn">Independent Schools Foundation - Pre-school Campus</a></p>
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
                                            @if( url()->current() == "https://school.itseducation.asia/hong-kong/igcse-schools-hk")
                                                <p class="text-center m-1"><a href="https://school.itseducation.asia/school-profile/Independent+Schools+Foundation+-+Academy" class="btn btn-primary s-btn">Independent Schools Foundation - Academy</a></p>
                                            @else
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/school-profile/Independent+Schools+Foundation+-+Academy" class="btn btn-primary s-btn">Independent Schools Foundation - Academy</a></p>
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

    <link rel="canonical" href="https://itseducation.asia/school/hong-kong/private-schools-hk" />

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
