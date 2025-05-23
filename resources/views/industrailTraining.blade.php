@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        {{-- <div class="about-us-content">
            <h1><b>Industrial & Plcaement Training</b></h1>
        </div> --}}
    </section>

    <!--The Industrial section start-->
    <div class="container-fluid  pb-2" style="background: #D9D9D9;">
        <div class="container">
            <div class="container" style="max-width: 1000px;">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-12"></div>
                    <div class="col-lg-6 col-md-8 col-sm-12 text-center justify-content-center">
                        <div class="card-section-summer" >
                            <div class="d-flex">
                                <img src="{{ asset('ekimage/image/Industrialimage.png') }}" alt=""
                                    class="img-fluid">
                                <h3 class="display-1 fw-bold " style=" text-shadow: 2px 3px 5px red;">INDUSTRIAL TRAINING
                                </h3>
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
                        <h5 class="pt"><a href="{{ url('/merndetails') }}" class="text-decoration-none"
                                style="color:#212529;">MERN
                                Stack
                                Development Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/python') }}" class="text-decoration-none"
                                style="color:#212529;">PYTHON
                                Training</a></h5>
                    </div>
                </div>
            </div>
            <div class="row mt-3" >
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="" class="text-decoration-none" style="color:#212529;">JAVA &
                                Advance JAVA
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/android') }}" class="text-decoration-none"
                                style="color:#212529;">Android
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5 class="pt"><a href="{{ url('/netdetails') }}" class="text-decoration-none"
                                style="color:#212529;">.NET
                                Framework
                                Training</a></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <div class="card" style="height: 4.5rem;width:100%;">
                        <h5><a href="{{ url('/hrdetails') }}" class="text-decoration-none" style="color:#212529;">HR &
                                Recruitment
                                Training with
                                Advance Certification </a></h5>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12" data-aos="fade-up" data-aos-dratation="3000">
                    <h2 id="h2" data-aos="fade-down-right" data-aos-dratation="3000">Welcome to the Ekana’s
                        Industrial Training in Lucknow!</h2>
                    <br>
                    <p style="text-align:justify;">
                        At Ekana, we are dedicated to provide top notch training that equips individual with the skills and
                        knowledge needed to excel in the ever-evolving tech industry. Our program offers a wide range of
                        courses designed to meet the divers needs of aspiring professionals.
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section start-->
    <div class="container-desc bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Overview
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3" data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our Industrial Training Program in Lucknow is carefully crafted to provide hands-on experience and
                        practical knowledge in various domains. We understand the importance of real-world Industrials in
                        enhancing skills, and thus, our program focuses, on Industrial-based learning to ensure a holistic
                        understanding of the subject matter.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--second row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Course Description
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3" data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our courses cover a wide array of topics. Each course is meticulously designed by industry experts
                        to provide a comprehensive understanding of the subject matter. With a blend of theoretical concepts
                        and practical implementation, our training ensures that students are well-prepared for real world
                        challenges.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Third Row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Certification
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3" data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Upon Successful completion of the Industrial training program, students will receive certification
                        that
                        validates their skills and knowledge. This certification holds immense value in the job market and
                        can significantly enhance career prospects.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--four Row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Fee Structure
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3" data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        We offer flexible fee structure to ensure that our training is accessible to all aspiring
                        professionals. Our aim to provide high quality education at an affordable price, enabling
                        individuals to kickstart their careers without financial constraints.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Five Row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Learning Outcome
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3" data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our training program aims to equip students with the following skills and competencies:
                    <ul>
                        <li>
                            <p>Proficiency in Industry Relevant tools and technologies.</p>
                        </li>
                        <li>
                            <p>Ability to work on real world Industrials independently.</p>
                        </li>
                        <li>
                            <p>Strong problem solving and analytical skills.</p>
                        </li>
                        <li>
                            <p>Effective communication and teamwork abilities.</p>
                        </li>
                        <li>
                            <p>In-depth understanding of Industry Best Practices.</p>
                        </li>
                    </ul>
                    </p>

                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section ends-->
    <!--The Industrial Section end-->
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

    <!-- our traning programs -->

    {{-- <div class="container">
        <h2 class="text-center mt-5"><b>Offered Languages and Technology Of Ekana Summer Training</b></h2>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-12 col-md-6 col-lg-3 m-3">
                <div class="card2"> <img src="ekimage/image/Desktop - 15 (1).png" alt="">
                    <div class="child-div">
                        <p>Basic Section 1</p>
                        <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/Desktop - 16 (1).png" alt="">
                    <div class="child-div">
                        <p>Basic Section 1</p>
                        <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/Desktop - 14 (1).png" alt="">
                    <div class="child-div">
                        <p>Basic Section 1</p>
                        <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-1"></div>
        </div>
    </div>

    <div class="container mt-1">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/Desktop - 10 (1).png" alt="">
                    <div class="child-div">
                        <p>Basic Section 1</p>
                        <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/Desktop - 12 (1).png" alt="">
                    <div class="child-div">
                        <p>Basic Section 1</p>
                        <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/Desktop - 13 (1).png" alt="">
                    <div class="child-div">
                        <p>Basic Section 1</p>
                        <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-1"></div>

        </div>
    </div> --}}
    <!-- our traning program end -->


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
                <p style="text-align: justify;padding:5px;">This program commences every year at Techpile in June/July
                    and ends after nearly 6 weeks in
                    August/September. The program duration varies each academic year depending on various factors.
                </p>
            </div>
            <div class="col-md-4">
                <h2>How to Join?</h2>
                <p style="text-align: justify;padding:5px;">Joining our Summer Training program is simple! Interested
                    candidates can apply online through our
                    website or visit our campus for registration.</p>
            </div>
            <div class="col-md-4">
                <h2>Who Can Join?</h2>
                <p style="text-align: justify;padding:5px;">Students pursuing their Diploma,Undergraduate,or
                    Postgraduate Degrees in Computer
                    Science/Information Technology or related fields are eligible to apply.</p>
            </div>
        </div>
    </div>
    <!-- Summer Training Glimpse -->

    <div class="container content-section">

        <div class="row" data-aos="fade-down" data-aos-dratation="3000">
            <h2 class="text-center mt-3"><b class="h2">Summer Training Glimpse</b></h2>
            <div class="line"></div>

        </div>


        <div class="row py-5" data-aos="fade-up" data-aos-dratation="3000">
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
            </div> --}}
        </div>
    </div>
    <!-- Popular Courses -->
    <div class="container">
        <h2 class="text-center" data-aos="fade-down" data-aos-dratation="3000"><b class="h2">Additional Benefits</b></h2>
        <div class="line mb-3"></div>

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
                    <h5> Industrial file according to Industrial</h5>
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
            <div class="col-sm-12 d-flex justify-content-center mt-3" data-aos="fade-up" data-aos-dratation="3000">

                <a href="{{ 'register' }}" class="btn btn-primary bsb-btn-2xl mb-3">
                    Register Now

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
