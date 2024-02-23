@extends('layouts.main')

@section('title', $title)

@section('content')

    <section class="container-fluid" id="skl-div">
        <div id="h-div" class="position-absolute text-light font-weight-bolder text-right">
            <header>
                <h1>
                    <span class="h1_titles">FINDING THE BEST HONG KONG SCHOOL:</span><br>
                    <span class="h1_titles">SCHOOLS IN HONGKONG</span>
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
                            <li class="active">Hong Kong Schools</li>
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
                        In Hong Kong, as in other regions worldwide, there is a strong emphasis on furnishing quality education. The top schools in Hong Kong are ranked based on various criteria, and many factors and variables should be considered when selecting the best school in Hong Kong.
                    </p>
                    <p>
                        There are four main types of schools in Hong Kong: public local schools, private schools, international schools and EMI (English Medium of Instruction) Schools.
                    </p>

                    <h2>Public Local Schools</h2>
                    <p>
                        These schools use Chinese as a medium of instruction (CMI). There are two types – government and Grant schools. Both schools follow the local Hong Kong curriculum provided by the education bureau, with Cantonese as a compulsory subject.
                    </p>

                    <h2>Private Schools</h2>
                    <p>
                        The private schools are fee-paying and not funded by the Hong Kong government. They can choose whether to use English or Chinese/ English and Chinese.
                    </p>

                    <h2>International Schools</h2>
                    <p>
                        Hong Kong boasts some of the best international schools in Asia. The government does not control these schools regarding curriculum and language options. These schools are top-rated and are the top choice for expatriate families. International schools can decide student admission, tuition fees, and course content. The schools deliver high-quality education and offer a wide range of curricula.
                    </p>

                    <h2>English Medium of Instruction Schools</h2>
                    <p>
                        EMI Public Schools are non-fee-paying schools, and English is the primary language of instruction. Even though all textbooks and reading material are in English, the teachers use Cantonese in oral education in some classes, for example, Sports and Arts Classes. If students struggle to understand certain concepts in English, teachers will use Cantonese.
                    </p>
                    <p>
                        Parents have many choices when choosing a Hong Kong school, but the best school is a personal choice. There is no ‘one size fits all’ approach to selecting a school. It is simply about personal core values, educational goals, and family situations. It is essential to plan and have valuable information on the schools.
                    </p>
                    <p>
                        To help parents through the school search process, ITS Education Asia offers the best advice. Our education consultancy services have been in operation since 2005. We work closely with families throughout the process, providing support and guidance from start to finish.
                    </p>
                    <p>
                        Learn more about our services here: <a href="https://itseducation.asia/education-consultants.htm">ITS School Search Services Hong Kong - School Placement Consultancy (itseducation.asia)</a>
                    </p>

                    <section>
                        <div class="row s-countries">
                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/4gnw5KweQKKuCRvU-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk" class="btn btn-primary s-btn">International Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/UcbZ0JQSOU0FkUCm-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/a-level-schools-in-hk" class="btn btn-primary s-btn">GCE A Level Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/a60Zu097SHsOnYLG-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk/anglo-chinese-schools-hk" class="btn btn-primary s-btn">Anglo Chinese International Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/a60Zu097SHsOnYLG-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/primary-schools-hk" class="btn btn-primary s-btn">Primary Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/hzTHyv0ztXbMVUfP-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/secondary-schools-hk" class="btn btn-primary s-btn">Secondary Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/wNwcXEm1Vg938Ggi-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/boarding-schools-hk" class="btn btn-primary s-btn">Boarding Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/kDhQkS4Jb0YyIEFl-primary.png); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk/british-schools-sg" class="btn btn-primary s-btn">British International Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/AG6cn8nfonppXYGp-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk/american-schools-hk" class="btn btn-primary s-btn">American International Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/8FpTynmN8NjnjOQu-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk/ib-schools-sg" class="btn btn-primary s-btn">International Baccalaureate (IB) Schools in Singapore</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/eRhEeqoNyvSUnfjD-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk/french-schools-hk" class="btn btn-primary s-btn">French International Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/V0EGDK4yKzuzTlSM-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/igcse-schools-hk" class="btn btn-primary s-btn">IGCSE Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/VMav4UdFKC4ybLJp-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/independent-schools-hk" class="btn btn-primary s-btn">Independent Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/japanese-intl-schl-ssd-pr.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/international-schools-hk/japanese-schools-hk" class="btn btn-primary s-btn">Japanese International Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url(h{{ $imageUrlBase }}school/JVdDqXbH5g0Xe04f-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/edb-schools-hk" class="btn btn-primary s-btn">Education Bureau (EDB) Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/kDhQkS4Jb0YyIEFl-primary.png); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/montessori-schools-hk" class="btn btn-primary s-btn">Montessori Schools In Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/VMav4UdFKC4ybLJp-primary.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/private-schools-hk" class="btn btn-primary s-btn">Private Schools in Hong Kong</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="outer-box mx-auto my-2">
                                    <div class="content-b-desc" style="background: url({{ $imageUrlBase }}school/dmps-pr-2.webp); background-size: cover; background-position: center center;">
                                        <div class="content-wrap">
                                            <div class="sub-content-wrap">
                                                <p class="text-center m-1"><a href="https://itseducation.asia/school/hong-kong/special-school-hk" class="btn btn-primary s-btn">Special School in Hong Kong</a></p>
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

    <link rel="canonical" href="https://itseducation.asia/school/hong-kong" />

@endsection

@section('local-scripts')

    <script src="{{ $urlBase }}vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ $urlBase }}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ $urlBase }}js/views/view.contact.js"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

@endsection

