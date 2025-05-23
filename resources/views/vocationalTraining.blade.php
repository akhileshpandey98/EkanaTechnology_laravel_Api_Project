@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        {{-- <div class="about-us-content">
            <h1><b>Vocational Training</b></h1>
        </div> --}}
    </section>

    <div class="container-fluid  pb-2" style="background: #D9D9D9;">
        <div class="container">
            <div class="container" style="max-width: 1000px;">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-12"></div>
                    <div class="col-lg-6 col-md-8 col-sm-12 text-center justify-content-center">
                        <div class="card-section-summer" >
                            <div class="d-flex">
                                <img src="{{ asset('ekimage/image/vocationalimage.png') }}" alt=""
                                    class="img-fluid">
                                <h3>VOCATIONAL TRAINING</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12"></div>
                </div>
            </div>
            <div class="row mt-5" >
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/php') }}" class="text-decoration-none"
                                style="color:#212529;">PHP Full Stack
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/frontenddeveloper') }}" class="text-decoration-none"
                                style="color:#212529;">Front End
                                Development Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height:4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/merndetails') }}" class="text-decoration-none" style="color:#212529;">MERN
                                Stack
                                Development Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/python') }}" class="text-decoration-none" style="color:#212529;">PYTHON
                                Training</a></h5>
                    </div>
                </div>
            </div>
            <div class="row mt-3" >
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="" class="text-decoration-none" style="color:#212529;">JAVA & Advance JAVA
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/android') }}" class="text-decoration-none" style="color:#212529;">Android
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/netdetails') }}" class="text-decoration-none" style="color:#212529;">.NET
                                Framework
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;"
                        >
                        <h5><a href="{{ url('/hrdetails') }}" class="text-decoration-none" style="color:#212529;">HR &
                                Recruitment
                                Training with
                                Advance Certification </a></h5>
                    </div>
                </div>
            </div>

            <div class="row mt-2"  data-aos="fade-right" data-aos-duration="3000">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h2 id="h2"  data-aos="fade-up" data-aos-duration="3000">Welcome to the Ekana’s Vocational Training in Lucknow!</h2>
                    <br>
                    <p style="text-align:justify;">
                        we take pride in offering comprehensive courses that equip individuals with essential skills for the
                        professional world. At our training institute, we will offer industry-relevant vocational training
                        programs to help individuals enhance their skills and accelerate their careers. We aim to provide
                        comprehensive learning experiences that empower students to thrive in their chosen fields.</p>

                    {{-- <p style="text-align:justify;"> At Ekana, we strive to provide industry relevant training that equips
                        participants with necessary tools to excel in their careers. With a team infrastructure and hands on
                        learning approach, we ensure that every participant gets the most out of their training.</p> --}}

                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section start-->
    <div class="container-desc bg-white">
        <div class="container">
            <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview"  data-aos="fade-down" data-aos-duration="3000">
                        Overview
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our Vocational training program in Lucknow combines hands on training with classroom sessions,
                        resulting in a well-rounded learning experience. I understand that every individual has different
                        learning needs, so our courses are tailored to suit all skill levels, from beginners to advanced
                        learners. We are committed to fostering your growth and success in your chosen field.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--second row-->
            <div class="row"   data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview"  data-aos="fade-down" data-aos-duration="3000">
                        Course Description
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our vocational training program covers a wide range of courses to cater to the diverse industry
                        requirements. Whether you are looking to kick start your career in digital marketing, web
                        development, graphic design, or ethical hacking, we have courses tailored to meet your specific
                        needs. Through interactive sessions, practical assignments, and real-life projects, our experienced
                        trainers will guide you through the course curriculum. You will gain in-depth knowledge and develop
                        the necessary to excel in your chosen career path.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Third Row-->
            <div class="row"   data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview"  data-aos="fade-down" data-aos-duration="3000">
                        Certification
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Upon successful completion of our vocational training program, you will receive a certification that
                        demonstrates your competency in field. Our certifications are recognized by leading industry experts
                        and given our reputation; they hold significant value in the job market. Possessing a certification
                        from us will enhance your professional credibility and increase your chances of landing your dream
                        job.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--four Row-->
            <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview"  data-aos="fade-down" data-aos-duration="3000">
                        Fee Structure
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        We believe in offering quality education at an affordable price. Our Vocational training program in
                        Lucknow is competitively priced, ensuring that you receive the best value for your investment. We
                        will offer flexible payment options, including installment plans to ease the financial burden.
                        Additionally, we periodically offer discounts and scholarships, so be sure to check or website for
                        any ongoing promotions.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Five Row-->
            <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview"  data-aos="fade-down" data-aos-duration="3000">
                        Learning Outcome
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our Vocational training program aims to equip you with the skills and knowledge necessary to succeed
                        in your chosen field. By the end of the course, you will be capable of applying industry best
                        practices, troubleshooting real life scenarios, and implementing innovative solutions. Our focus on
                        practical training ensures that you are job ready and confident in your abilities.
                    </p>

                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section ends-->
    <!--The Summer Training Section End-->

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
                    <img class="img-fluid " loading="lazy" src="ekimage/image1/Vocational Training new page copy.png"
                        alt="About Us">
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
    <div class="hero mt-5"   data-aos="fade-right" data-aos-duration="3000">
        <h1>Summer Training Program</h1>
        <p>Join us for an enriching experience</p>
    </div>
    <!-- Program Tenure & Timing -->
    <div class="container content-section">
        <div class="row"   data-aos="zoom-in" data-aos-duration="3000">
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
    <h2 class="text-center mt-3" ><b class="h2">Summer Training Glimpse</b></h2>
   <div class="line "></div>

    <div class="container content-section py-5">
        <div class="row"   data-aos="fade-down" data-aos-duration="3000">
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" Group Activity class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div>
        {{-- <div class="row mt-1"   data-aos="fade-up" data-aos-duration="3000">
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" Group Activity class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div> --}}
    </div>
    <!-- Popular Courses -->

    <div class="container">
        <h2 class="text-center" ><b class="h2">Additional Benefits</b></h2>
   <div class="line mb-3"></div>
        <div class="row"data-aos="zoom-in" data-aos-duration="3000">
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
        <div class="row" data-aos="fade-down" data-aos-duration="3000">
            <div class="col-sm-12 d-flex justify-content-center mt-3">

                <a href="{{ 'register' }}" class="btn btn-primary bsb-btn-2xl  mb-3">
                    Register Now
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg> --}}
                </a>

            </div>

        </div>

    </div>

    <!--Our Course section button-->
    <div id="content-section">
        <div class="container-fluid   pt-4 mt-2" id="container-bot">
            {{-- <h2 class="text-center" data-aos="fade-down" data-aos-duration="3000" style="color:white;font-weight:bold;"><b class="h2">Popular Courses</b></h2>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border border-white opacity"> --}}
            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="ekimage/image/Frame 1000006663.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Our Course Section Button-->
@endsection
