@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="team-us-section">
        <div class="team-us-overlay"></div>
        <div class="about-us-content">
            <h1 class="display-1 fw-bold" data-aos="fade-down" data-aos-duration="3000"
                style=" text-shadow: 2px 3px 5px red; margin-top: 10%;">Ours Team</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12"></div>
                    <div class="col-lg-8 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="3000">
                        <p class=" opacity-75" style="text-align: justify;font-size:1.2rem;padding:5px;color:white;">
                            Our team is the cornerstone of our success, a group of passionate professionals committed to
                            delivering excellence across every aspect of our work. With a focus on innovation,
                            collaboration, and problem-solving, each member brings a unique set of skills that
                            contribute to
                            our collective vision. Together, we strive to push boundaries, enhance client experiences,
                            and
                            create impactful solutions that drive lasting results.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container-fluid bg-white  pb-4">
        <div class="container bg-white shadow">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/placement1.jpeg') }}" alt=""
                                    class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Anup Mishra
                                <strong>Training Head / Full Stack Developer</strong>
                            </h3>
                            <p class="description">
                                Anup leads our training programs and excels in crafting robust full-stack solutions
                                tailored to client needs.
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/User.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Amit Singh
                                <strong>Graphic Designer</strong>
                            </h3>
                            <p class="description">
                                Amit creates visually compelling designs that enhance user experience and brand
                                identity.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/User.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Shruti Singh
                                <strong>Business Analyst</strong>
                            </h3>
                            <p class="description">
                                Shruti specializes in bridging the gap between business goals and technical solutions
                                with insightful analysis.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('ekimage/image/User.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <h3 class="testimonial-info">
                                Ishita Anand
                                <strong>Business Analyst</strong>
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
                                <strong>Business Development Executive</strong>
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
                                <strong>Web Developer</strong>
                            </h3>
                            <p class="description">
                                Khurshed develops dynamic, user-friendly websites that deliver exceptional performance
                                and functionality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div> --}}


    <!--Dynamic Image Teams Member Start-->
    <div class="container-fluid bg-white  pb-4 py-2">
        <div class="container bg-white">
            <div class="row" data-aos="fade-down" data-aos-duration="3000">
                <div class="col-md-2"></div>
                <div class="col-md-8 mb-3">
                    <div id="testimonial-slider" class="owl-carousel">
                        @foreach ($teams as $profile)
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="{{ asset('storage/' . $profile->file) }}" alt=""
                                        class="img-responsive">
                                </div>
                                <h3 class="testimonial-info">
                                    {{ $profile->name }}
                                    <small>{{ $profile->daveloper }}</small>
                                </h3>
                                <p class="description">
                                    {{ $profile->description }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!--Dynamic Image Teams Member Ends-->

    <!--Highly student section expert-->
    <div class="container-fluid">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center pt-3">
                    <h2><b>We pride ourselves on having a team
                            of <b style="color: #dc3024;"><br> highly-skilled</b> experts</b></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-sm-1"></div>
            <div class="col-sm-12 col-md-6 col-lg-3 m-3">
                <div class="card2"> <img src="ekimage/image/placement1.jpeg" alt="">
                    <div class="child-div" style="border-radius:20px">
                        <p>Anup Mishra</p>
                        <strong>Head of Training & Development</strong>
                        {{--  <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/akhilesh.jpg" alt="">
                    <div class="child-div" style="border-radius:20px">
                        <p>Akhilesh Pandey</p>
                        <strong>Web Developer</strong>

                        {{-- <p>Web Developer</p> --}}
                        {{-- <p>Basic Section 3</p>
                        <p>Basic Section 4</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/khurshedalam.jpg" alt="">
                    <div class="child-div" style="border-radius:20px">
                        <p>Khurshed Alam</p>
                        <strong>Web Developer</strong>

                        {{--  <p>Basic Section 2</p>
                        <p>Basic Section 3</p>
                        <p>Basic Section 4</p> --}}
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                        <div class="card2"> <img src="ekimage/image/piyushpanday.jpg" alt="">
                            <div class="child-div" style="border-radius:20px">
                                <p>Piyush Pandey</p>
                                <strong>Business Development Executive</strong>

                                {{-- <p>Basic Section 2</p>
                                <p>Basic Section 3</p>
                                <p>Basic Section 4</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                        <div class="card2"> <img src="ekimage/image/shivam.jpg" alt="">
                            <div class="child-div" style="border-radius:20px">
                                <p>shivam Singh</p>
                                <strong>Wordpress Developer</strong>

                                {{-- <p>Basic Section 2</p>
                                <p>Basic Section 3</p>
                                <p>Basic Section 4</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                        <div class="card2"> <img src="ekimage/image/seemapatel.jpg" alt="">
                            <div class="child-div" style="border-radius:20px">
                                <p>Seema Patel</p>
                                <strong>Web Developer</strong>
                                {{--  <p>Basic Section 2</p>
                                <p>Basic Section 3</p>
                                <p>Basic Section 4</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-1"></div>

                </div>
            </div>

            <div class="col-sm-1"></div>
        </div>
    </div>
    <!--Highly student section expert-->

    <!-- Ekana Information page start  -->
    <div class="container pt-3">
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <h2 class="text-center"><b class="h2">Student Reviews</b></h2>
                <div class="line"></div>

            </div>
        </div>
        <div class="row align-items-center mb-3" data-aos="zoom-in" data-aos-duration="3000">
            <!-- Text Section -->
            <div class="col-md-7">
                <p>At Ekana Technology, we pride ourselves on our ability to deliver
                    high-quality courses tailored to the needs of both professionals and beginners alike. With a strong
                    focus on flexibility and adaptability, our training programs are designed to accommodate the unique
                    learning requirements of each individual. Our comprehensive Training Course services encompass
                    Vocational Training, Summer Training, Industrial Training, Apprenticeship Training, Internship
                    Training, and Project Training.
                </p>
                <p>
                    Whether you're a student looking to bolster your resume, a working
                    professional seeking to upskill, or an entrepreneur aiming to expand your knowledge, our diverse
                    course offerings cater to all. What sets us apart is our team of experienced instructors who bring
                    real-world industry expertise to the classroom. Passionate about sharing their knowledge, our
                    instructors provide individual attention and guidance, ensuring that every student grasps the
                    subject matter thoroughly. </p>
            </div>

            <!-- Video Section -->
            <div class="col-md-5 mb-5 card " style="box-shadow: inset 2px 2px 8px 1px red; border-radius: 20px;">
                {{-- <h3 style="font-weight: bold;"> SUMMER TRAINING & APPRENTICESHIP</h3>
                <hr class="w-90 mx-auto mb-2 mb-xl-9 border-dark-subtle"> --}}
                <div class="ratio ratio-16x9">
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
                            <div class="carousel-item active" data-bs-interval="10000">
                                {{-- <img src="{{asset('ekimage/image/khurshedalam.jpg')}}" class="d-block" alt="..." style="height:5rem;width:5rem;border-radius:100%"> --}}
                                <iframe width="1400" src="https://www.youtube.com/embed/A9b0K-RKHtc"
                                    title="Student  Feedback  Batch-2024  Ekana Technologies Pvt Ltd Lucknow"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" class="img-fluid p-2" allowfullscreen
                                    style="height: 300px;   border-radius: 20px;">
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
                                    style="height: 300px;   border-radius: 20px;">
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
                                    style="height: 300px;   border-radius: 20px;">
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
    <!-- Ekana Inaformation page End -->
    <script>
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 1,
                itemsDeskto1: [1000, 1],
                itemsDesktopstrong: [979, 1],
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
