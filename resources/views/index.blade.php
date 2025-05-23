@extends('layout.mainpages')
@section('main-contant')
    {{-- <link href="https://embed.tawk.to/_s/v4/app/67e61092c05/css/bubble-widget.css" rel="stylesheet"> --}}
    <style type="text/css" class="tawk-global-variables">
        :root {
            --tawk-header-background-color: #d42300 !important;
            --tawk-header-background-color-alpha: #d4230050 !important;
            --tawk-header-text-color: #ffffff !important;
            --tawk-header-override-padding-top: 1rem !important;
            --tawk-footer-override-padding-bottom: 0 !important;
        }

        .tawk-chat-bubble code,
        .tawk-chat-bubble pre {
            border-color: #00000040 !important;
            background-color: #00000020 !important;
        }

        .tawk-visitor-chat-bubble {
            background: #e5e5e5 !important;
            color: #333333 !important;
        }

        .tawk-agent-chat-bubble {
            background: #d42300 !important;
            color: #ffffff !important;
        }

        .tawk-agent-chat-bubble-dots {
            background: #d42300 !important;
        }

        .tawk-bubble-container {
            position: fixed;
            top: 90%;
            transform: translatey(-50%);
            z-index: 1000;
        }

        .tawk-bubble-container {
            right: 0;
        }
    </style>

    <!-- The Modal Popup Start-->

    <div class="modal" id="myModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body modal-zoom">
                    <img src="ekimage/image/4.jpg" alt="Image Preview hover" style="width:100%; height:auto;">
                </div>
                <div class="modal-footer">
                    <a href="{{ url('register') }}" class="btn btn-danger">Register Now</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>

    <!-- The Modal Popup Ends-->

    <!-- slider start -->
    <div class="container-fluid p-0">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators -->
            {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
            </div> --}}

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="ekimage/image/slider1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="ekimage/image/slider2.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="ekimage/image/slider3.jpg" class="d-block w-100" alt="Slide 3">
                </div>

            </div>

            <!-- Navigation Controls -->
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}

        </div>
    </div>
    {{-- ===== end slider===== --}}


    {{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($showslider as $slider)
                <div class="carousel-item active" data-bs-interval="5000"> --}}
    {{-- <img src="ekimage/image/44.png" class="d-block w-100" alt="..."
                style="max-height:450px; background-size: cover;background-repeat:no-repeat;">
             --}}
    {{-- 
                    <img src="{{ asset('/storage/' . $slider->add_slider) }}" class="d-block w-100" alt=""
                        style="max-height:100vh; background-size: cover;background-repeat:no-repeat; ">

                </div>
            @endforeach --}}
    {{-- @foreach ($showslider as $slider)
            <div class="carousel-item hover-move active" data-bs-interval="2000">
              <img src="ekimage/image/Desktop - 6.png" class=" d-block w-100" alt="..."
                    style="max-height:450px; background-size: cover;background-repeat:no-repeat;">
                    
                     <img src="{{ asset('/storage/' . $slider->add_slider) }}" class="d-block w-100" alt=""
                     style="max-height:450px; background-size: cover;background-repeat:no-repeat;">
                    
            </div>
            @endforeach  --}}
    {{-- <div class="carousel-item hover-move" data-bs-interval="2000">
                <img src="ekimage/image/Desktop - 7.png" class=" d-block w-100" alt="..."
                    style="max-height:450px; background-size: cover;background-repeat:no-repeat;">
            </div> --}}
    {{-- </div>
    </div> --}}
    <!-- slider end -->




    <!-- internship program -->
    <div class="container">
        <h2 class="text-center mt-5"><b class="h2">Internship Training</b></h2>
        <div class="line"></div>
        <div id="newsCarousel" class="carousel slide mt-3" data-bs-ride="carousel" data-bs-interval="3000"
            data-aos="fade-up" data-aos-duration="3000">
            {{-- <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle "> --}}
            <!-- Buttons for prev and next -->
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-item">
                                <img src="ekimage/images/WhatsApp Image 2024-10-29 at 6.16.38 PM.jpeg" alt="Placeholder"
                                    class="img-fluid"
                                    style="height: auto; border-radius: 10px; box-shadow: 2px 3px 8px 2px gray;">
                            </div>
                        </div>
                        <div class="col-md-4 img1">
                            <div class="news-item">
                                <img src="ekimage/images/img1.jpeg" alt="Placeholder" class="img-fluid"
                                    style="height: auto; border-radius: 10px; box-shadow: 2px 3px 8px 2px gray;">
                            </div>
                        </div>
                        <div class="col-md-4 img1">
                            <div class="news-item ">
                                <img src="ekimage/images/img2.jpeg" alt="Placeholder" class="img-fluid"
                                    style="height: auto; border-radius: 10px; box-shadow: 2px 3px 8px 2px gray;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-item">
                                <img src="ekimage/images/img3.jpeg" alt="Placeholder" class="img-fluid"
                                    style="height: auto; border-radius: 10px; box-shadow: 2px 3px 8px 2px gray;">
                            </div>
                        </div>
                        <div class="col-md-4 img1">
                            <div class="news-item">
                                <img src="ekimage/images/img4.jpeg" alt="Placeholder" class="img-fluid"
                                    style="height: auto; border-radius: 10px; box-shadow: 2px 3px 8px 2px gray;">
                            </div>
                        </div>
                        <div class="col-md-4 img1">
                            <div class="news-item">
                                <img src="ekimage/images/WhatsApp Image 2024-10-29 at 6.16.38 PM.jpeg" alt="Placeholder"
                                    class="img-fluid"
                                    style="height: auto; border-radius: 10px; box-shadow: 2px 3px 8px 2px gray;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- internship program end -->

    <!-- about Page -->
    <!-- About 7 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-8">
        {{-- <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class=" text-center"><b class="h2">About Us</b></h2>
                   <div class="line"></div>
                </div>
            </div>
        </div> --}}

        <div class="container ">
            <div class="row gy-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 hover-move">
                    <img class="img-fluid " loading="lazy" src="ekimage/image/Frame 221 (2).png" alt="About Us">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6">
                    <h2 class="ms-5"><b class="h2">About Us</b></h2>
                    {{-- <div class="line"></div> --}}
                    <div class="row justify-content-lg-end" data-aos="fade-right" data-aos-duration="4000">
                        <div class="col-12 col-lg-11">
                            <div class="about-wrapper">
                                <p class="lead mb-4 mb-md-5" style="text-align: justify;">At Ekana Technologies, our
                                    mission is to deliver excellence through cutting-edge software solutions, IT
                                    consulting, and career-transforming training programs. We believe in nurturing
                                    talent and fostering innovation to build a brighter future for individuals and
                                    businesses alike.
                                <div class="row gy-4 mb-4 mb-md-5">
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-3">
                                                <h3 class=" fw-bold text-primary text-center mb-2 counter"
                                                    data-end-count="370">0+</h3>
                                                <p class="text-primary text-center fs-2 fw-bold">Our Students</p>
                                                <p class="fw-bold text-center m-0">Qualified Experts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-3">
                                                <h3 class=" fw-bold text-primary text-center mb-2 counter"
                                                    data-end-count="1000">0+</h3>
                                                <p class="text-primary text-center fs-2 fw-bold">Our Projects</p>
                                                <p class="fw-bold text-center m-0">Satisfied Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('/about') }}" class="btn btn-primary bsb-btn-2xl">
                                    Read More
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
    </section>
    <!-- about page end -->
    <!-- conter page -->
    <div class="team-section">
        <div class="team-overlay"></div>
        <div class="container team-content">
            <div class="team-item">
                <h1 class="counter" data-end-count="35">0+</h1>
                <p>Team</p>
            </div>
            <div class="team-item">
                <h1 class="counter" data-end-count="1500">0+</h1>
                <p>Project</p>
            </div>
            <div class="team-item">
                <h1 class="counter" data-end-count="1000">0+</h1>
                <p>Trained Students</p>
            </div>
            <div class="team-item">
                <h1 class="counter" data-end-count="100">0+</h1>
                <p>Products</p>
            </div>
            <div class="team-item">
                <h1 class="counter" data-end-count="40">0+</h1>
                <p>Technologies</p>
            </div>
        </div>
    </div>
    <!-- counter end -->


    <!-- Student Review Section -->
    <div class="container">
        {{-- <h2 class="text-center mt-5"><b class="h2">Recent Placement</b></h2>
        <div class="line"></div> --}}
        <div class="row">
            <div id="newsCarousel" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="2000"
                data-aos="fade-up" data-aos-duration="5000">
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row" data-aos="fade-left" data-aos-duration="4000">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="news-item">
                                    <img src="ekimage/images/placement1.jpg" alt="Placement 1"
                                        class="img-fluid rounded shadow">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="news-item">
                                    <img src="ekimage/images/placement2.jpg" alt="Placement 2"
                                        class="img-fluid rounded shadow">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="news-item">
                                    <img src="ekimage/images/placement3.jpg" alt="Placement 3"
                                        class="img-fluid rounded shadow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="news-item">
                                    <img src="ekimage/images/4.jpg" alt="Placement 4" class="img-fluid rounded shadow">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="news-item">
                                    <img src="ekimage/images/5.jpg" alt="Placement 5" class="img-fluid rounded shadow">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="news-item">
                                    <img src="ekimage/images/6.jpg" alt="Placement 6" class="img-fluid rounded shadow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
            </div>
        </div>
    </div>
    <!-- our plcaement recent end -->

    <!-- our traning programs -->

    <div class="box box-training">
        <div class="container-trainig">
            <div class="container">
                <h2 class="text-center h2" style="color:#767676;font-weight:bold;"><b> Our <b>Traning</b> Programs</b>
                </h2>
                <div class="line"></div>
                <div class="row mt-4" data-aos="zoom-in-right" data-aos-duration="4000">
                    <div class="col-lg-4 col-md-6 mb-2  col-sm-12">
                        <div class="card h-100 card-100">
                            <div class="card-body text-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" class="card-icon mb-3"
                                    alt="Icon">
                                <h5 class="card-title">Summer Training (45-60 Days)</h5>
                                <p class="card-text text-dark">
                                    Ekana Technologies’ Summer Training program is designed to provide <strong
                                        style="color:#33334d;">B.Tech (CS/IT), BCA,
                                        MCA, Polytechnic </strong> students, and professionals in courses like Web
                                    Development, App
                                    Development, Cross-Platform Development, and UI/UX Design with hands-on experience in
                                    the latest technologies. Over 45 to 60 days, participants will work on real-world
                                    applications and gain foundational knowledge, strengthening technical skills and
                                    problem-solving abilities. The program prepares participants for both academic
                                    excellence and career success through live projects.
                                </p>
                                <a href="{{ url('/summerTraining') }}" class="btn1" target="_blank">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2  col-sm-12">
                        <div class="card h-100 card-100">
                            <div class="card-body text-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" class="card-icon mb-3"
                                    alt="Icon">
                                <h5 class="card-title">Vocational Training(45-60 Days)</h5>
                                <p class="card-text text-dark">Ekana Technologies offers a
                                    specialized Vocational Training program for <strong style="color:#33334d;"> B.Tech
                                        (CS/IT), BCA, and MCA, Polytechnic </strong>
                                    students, focusing on bridging the gap between academic learning and industry standards.
                                    This 45-60 day program covers essential technologies such as Software Development,
                                    Cybersecurity, Mobile App Development, and UI/UX Design, providing participants with
                                    practical skills that can be directly applied in the workforce. Through interactive
                                    practical skills that can be directly applied in the workforce. Through interactive
                                    sessions and project work, participants will enhance their employability and readiness
                                    for industry challenges.
                                </p>
                                <a href="{{ url('/vocationalTraining') }}" class="btn1 mb-4" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2 col-sm-12">
                        <div class="card h-100 card-100">
                            <div class="card-body text-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" class="card-icon mb-3"
                                    alt="Icon">
                                <h5 class="card-title">Winter Training (45-60 Days)</h5>
                                <p class="card-text text-dark">Ekana Technologies’ Winter Training
                                    program is designed to empower <strong style="color:#33334d;"> B.Tech
                                        (CS/IT), BCA, and MCA, Polytechnic </strong> students, as
                                    well as professionals, with advanced skills during their winter break. This 45-60 day
                                    course offers an opportunity to work on real-world projects, ensuring practical
                                    experience and exposure to various emerging technologies. The Winter Training program is
                                    perfect for students and professionals who want to enhance their technical skills during
                                    their break.
                                </p>
                                <a href="{{ url('/winterTraining') }}" class="btn1" target="_blank">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-2 col-sm-12">
                        <div class="card h-100 card-100">
                            <div class="card-body text-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" class="card-icon mb-3"
                                    alt="Icon">
                                <h5 class="card-title">Apprenticeship(6 Month)</h5>
                                <p class="card-text text-dark">The Apprenticeship program at Ekana
                                    Technologies offers <strong style="color:#33334d;"> B.Tech
                                        (CS/IT), BCA, and MCA, Polytechnic </strong> students, and aspiring
                                    professionals the opportunity to work with industry experts on live projects for six
                                    months. This program helps participants master industry-specific tools and technologies
                                    while gaining experience in Software Development, Database Management, and UI/UX Design.
                                    With mentorship, networking opportunities, and exposure to real-time challenges,
                                    participants can seamlessly transition from academic learning to professional work
                                    environments.
                                </p>
                                <a href="{{ url('/apprenticeshipTraining') }}" class="btn1" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2 col-sm-12">
                        <div class="card h-100 card-100">
                            <div class="card-body text-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" class="card-icon mb-3"
                                    alt="Icon">
                                <h5 class="card-title">PD & Skills Development(30 Days)</h5>
                                <p class="card-text text-dark">
                                    Ekana Technologies’ PD & Skills Development program is a focused, 30-day initiative
                                    designed for <strong style="color:#33334d;"> B.Tech
                                        (CS/IT), BCA, and MCA, Polytechnic </strong> students, as well as
                                    professionals, to develop both technical and soft skills. This program emphasizes
                                    communication, problem-solving, teamwork, and leadership—critical abilities that
                                    complement technical knowledge. The training includes mock interviews, resume-building
                                    sessions, and professional development, ensuring that participants are well-rounded and
                                    prepared for success in any organization.
                                </p>
                                <a href="#" class="btn1">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2 col-sm-12">
                        <div class="card h-100 card-100">
                            <div class="card-body text-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" class="card-icon mb-3"
                                    alt="Icon" style="color:white; ">
                                <h5 class="card-title">Syllabus Training(30 Days)</h5>
                                <p class="card-text text-dark">
                                    Ekana Technologies offers an intensive Syllabus Training program for <strong
                                        style="color:#33334d;"> B.Tech
                                        (CS/IT), BCA, and MCA, Polytechnic </strong> students seeking to strengthen their
                                    academic understanding.
                                    This 30-day program focuses on core subjects such as Programming, Data Structures,
                                    Database Management, Networking, and others, aligned with university syllabi. With
                                    practical implementation alongside theoretical knowledge, this training boosts academic
                                    performance and prepares students for their future career roles in Software Development,
                                    App Development, UI/UX Design, and more.
                                </p>
                                <a href="{{ url('/syllabusTraining') }}" class="btn1 mb-4" target="_blank">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our traning program end -->
    <div class="container pt-3">
        {{-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <h2 class="text-center"><b class="h2">Student Reviews</b></h2>
                <div class="line"></div>
            </div>
        </div> --}}
        <div class="row align-items-center" data-aos="fade-right" data-aos-duration="4000">
            <!-- Text Section -->
            <div class="col-md-7">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class=""><b class="h2">Student Reviews</b></h2>
                    {{-- <div class="line"></div> --}}
                </div>
                <p style="text-align:justify;">At Ekana Technology, we pride ourselves on our ability to deliver
                    high-quality courses tailored to the needs of both professionals and beginners alike. With a strong
                    focus on flexibility and adaptability, our training programs are designed to accommodate the unique
                    learning requirements of each individual. Our comprehensive Training Course services encompass
                    Vocational Training, Summer Training, Industrial Training, Apprenticeship Training, Internship
                    Training, and Project Training.
                </p>
                <p style="text-align:justify;">
                    Whether you're a student looking to bolster your resume, a working
                    professional seeking to upskill, or an entrepreneur aiming to expand your knowledge, our diverse
                    course offerings cater to all. What sets us apart is our team of experienced instructors who bring
                    real-world industry expertise to the classroom. Passionate about sharing their knowledge, our
                    instructors provide individual attention and guidance, ensuring that every student grasps the
                    subject matter thoroughly. </p>
            </div>

            <!-- Video Section -->
            <div class="col-md-5 mb-5 mt-5 ">
                {{-- <h3 style="font-weight: bold;"> SUMMER TRAINING & APPRENTICESHIP</h3>
                <hr class="w-90 mx-auto mb-2 mb-xl-9 border-dark-subtle"> --}}
                <div class="ratio ratio-16x9 ">
                    <!--Crousel slider status start-->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                {{-- <img src="{{asset('ekimage/image/khurshedalam.jpg')}}" class="d-block" alt="..." style="height:5rem;width:5rem;border-radius:100%"> --}}
                                <iframe width="1400" src="https://www.youtube.com/embed/A9b0K-RKHtc"
                                    title="Student  Feedback  Batch-2024  Ekana Technologies Pvt Ltd Lucknow"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" class="img-fluid" allowfullscreen
                                    style="height: 300px;  border-radius: 10px;  ">
                                </iframe>
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:#dc3024;">Khurshed Alam</h5>
                                    <p style="color:#dc3024;">Govt. Polytechnic Aadampur Tarabaganj Gonda</p>
                                </div> --}}
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                                <iframe width="1400" src="https://www.youtube.com/embed/A9b0K-RKHtc"
                                    title="Student  Feedback  Batch-2024  Ekana Technologies Pvt Ltd Lucknow"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" class="img-fluid" allowfullscreen
                                    style="height: 300px;  border-radius: 10px; ">
                                </iframe>
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div> --}}
                            </div>
                            <div class="carousel-item">
                                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                                <iframe width="1400" src="https://www.youtube.com/embed/A9b0K-RKHtc"
                                    title="Student  Feedback  Batch-2024  Ekana Technologies Pvt Ltd Lucknow"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" class="img-fluid" allowfullscreen
                                    style="height: 300px;  border-radius: 10px; ">
                                </iframe>

                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div> --}}
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!--Crousel Slider status ends-->
                </div>
            </div>
        </div>
    </div>
    <div id="content-section">
        <div class="container-fluid   pt-4  mt-4" id="container-bot">
            {{-- <h2 class="text-center" style="color:white;font-weight:bold;" data-aos="fade-right"
                data-aos-duration="3000"><b class="h2">Popular Courses</b></h2>
                <div class="line"></div> --}}
            <div class="container">
                <div class="row py-4" data-aos="zoom-in-right" data-aos-duration="3000">
                    <img src="ekimage/image/Frame 1000006663.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Api Chat tawk-icon --}}
   
        <div id="tawk-bubble-container" role="button" tabindex="0" class="tawk-bubble-container">
            <div class="tawk-icon-right"><i role="button" tabindex="0" data-text="Close" aria-label="Close"
                    class="tawk-icon tawk-icon-close tawk-icon-small"></i><img
                    src="https://embed.tawk.to/_s/v4/assets/images/attention-grabbers/168-r-br.svg"
                    alt="Chat attention grabber" style="width: 124px; height: 79px;"></div>
        </div>
  

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67e65af3dd04e5190c442091/1indt6ie4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Ekana Inaformation page End -->
@endsection
