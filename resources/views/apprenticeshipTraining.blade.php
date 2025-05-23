@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        {{-- <div class="about-us-content">
            <h1><b>Apprenticeship Training</b></h1>
        </div> --}}
    </section>

    <div class="container-fluid  pb-2" style="background: #D9D9D9;">
        <div class="container">
            <div class="container" style="max-width: 1000px;">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-12"></div>
                    <div class="col-lg-6 col-md-8 col-sm-12 text-center justify-content-center">
                        <div class="card-section-summer">
                            <div class="d-flex">
                                <img src="{{ asset('ekimage/image/apperntshipimage.png') }}" alt=""
                                    class="img-fluid">
                                <h3>APPRENTICESHIP TRAINING</h3>
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

            <div class="row mt-2">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12" data-aos="fade-up" data-aos-dratation="3000">
                    <h2 id="h2" data-aos="fade-down-right" data-aos-dratation="3000">Welcome to the Ekana’s Apprenticeship Training in Lucknow!</h2>
                    <br>
                    <p style="text-align:justify;">
                        At our company, we take pride in offering high quality apprenticeship training that prepared
                        individuals for successful careers in various fields. With a focus on providing comprehensive skills
                        and knowledge, our training program is designed to empower learners to excel in their chosen
                        industry.
                    </p>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section start-->
    <div class="container-desc bg-white">
        <div class="container">

            <!--second row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center"  data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Course Description
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our courses are carefully crafted to meet industry standards and requirements. We offer a wide range
                        of training programs, catering different skill levels and interests. Whether you are a beginner
                        seeking to kickstart your career or an experienced professional looking to enhance your expertise,
                        our training courses can help you achieve our goals.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Third Row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center"  data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Certification
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3"  data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Upon Successful completion of our apprenticeship training program, participants will be awarded
                        certifications that are recognized and valued by leading companies in the industry. These
                        certifications act as a testament to the knowledge and skills gained during the training, providing
                        individuals with a competitive edge in the job market.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--four Row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center"  data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Fee Structure
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3"  data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        We understand the importance of affordability, and thus, our internship training program in Lucknow
                        is priced competitively. We offer flexible payment options to ensure that financial constraints do
                        not hinder your learning journey. For detailed the fee structure is described below.We understand
                        the importance of making quality training accessible to all. With this in mind, our apprenticeship
                        training program in Lucknow is offered at competitive fees. We believe that investing in one’s
                        education is an investment in their future success, and we strive to provide value for money to all
                        our participants.
                    </p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            <!--Five Row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center"  data-aos="fade-down" data-aos-dratation="3000">
                    <div class="card-overview">
                        Learning Outcome
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3" data-aos="zoom-in" data-aos-dratation="3000">
                    <p style="color:rgba(103, 102, 102, 1);text-align:justify;">
                        Our training program focuses on enabling learners to acquire essential skills that are in demand in
                        today’s competitive world. By the end of the program, participants will develop a strong foundation
                        in their chosen field, including proficiency in industry standard specific tools and technologies.
                        They will also gain valuable problem solving and teamwork skills, enhancing their employability and
                        career prospects.

                    </p>

                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </div>
    <!---The Description Section ends-->
    <!--The Summer Training Section End-->

    <!-- Hero Section -->
    <div class="hero"  data-aos="fade-right" data-aos-dratation="3000">
        <h1>Summer Training Program</h1>
        <p>Join us for an enriching experience</p>
    </div>
    <!-- Program Tenure & Timing -->
    <div class="container content-section">
        <div class="row"  data-aos="zoom-in" data-aos-dratation="3000">
            <div class="col-md-4 ">
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
    <div class="row" >
        <h2 class="text-center mt-3"><b class="h2">Summer Training Glimpse</b></h2>
        <div class="line"></div>

    </div>

    <div class="container content-section">
       
        <div class="row py-5"  data-aos="fade-up" data-aos-dratation="3000">
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Training Session"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg"  class="img-fluid rounded">
            </div>
            <div class="col-md-4 hover-move  mb-3"> <img src="ekimage/image/47.jpeg" alt="Practical Learning"
                    class="img-fluid rounded">
            </div>
        </div>
        {{-- <div class="row mt-1"  data-aos="fade-down" data-aos-dratation="3000" >
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
        <h2 class="text-center"><b class="h2">Additional Benefits</b></h2>
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
            <div class="col-sm-12 d-flex justify-content-center mt-3" data-aos="fade-up" data-aos-dratation="3000">
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
