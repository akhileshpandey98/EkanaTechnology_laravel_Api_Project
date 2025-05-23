@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        <div class="about-us-content" data-aos="fade-up" data-aos-dratation="3000">
            <h1 class="display-1 fw-bold " style=" text-shadow: 2px 3px 5px red;">Winter Training</h1>
        </div>
    </section>
    <!-- About Page Section Start -->

    {{-- <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class=" text-center"><b>Summer Training - CS/IT (4/6 WEEKS)</b></h2>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    <p class="text-secondary mb-5 text-center lead fs-4">Summer Training in Computer
                        Science/Information
                        Technology at Ekana Technologies</p>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 hover-move">
                    <img class="img-fluid " loading="lazy" src="ekimage/image/Frame 229.png" alt="About Us">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6">
                    <div class="row justify-content-lg-end">
                        <div class="col-12 col-lg-11">
                            <div class="about-wrapper">
                                <h2>About the Program</h2>
                                <p class="lead mb-4 mb-md-5" style="text-align: justify;">Summer Training in CS/IT is
                                    an
                                    intensive and hands-on technology learning program dedicated for Computer
                                    Science(CS) and Information Technology(IT) branch Students of B.Tech & Diploma, also
                                    beneficial for Computer Applications(BCA/MCA) and affiliated branches.

                                    The Program is tailored to equip participants with practical skills and
                                    industry-relevant knowledge which bridges the gap between academic learning and
                                    industry requirements, empowering students with real-world experience..</p>
                                <div class="row gy-4 mb-4 mb-md-5">
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-4">
                                                <h3 class="display-5 fw-bold text-primary text-center mb-2">370+</h3>
                                                <p class="fw-bold text-center m-0">Qualified Experts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-4">
                                                <h3 class="display-5 fw-bold text-primary text-center mb-2">1k+</h3>
                                                <p class="fw-bold text-center m-0">Satisfied Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ 'register' }}" class="btn btn-primary bsb-btn-2xl">
                                    Register Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- About Page section End-->

    <!-- Hero Section -->
    <div class="hero mt-5" data-aos="fade-right" data-aos-dratation="3000">
        <h1>Summer Training Program</h1>
        <p>Join us for an enriching experience</p>
    </div>
    <!-- Program Tenure & Timing -->
    <div class="container content-section">
        <div class="row" data-aos="zoom-in" data-aos-dratation="3000">
            <div class="col-md-4">
                <h2>Program Tenure & Timing</h2>
                <p>This program commences every year at Techpile in June/July and ends after nearly 6 weeks in
                    August/September. The program duration varies each academic year depending on various factors.
                </p>
            </div>
            <div class="col-md-4">
                <h2>How to Join?</h2>
                <p>Joining our Summer Training program is simple! Interested candidates can apply online through our
                    website or visit our campus for registration.</p>
            </div>
            <div class="col-md-4">
                <h2>Who Can Join?</h2>
                <p>Students pursuing their Diploma, Undergraduate, or Postgraduate Degrees in Computer
                    Science/Information Technology or related fields are eligible to apply.</p>
            </div>
        </div>
    </div>
    <!-- Summer Training Glimpse -->

    <div class="container content-section">
        <div class="div mb-3">
            <h2 class="text-center mt-3"><b class="h2">Summer Training Glimpse</b></h2>
            <div class="line"></div>

        </div>


        <div class="row py-5" data-aos="fade-down" data-aos-dratation="3000">
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div>
        {{-- <div class="row mt-1" data-aos="fade-down" data-aos-dratation="3000">
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div> --}}
    </div>
    <!-- Popular Courses -->

    <div class="container">
        <div class="row" >
            <h2 class="text-center"><b class="h2">Additional Benefits</b></h2>
            <div class="line mb-3"></div>

        </div>
        <div class="row" data-aos="zoom-in" data-aos-dratation="3000">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> &emsp;5 Hours Daily Classes</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> Recovery Class for each Session</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card mb-3" style="height: 3.5rem;width:100%;">
                    <h5>Study Material of each language</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> Free access of online portal for 1 Year</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> Free Web Hosting for 1 Year</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> Free Java classes for 1 Year</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> Project file according to project</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card" style="height: 3.5rem;width:100%;">
                    <h5> Hostel and Room Guidance</h5>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center mt-3" data-aos="flip-down" data-aos-dratation="3000">

                <a href="{{ 'register' }}" class="btn btn-primary bsb-btn-2xl  mb-3">
                    Register Now
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                </a>

            </div>

        </div>

    </div>

    <!--Our Course section button-->
    <div id="content-section">
        <div class="container-fluid   pt-4 mt-2" id="container-bot">
            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-dratation="3000">
                    <img src="ekimage/image/Frame 1000006663.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Our Course Section Button-->
@endsection
