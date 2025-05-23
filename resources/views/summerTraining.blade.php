@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        {{-- <div class="about-us-content">
            <h1><b>Summer Training</b></h1>
        </div> --}}
    </section>
    <!-- Register for Traning -->
    <!--The Summer Training Section Start-->
    <div class="container-fluid  pb-2" style="background: #D9D9D9;">
        <div class="container">
            <div class="container" style="max-width: 1000px;">
                <div class="row" >
                    <div class="col-lg-3 col-md-2 col-sm-12"></div>
                    <div class="col-lg-6 col-md-8 col-sm-12 text-center justify-content-center">
                        <div class="card-section-summer"> 
                            <div class="d-flex">
                                <img src="{{ asset('ekimage/image/summertraining-user.png') }}" alt=""
                                    class="img-fluid">
                                <h3>Summer Training</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12"></div>
                </div>
            </div>
            <div class="row mt-5">
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
            <div class="row mt-3">
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

            <div class="row mt-2" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h2 id="h2">Welcome to the Ekana’s
                        Summer Training
                        in Lucknow!</h2>
                    <br>
                    <p style="text-align:justify;">
                        Are you a student or a professional looking for an opportunity to enhance your skills during the
                        summer break? Look no further! Our comprehensive summer training program can help you gain valuable
                        knowledge and practical experience in various fields.</p>

                    <p style="text-align:justify;"> At Ekana, we strive to provide industry relevant training that equips
                        participants with necessary tools to excel in their careers. With a team infrastructure and hands on
                        learning approach, we ensure that every participant gets the most out of their training.</p>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section start-->
    <div class="container-desc bg-white">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview" data-aos="fade-down" data-aos-duration="3000">
                        Overview
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">Our summer training program in Lucknow will
                        offer a diverse range of courses for students and
                        professionals. Whether you are interested in software development, digital marketing, web designing
                        or cyber security, we have course that suits your needs.</p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--second row-->
            <div class="row" data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview" data-aos="fade-down" data-aos-duration="3000">
                        Course Description
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        (here we can provide a detailed tabular description with course name and technologies that including
                        in the summer training). We understand the importance of staying up-to-date with the latest
                        technologies and industry trends. That’s why our courses are carefully designed to cover the
                        fundamental concepts as well as advanced topics in each field. Our instructors are experts in their
                        domains and provide comprehensive knowledge through interactive lectures, practical sessions, and
                        real-life case studies. You will also have the opportunity to work on live projects, enabling you to
                        apply your skills and gain hands on experience.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Third Row-->
            <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview" data-aos="fade-down" data-aos-duration="3000">
                        Certification
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Upon Successful completions of the summer training program, you will receive a globally recognized
                        certification. This certification will validate your skills and increase your employability in the
                        competitive job market. With our certification, you can showcase your expertise and stand out from
                        the crowd.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--four Row-->
            <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview" data-aos="fadw-down" data-aos-duration="3000">
                        Fee Structure
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        We will offer flexible fee structure to suit different budgets. Our aim is to make quality training
                        accessible to everyone. For specific details regarding the fee structure of each course, please
                        visit our website or contact our team.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Five Row-->
            <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="card-overview" data-aos="fade-down" data-aos-duration="3000">
                        Learning Outcome
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        By the end of the training, you will have gained in-depth knowledge of the selected course,
                        including its concepts, tools, and techniques. You will be able to build applications, implement
                        strategies and solve real world problems based on the training received.
                    </p>
                    <p style="color:rgba(103, 102, 102, 1);font-weight:bold;margin-top:1rem;text-align:justify;"> Join us
                        for Summer Training in Lucknow and give your career a head start! Contact Us today to enroll
                        in our program and secure your spot. Let us help you unlock your true potential and pave the way for
                        successful future.</p>
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
                    <h2 class=" text-center" id="h2" style="color:black;">Summer Training - CS/IT (4/6 WEEKS)</h2>
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
    <div class="hero mt-5"  data-aos="fade-right" data-aos-duration="3000">
        <h1>Summer Training Program</h1>
        <p>Join us for an enriching experience</p>
    </div>
    <!-- Program Tenure & Timing -->
    <div class="container content-section">
        <div class="row"  data-aos="zoom-in" data-aos-duration="3000">
            <div class="col-md-4">
                <h2>Program Tenure & Timing</h2>
                <p>This program commences every year at Ekana Techonologies in June/July and ends after nearly 6 weeks
                    in
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
    <h2 class="text-center mt-3"><b class="h2">Summer Training Glimpse</b></h2>
    <div class="line"></div>
    <div class="container content-section">
        <div class="row py-5" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-md-4 hover-move mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move mb-3"> <img src="ekimage/image/47.jpeg" Group Activity class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div>
        {{-- <div class="row mt-2" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-md-4 hover-move mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move mb-3"> <img src="ekimage/image/47.jpeg" Group Activity class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div> --}}
    </div>

    <div class="container">
        <h2 class="text-center" ><b class="h2">Additional Benefits</b></h2>
        <div class="line mb-3"></div>
        {{-- <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle"> --}}
        <div class="row" data-aos="zoom-in" data-aos-duration="3000">
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

                <a href="{{ 'register' }}" class="btn btn-primary bsb-btn-2xl mb-3">
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
@endsection
