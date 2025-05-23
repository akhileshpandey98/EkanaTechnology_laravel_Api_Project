@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        <div class="about-us-content" data-aos="fade-down" data-aos-duration="4000">
            <h1><b class="display-1 fw-bold" style=" text-shadow: 2px 3px 5px red;">About Us</b></h1>
        </div>
    </section>
    <!-- About 7 - Bootstrap Brain Component -->
    <section class="py-3">
        <div class="container">
            <div class="row mt-3">

                <div class="col-lg-5 col-md-4 col-sm-12  mb-3" data-aos="fade-up" data-aos-duration="4000">
                    <img src="{{ asset('ekimage/image/about-image1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="4000">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <h2 class=""><b class="h2">About Our Company</b></h2>
                        {{-- <div class="line"></div> --}}
                    </div>
                    <p class="" style="text-align: justify;font-size:1.2rem;padding:5px;">
                        Welcome to <b>Ekana Technology Pvt. Ltd.</b>, formerly known as <b>Vedanti Software Solutions
                            Private Ltd.</b>
                        Established in 2014 and rebranded in 2020, we are a cutting-edge IT solutions provider dedicated
                        to delivering high-quality, result-driven services to a diverse client base, from mid-sized
                        enterprises to large corporations. We specialize in business software consultancy and deliver
                        innovative solutions globally, spanning the <b>USA, Canada, UK, Europe,</b> and beyond.
                    </p>
                    <p class="" style="text-align: justify;font-size:1.2rem;padding:5px;">
                        Our mission is not just about providing software consultancy, but also about ensuring our
                        clients thrive in an ever-evolving technological landscape. That’s why we’re committed to
                        <b>upskilling resources</b> and staying at the forefront of the IT industry’s rapid
                        advancements. Our
                        proactive approach in embracing new technologies and methodologies ensures that we provide
                        <b>innovative, efficient, and scalable solutions</b> that align with your business objectives.
                    </p>
                    <p class="" style="text-align: justify;font-size:1.2rem;padding:5px;">
                        At <b>Ekana Technology</b>, we offer a <b>wide range of professional development
                            opportunities</b> through our
                        <b>training and development programs,</b> designed for both beginners and experienced
                        professionals.
                        Whether you're a student looking to enhance your skills, a working professional aiming to
                        upskill, or an entrepreneur seeking to stay ahead of the curve, we have the right course for
                        you. Our <b>Training Courses</b> include:
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- about page end -->
    <!--The Choose The Training Center start-->
    <div class="choose-training-section">
        <div class="container" style="max-width:1200px;">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-4">
                <h2><b class="h2">Why our choose Training Center</b></h2>
                <div class="line"></div>

            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="group-card">
                        <div class="card">
                            <img src="{{ asset('ekimage/image1/blog-6.jpg') }}" alt="" class="img-fluid"
                                style="height: 13rem;">
                            <div class="card-body">
                                <div class="card-trainign">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <h4 class="text-center fw-bold">Learn skills in the class room</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <img src="{{ asset('ekimage/image1/blog-3.jpg') }}" alt="" class="img-fluid"
                            style="height: 13rem;">
                        <div class="card-body">
                            <div class="card-trainign">
                                <i class="fa-solid fa-landmark"></i>
                            </div>
                            <h4 class="text-center fw-bold">Best Industry trainers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <img src="{{ asset('ekimage/image1/blog-2.jpg') }}" alt="" class="img-fluid"
                            style="height: 13rem;">
                        <div class="card-body">
                            <div class="card-trainign">
                                <i class="fa-regular fa-file"></i>
                            </div>
                            <h4 class="text-center fw-bold">Life time support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--The Choose The Training Center ends-->
    <!--The Latest Job Requirement start-->
    {{-- <div class="latest-job">
       <div class="container-job-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-4">
                    <h2 class="text-center"><b>LATEST JOB ORIENTED PROGRAM</b></h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="card-11">
                        <img src="{{asset('ekimage/image/summertraing.png')}}" alt="" class="card-img">
                        <h1
                            style="color:white;font-size:2rem;font-weight:200;text-align:center;position: relative;top:3rem">
                            <b>SUMMER
                                TRAINING</b>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="card-12">
                        <img src="{{asset('ekimage/image/internshipimage.png')}}" alt="" class="card-img2">
                        <h1
                            style="color:white;font-size:2rem;font-weight:200;text-align:center;position: relative;top:3rem">
                            <b>INTERNSHIP TRAINING</b>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="card-13">
                        <img src="{{asset('ekimage/image/apperntshipimage.png')}}" alt="" class="card-img3">
                        <h1
                            style="color:white;font-size:2rem;font-weight:200;text-align:center;position: relative;top:3rem">
                            <b>APPRENTICESHIP TRAINING</b>
                        </h1>
                    </div>
                </div>
            </div>
            <!--Seconds Me about training-course-->
            <div class="row mb-3">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="card-14">
                        <img src="{{asset('ekimage/image/industrialimage.png')}}" alt="" class="card-img4">
                        <h1
                            style="color:white;font-size:2rem;font-weight:200;text-align:center;position: relative;top:3rem">
                            <b>INDUSTRIAL TRAINING</b>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="card-15">
                        <img src="{{asset('ekimage/image/projectimage.png')}}" alt="" class="card-img5">
                        <h1
                            style="color:white;font-size:2rem;font-weight:200;text-align:center;position: relative;top:3rem">
                            <b>PROJECT TRAINING</b>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="card-16">
                        <img src="{{asset('ekimage/image/vocationalimage.png')}}" alt="" class="card-img6">
                        <h1
                            style="color:white;font-size:2rem;font-weight:200;text-align:center;position: relative;top:3rem">
                            <b>VOCATIONAL TRAINING</b>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div> --}}
    <!--The Latest Job Requirement ends-->

    <!--The Our Teams Section Start-->
    <div id="our-teams ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                    <h2 class="text-center"><b class="h2">Our Team</b></h2>
                    <div class="line"></div>

                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-12"></div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-12 mt-3" data-aos="fade-up" data-aos-duration="3000">
                    <p class="text-dark opacity-75" style="text-align: justify;font-size:1.2rem;padding:5px;">
                        Our team is the cornerstone of our success, a group of passionate professionals committed to
                        delivering excellence across every aspect of our work. With a focus on innovation,
                        collaboration, and problem-solving, each member brings a unique set of skills that contribute to
                        our collective vision. Together, we strive to push boundaries, enhance client experiences, and
                        create impactful solutions that drive lasting results.
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-12"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/anup_sir.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Anup Mishra
                                <small>Head of Training & Development</small>
                            </h3>
                            <p class="description">
                                Anup leads our training programs and excels in crafting robust full-stack solutions
                                tailored to client needs.
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/amit.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Amit Singh
                                <small>Graphic Designer</small>
                            </h3>
                            <p class="description">
                                Amit creates visually compelling designs that enhance user experience and brand
                                identity.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/shurti.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Shruti Singh
                                <small>Business Analyst</small>
                            </h3>
                            <p class="description">
                                Shruti specializes in bridging the gap between business goals and technical solutions
                                with insightful analysis.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/ishita.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Ishita Anand
                                <small>Business Analyst</small>
                            </h3>
                            <p class="description">
                                Ishita brings her expertise in strategic planning to ensure seamless project execution
                                and client satisfaction.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/piyushpanday.jpg') }}" alt=""
                                    class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Piyush Pandey
                                <small>Business Development Executive</small>
                            </h3>
                            <p class="description">
                                Piyush drives growth by identifying opportunities and building strong client
                                relationships.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/khurshedalam.jpg') }}" alt=""
                                    class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Khurshed Alam
                                <small>Web Developer</small>
                            </h3>
                            <p class="description">
                                Khurshed develops dynamic, user-friendly websites that deliver exceptional performance
                                and functionality.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/akhilesh.jpg') }}" alt=""
                                    class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Akhilesh Pandey
                                <small>Web Developer</small>
                            </h3>
                            <p class="description">
                                Akhilesh develops dynamic, user-friendly websites that deliver exceptional performance
                                and functionality.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/shivam.jpg') }}" alt=""
                                    class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Shivam Singh
                                <small>Wordpress Developer</small>
                            </h3>
                            <p class="description">
                                Shivam develops dynamic, user-friendly websites that deliver exceptional performance
                                and functionality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

    </div>
    <!--The Our Teams Section Ends-->


    <!--The Count Section Start-->
    <div class="count-section">
        <div class="count-section-child">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h2><b class="display-2" style="color:white;">Our Great Achievements</b></h2>
                    </div>
                    {{-- <div class="line"></div> --}}

                </div>
                <div class="row pt-4">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-2">
                        <h1 class="counter" data-end-count="1000" style="color:rgba(255,255,255,1);font-weight:bold;">
                            <b>0+</b>
                        </h1>
                        <h2 style="color:rgba(255,255,255,1);font-weight:600;">Total Students</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-2">
                        <h1 class="counter" data-end-count="800" style="color:rgba(255,255,255,1);font-weight:bold;">
                            <b>0+</b>
                        </h1>
                        <h2 style="color:rgba(255,255,255,1);font-weight:600;">Total Placements</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-2">
                        <h1 class="counter" data-end-count="3000" style="color:rgba(255,255,255,1);font-weight:bold;">
                            <b>0+</b>
                        </h1>
                        <h2 style="color:rgba(255,255,255,1);font-weight:600;">Total Recruiters</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--The Count Section Start-->
    <!--The Our Mission Section Start-->
    <div class="our-seission" style="background-color: rgba(128, 128, 128,0.05);">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-2 col-md-12 col-sm-12 mb-2"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-2">

                    <div class="card-group">
                        <div class="card">
                            <img src="{{ asset('ekimage/image/mission.jpg') }}" class="card-img-top img-fluid"
                                alt="..." style="height: 13rem;">
                            <div class="card-body">
                                <div class="card-mission">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                                <h2 class=" text-center pt-2"><b>Our Mission</b></h2>
                                <p class="card-text text-dark opacity-75" style="text-align:justify;">To
                                    be a
                                    <b>global leader</b> in IT training and consultancy, empowering businesses and
                                    individuals
                                    through
                                    advanced technology and unparalleled learning experiences.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                    <div class="card-group">
                        <div class="card">
                            <img src="{{ asset('ekimage/image/vission.jpg') }}" class="card-img-top img-fluid"
                                alt="..." style="height: 13rem;">
                            <div class="card-body">
                                <div class="card-vision">
                                    <i class="fa-solid fa-gauge"></i>
                                </div>
                                <h2 class=" text-center pt-4"><b>Our Vision</b></h2>
                                <p class="card-text text-dark opacity-75" style="text-align:justify;">Lorem
                                    To deliver <b>market-defining solutions</b> that drive business growth and ensure
                                    clients
                                    receive high-quality, competitive advantages.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 mb-2"></div>

            </div>
        </div>
    </div>


    <!--The Our Mission Section Start-->
    <!--feculity section start-->
    <div class="faculity-section">
        <div class="container">
            <div class="row" data-aos="fade-down" data-aos-duration="3000">
                <div class="col-lg-1 col-md-1 col-sm-12 mb-2"></div>
                <div class="col-lg-10 col-md-10 col-sm-12 mb-2">
                    <h2 class="text-center fw-bold fs-1"><b class="h2">Advantages</b></h2>
                    <div class="line"></div>
                    <h4 class="h2 text-center mt-4">Our
                        Expert Educators</h4>

                    <div>
                        <p class="text-dark opacity-75"
                            style="text-align: justify;font-size:1.2rem;padding:5px;margin-top:1rem;">
                            Learn from industry-leading experts with real-world experience to guide you through every step
                            of your learning journey.
                        </p>

                    </div>

                    <h4 class="h2 text-center">24*7
                        Support</h4>
                    <p class="text-dark opacity-75"
                        style="text-align: justify;font-size:1.2rem;padding:5px;margin-top:1rem;">
                        Our dedicated support team is available around the clock to assist you with any questions or
                        challenges.
                    </p>

                    <h4 class="h2 text-center">Free
                        Course Upgrade </h4>
                    <p class="text-dark opacity-75"
                        style="text-align: justify;font-size:1.2rem;padding:5px;margin-top:1rem;">
                        Stay ahead of the curve with free updates to your course content, ensuring you always have
                        access to the latest industry trends.
                    </p>

                    <h4 class="h2 text-center">
                        🎓 Certification </h4>
                    <p class="text-dark opacity-75"
                        style="text-align: justify;font-size:1.2rem;padding:5px;margin-top:1rem;">
                        Earn an industry-recognized certificate upon course completion to validate your skills and boost
                        your career opportunities.
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 mb-2"></div>
            </div>
        </div>
    </div>

<!-- Certificate Section -->
<div class="container mt-5">
    <div id="certificateCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Content -->
        <div class="carousel-inner text-center">

            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="certificate-card">
                    <img src="ekimage/image1/summer_traning.png" alt="Certificate" class="certificate-img">
                    <h3 class="mt-3">Certificate of Completion</h3>
                    <p>Awarded to:</p>
                    <h4 class="fw-bold">Ekana Technology</h4>
                    <p>For successfully completing the <strong>45-Days Summer Training</strong>.</p>
                </div>
            </div>

            {{-- <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="2000">
                <div class="certificate-card">
                    <img src="ekimage/image1/demo_certificate.webp" alt="Certificate" class="certificate-img">
                    <h3 class="mt-3">Certificate of Excellence</h3>
                    <p>Awarded to:</p>
                    <h4 class="fw-bold">Ekana Technology</h4>
                    <p>For outstanding performance in <strong>Graphic Design Course</strong>.</p>
                </div>
            </div> --}}

            <!-- Slide 3 -->
            <div class="carousel-item" data-bs-interval="2000">
                <div class="certificate-card">
                    <img src="ekimage/image1/internship_traning.png" alt="Certificate" class="certificate-img">
                    <h3 class="mt-3">Certificate of Achievement</h3>
                    <p>Awarded to:</p>
                    <h4 class="fw-bold">Ekana Technology</h4>
                    <p>For successfully completing the <strong>Internship Training</strong>.</p>
                </div>
            </div>

        </div>

        <!-- Carousel Navigation -->
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#certificateCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#certificateCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}

    </div>
</div>

{{-- End Certificate --}}


    <!--feculity section start-->
    <!--Our Course section button-->
    <div id="content-section">
        <div class="container-fluid   pt-4 mt-2" id="container-bot">
            <div class="container">
                <div class="row" data-aos="zoom-in-right" data-aos-duration="4000">
                    <img src="ekimage/image/Frame 1000006663.svg" alt="">
                </div>
            </div>
        </div>
    </div>


    <!--Our Course Section Button-->
    <script>
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 1,
                itemsDeskto1: [1000, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                slideSpeed: 1000,
                singleItem: true,
                autoPlay: true
            });
        });
    </script>
@endsection
