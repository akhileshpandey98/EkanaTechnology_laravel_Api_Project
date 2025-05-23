@extends('layout.mainpages')
@section('main-contant')
    <!-- About Page top section start -->
    <section class="about-us-section">
        <div class="about-us-overlay"></div>
        <div class="about-us-content">
            <h1 class="display-1 fw-bold " style=" text-shadow: 2px 3px 5px red;">Syllabus Traning</h1>
        </div>
    </section>


    <!-- Hero Section -->
    <div class="hero mt-3"  data-aos="fade-right" data-aos-dratation="3000">
        <h1>Summer Training Program</h1>
        <p>Join us for an enriching experience</p>
    </div>
    <!-- Program Tenure & Timing -->
    <div class="container content-section">
        <div class="row mt-5"  data-aos="zoom-in" data-aos-dratation="3000">
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

        <div class="row">
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
            </div>
        </div> --}}
    </div>
    <!-- Popular Courses -->

    <div class="container">
        <h2 class="text-center"><b class="h2">Additional Benefits</b></h2>
        <div class="line mb-3"></div>

        <div class="row"  data-aos="zoom-in" data-aos-dratation="3000">
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
            <div class="col-sm-12 d-flex justify-content-center mt-3"  data-aos="fade-up" data-aos-dratation="3000">
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
                <div class="row"  data-aos="zoom-in" data-aos-dratation="3000">
                    <img src="ekimage/image/Frame 1000006663.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Our Course Section Button-->
@endsection
