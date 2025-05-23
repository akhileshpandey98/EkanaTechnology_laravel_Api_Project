@extends('layout.mainpages')
@section('main-contant')
    <div class="section-python-detailes pt-4 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 text-center" data-aos="fade-down" data-aos-duration="3000">
                    <div class="card1 shadow p-3" style="max-width:25rem">
                        <img src="{{ asset('ekimage/image/python.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-duration="3000">
                    <h2 data-aos="fade-right" data-aos-duration="3000"><b class="h2">Welcome to Python Training</b></h2>
                    <div class="line"></div>

                    <p style="text-align: justify;font-size:1.1rem;padding:5px;">Welcome to Ekana Technology’s Python
                        Training program! Whether you’re a beginner looking to learn
                        programming from scratch or an experienced developer aiming to expand your skill set, our Python
                        Training course is designed to provide you with the knowledge and practical experience needed to
                        excel in the world of programming and software development.
                        In this training, you’ll embark on an enriching journey through the fundamentals and advanced
                        concepts of Python programming language.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-3 mt-3 text-center">
                    <h2><b class="h2">Course Description</b></h2>
                    <div class="line"></div>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ asset('ekimage/image/pythontext.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
                <div class="col-lg-10 col-md-10 col-sm-12" data-aos="zoom-in" data-aos-duration="3000">
                    <p style="text-align: justify;font-size:1.1rem;padding:5px;">Whether you aspire to become a software
                        developer, data analyst, web developer, or pursue a
                        career in artificial intelligence and machine learning, our Python Training course will provide
                        you with the foundation and expertise needed to succeed in today’s technology-driven world.</p>

                    <p style="text-align: justify;font-size:1.1rem;padding:5px;">Ready to unlock the power of Python and
                        kickstart your programming journey? Enroll now with
                        Ekana Technology and take the first step towards mastering one of the most versatile and
                        in-demand programming languages!</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
            </div>
        </div>
    </div>
    <!--Python Ends-->
@endsection
